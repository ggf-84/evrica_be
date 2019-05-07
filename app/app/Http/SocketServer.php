<?php

namespace App\Http;

use Ratchet\ConnectionInterface;
use Askedio\LaravelRatchet\RatchetServer;
use App\Http\Traits\ChatTrait;
use App\Http\Traits\NotificationTrait;

class SocketServer extends RatchetServer {

    use ChatTrait, NotificationTrait;
    
    /**
     * On message event
     * @param ConnectionInterface $conn
     * @param object $input
     * @return void
     */
    public function onMessage(ConnectionInterface $conn, $input) {

        /*
         * Format of the request
         * 
         * {method:register,data:{token:4h72384823h,room:23}}
         * {method:send_msg,data:{msg:'Send',room:23}}}
         * {method:system_action,data:{msg:'user_typing',room:23}
         */
        parent::onMessage($conn, $input);
        
        if (!$this->throttled) {


            $data = json_decode($input);
            
            /*
             * Check if request data is in json format
             * if request form is not json disconnect user
             */

            if (!$data) {
                $this->send($conn, json_encode(['message'=>'Wrong format, please use json!','type'=>'error','sender'=>'Server']));
                $this->send($conn, json_encode(['message'=>'Disconnected','type'=>'status','sender'=>'Server']));
                $this->abort($conn);
                return false;
            }
            
            // Check if user inserted function exist
            
            if ($data && method_exists($this, $data->method)) {
                    $this->{$data->method}($data, $conn);
            }
           
        }
    }
    
    public function onOpen(ConnectionInterface $conn) {
        parent::onOpen($conn);
    }

}
