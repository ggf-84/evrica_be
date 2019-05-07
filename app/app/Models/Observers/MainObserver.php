<?php

namespace App\Models\Observers;

use Illuminate\Database\Eloquent\Model;
use App\Messaging\Traits\NotificationsTrait;
use App\Facades\UserHelper;
use App\Http\Helpers\notificationHelper;

class MainObserver
{
    use NotificationsTrait;

    public $notificationEvent = 'newNotification';


    /**
     * Listen to the model created event.
     *
     * @param  Model $model
     * @return void
     */
    public function created(Model $model)
    {
        $type = 'create';
        $this->setObserve($model, $type);
    }

    /**
     * Listen to the model deleted event.
     *
     * @param  Model $model
     * @return void
     */
    public function deleted(Model $model)
    {
        $type = 'delete';
        $this->setObserve($model, $type);
    }

    /**
     * Listen to the model updated event.
     *
     * @param  Model $model
     * @return void
     */
    public function updated(Model $model)
    {
        $type = 'update';
        $this->setObserve($model, $type);
    }

    /**
     * Listen to the model updated event.
     *
     * @param  $model
     * @param  $type
     * @return void
     */
    public function setObserve($model, $type)
    {
        $event   = $this->notificationEvent;
        $compId  = UserHelper::company()->id;
        $data    = $this->getNotification($model, $type);

        if($compId && $data)
            $this->callEvent($data, $event, $compId);
    }

    /**
     * Get notification of modified model.
     *
     * @param  Model $model
     * @param  $type
     * @return array
     */
    public function getNotification($model, $type)
    {
        $changes = [];
        if($model){
            $dirty = $model->getDirty();

            switch ($type) {
                case 'create':

                    foreach($dirty as $key => $value)
                        $changes[$key] = ['new' => $value];

                    break;
                case 'delete':

                    $changes = $model->getOriginal();

                    break;
                case 'update':

                    foreach($dirty as $key => $value){
                        $original       = $model->getOriginal($key);
                        $changes[$key]  = ['old' => $original, 'new' => $value];
                    }
                    $changes['id'] = $model->getOriginal('id');

                    break;
            }
        }

        if(isset($changes['updated_at'])) unset($changes['updated_at']);
        if(isset($changes['created_at'])) unset($changes['created_at']);

        if(count($changes) == 1 && isset($changes['id'])) {
            return null;
        }

        $data = notificationHelper::createNotificationMessage($model, $type, $changes);

        return $data;
    }

}