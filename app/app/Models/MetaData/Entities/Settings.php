<?php

namespace App\Models\MetaData\Entities;

use App\Models\MetaData\Types\MetaData;
use App\Models\MetaData\Types\Field;
use App\Models\MetaData\Types\Enum;
use App\Models\MetaData\Types\Group;

class Settings extends MetaData
{

    public function schema()
    {
        return parent::init('settings')
            ->addField((new Field('language'))
                ->label("{!!Language!!}")
                ->length(0)
                ->type('enum')
                ->searchable(false))
            ->addField(
                (new Field('notifications'))
                    ->label('Notifications')
                    ->type('boolean')
            )
            ->addField((new Field('social_login'))
                ->label('Social login')
                ->type('enum')
                ->multiple(true))
            ->addField((new Field('insert_user_type'))
                ->label('Counterparties authentication mode')
                ->type('enum'))
            ->addField(
                (new Field('text_color'))
                    ->label('Text Color')
                    ->type('text')
            )
            ->addField(
                (new Field('facebook_client_id'))
                    ->label('Facebook client id')
                    ->type('text')
            )
            ->addField(
                (new Field('facebook_secret_key'))
                    ->label('Facebook secret key')
                    ->type('text')
            )
            ->addField(
                (new Field('google_client_id'))
                    ->label('Google client id')
                    ->type('text')
            )
            ->addField(
                (new Field('google_secret_key'))
                    ->label('Google secret key')
                    ->type('text')
            )
            ->addField(
                (new Field('twitter_client_id'))
                    ->label('Twitter client id')
                    ->type('text')
            )
            ->addField(
                (new Field('twitter_secret_key'))
                    ->label('Twitter secret key')
                    ->type('text')
            )
            ->addEnum(
                (new Enum('language'))
                    ->addItem(["id" => 1, "value" => "English"])
                    ->addItem(["id" => 2, "value" => "Bulgarian"])
                    ->addItem(["id" => 3, "value" => "Russian"])
                    ->addItem(["id" => 4, "value" => "Romanian"])
                    ->addItem(["id" => 5, "value" => "Germanic"])
            )
            ->addEnum(
                (new Enum('notifications'))
                    ->addItem(['id' => 1, "value" => "{!!yes!!}"])
                    ->addItem(['id' => 0, "value" => "{!!no!!}"])
            )
            ->addEnum(
                (new Enum('social_login'))
                    ->addItem(["id" => 1,"value" => "facebook"])
                    ->addItem(["id" => 2,"value" => "twitter"])
                    ->addItem(["id" => 3,"value" => "google"])
            )
            ->addEnum(
                (new Enum('insert_user_type'))
                    ->addItem(["id" => 3, "value" => "Hide registration form"])
                    ->addItem(["id" => 2, "value" => "Not confirmed"])
                    ->addItem(["id" => 1, "value" => "Confirmed"])
            )
            ->addGroups(
                (new Group('system'))
                    ->addItem('language')
                    ->addItem('notifications')
            )
            ->addGroups(
                (new Group('design'))
                    ->addItem('text_color')
            )
            ->addGroups(
                (new Group('Authentication Settings'))
                    ->addItem('insert_user_type')
                    ->addItem('social_login')
                    ->addItem('facebook_client_id')
                    ->addItem('facebook_secret_key')
                    ->addItem('google_client_id')
                    ->addItem('google_secret_key')
                    ->addItem('twitter_client_id')
                    ->addItem('twitter_secret_key')
            )
            ->get();
    }

}
