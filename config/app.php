<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Application Name
      |--------------------------------------------------------------------------
      |
      | This value is the name of your application. This value is used when the
      | framework needs to place the application's name in a notification or
      | any other location as required by the application or its packages.
     */


    'name' => 'Evrica',

    /*
      |--------------------------------------------------------------------------
      | Application Environment
      |--------------------------------------------------------------------------
      |
      | This value determines the "environment" your application is currently
      | running in. This may determine how you prefer to configure various
      | services your application utilizes. Set this in your ".env" file.
      |
     */

    'env' => env('APP_ENV', 'developmenta'),
    /*
      |--------------------------------------------------------------------------
      | Application Debug Mode
      |--------------------------------------------------------------------------
      |
      | When your application is in debug mode, detailed error messages with
      | stack traces will be shown on every error that occurs within your
      | application. If disabled, a simple generic error page is shown.
      |
     */
    'debug' => env('APP_DEBUG', true),
    /*
      |--------------------------------------------------------------------------
      | Application URL
      |--------------------------------------------------------------------------
      |
      | This URL is used by the console to properly generate URLs when using
      | the Artisan command line tool. You should set this to the root of
      | your application so that it is used when running Artisan tasks.
      |
     */
    'url' => env('APP_URL', 'http://evrica.local'),
    'api_path' => '/backend/api',

    'public_sub_folder' => env('PUBLIC_SUBFOLDER', ''),
    /*
      |--------------------------------------------------------------------------
      | Application Timezone
      |--------------------------------------------------------------------------
      |
      | Here you may specify the default timezone for your application, which
      | will be used by the PHP date and date-time functions. We have gone
      | ahead and set this to a sensible default for you out of the box.
      |
     */
    'timezone' => 'UTC',
    /*
      |--------------------------------------------------------------------------
      | Application Locale Configuration
      |--------------------------------------------------------------------------
      |
      | The application locale determines the default locale that will be used
      | by the translation service provider. You are free to set this value
      | to any of the locales which will be supported by the application.
      |
     */
    'locale' => 'en',
    //System default language id
    'default_language' => 3,
    /*
      |--------------------------------------------------------------------------
      | Application Fallback Locale
      |--------------------------------------------------------------------------
      |
      | The fallback locale determines the locale to use when the current one
      | is not available. You may change the value to correspond to any of
      | the language folders that are provided through your application.
      |
     */
    'fallback_locale' => 'en',
    /*
      |--------------------------------------------------------------------------
      | Clear old data after interval (hours)
      |--------------------------------------------------------------------------
      |
      | Clear system old data (hours)
      |
      | - ChatQuestion
      | - ChatInvitation
      | - ChatGuest
      | - Visit
      | - Visitor
      | - ChatRoom
      | - RoomUser
      | - RoomFile
      | - RoomGuest
      | - RoomMessage
      |
     */
    'rm_chatQuestion' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_chatInvitation' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_chatGuest' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_visit' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_visitor' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_chatRoom' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_roomUser' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_roomFile' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_roomGuest' => [
        'interval' => 336,
        'force' => false,
    ],
    'rm_roomMessage' => [
        'interval' => 336,
        'force' => false,
    ],

    /*
      |  Frontend path
     */
    'frontend' => env('APP_FRONTEND', ''),
    'frontend_localFileUrl' => 'http://localhost:8080/#/file',
    'frontend_devFileUrl' => 'https://dev.evrica.io/#/file',
    /*
      |--------------------------------------------------------------------------
      | Encryption Key
      |--------------------------------------------------------------------------
      |
      | This key is used by the Illuminate encrypter service and should be set
      | to a random, 32 character string, otherwise these encrypted strings
      | will not be safe. Please do this before deploying an application!
      |
     */
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
    /*
      |--------------------------------------------------------------------------
      | Logging Configuration
      |--------------------------------------------------------------------------
      |
      | Here you may configure the log settings for your application. Out of
      | the box, Laravel uses the Monolog PHP logging library. This gives
      | you a variety of powerful log handlers / formatters to utilize.
      |
      | Available Settings: "single", "daily", "syslog", "errorlog"
      |
     */
    'log' => env('APP_LOG', 'single'),
    'log_level' => env('APP_LOG_LEVEL', 'debug'),
    /*
      |--------------------------------------------------------------------------
      | Autoloaded Service Providers
      |--------------------------------------------------------------------------
      |
      | The service providers listed here will be automatically loaded on the
      | request to your application. Feel free to add your own services to
      | this array to grant expanded functionality to your applications.
      |
     */
    'providers' => [
        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Torann\GeoIP\GeoIPServiceProvider::class,
        PragmaRX\Countries\ServiceProvider::class,
        Orangehill\Iseed\IseedServiceProvider::class,
        NotificationChannels\WebPush\WebPushServiceProvider::class,
        Chumper\Zipper\ZipperServiceProvider::class,
        /*
         * Package Service Providers...
         */
        Laravel\Tinker\TinkerServiceProvider::class,
        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        //App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\ApiHandlerProvider::class,
        App\Providers\RouteServiceProvider::class,
        Tymon\JWTAuth\Providers\JWTAuthServiceProvider::class,
        // Askedio\LaravelRatchet\Providers\LaravelRatchetServiceProvider::class,
        // Telegram\Bot\Laravel\TelegramServiceProvider::class,
        App\Providers\HelpersProvider::class,
        Vinelab\Bowler\BowlerServiceProvider::class,
        Laravel\Socialite\SocialiteServiceProvider::class,
    ],
    /*
      |--------------------------------------------------------------------------
      | Class Aliases
      |--------------------------------------------------------------------------
      |
      | This array of class aliases will be registered when this application
      | is started. However, feel free to register as many as you wish as
      | the aliases are "lazy" loaded so they don't hinder performance.
      |
     */
    'aliases' => [
        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'JWTAuth' => Tymon\JWTAuth\Facades\JWTAuth::class,
        'JWTFactory' => Tymon\JWTAuth\Facades\JWTFactory::class,
        'Telegram' => Telegram\Bot\Laravel\Facades\Telegram::class,
        'UserHelper' => \App\Http\Helpers\userHelper::class,
        'LangHelper' => App\Facades\LangHelper::class,
        'UserHelper' => App\Facades\UserHelper::class,
        'SettingsHelper' => App\Facades\SettingsHelper::class,
        'PermissionHelper' => App\Facades\PermissionHelper::class,
        'WsHelper' => App\Facades\WsHelper::class,
        'Registrator' => Vinelab\Bowler\Facades\Registrator::class,
        'GeoIP' => \Torann\GeoIP\Facades\GeoIP::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,
        'TaxHelper' => \App\Http\Helpers\taxHelper::class,
        'ImportHelper' => \App\Http\Helpers\importHelper::class,
        'Countries' => PragmaRX\Countries\Facade::class,
        'ChatHelper' => \App\Http\Helpers\chatHelper::class,
        'ChatSettingsHelper' => \App\Http\Helpers\chatSettingsHelper::class,
        'LiveChatHelper' => \App\Http\Helpers\liveChatHelper::class,
        'CountryHelper' => \App\Http\Helpers\countryHelper::class,
        'DomainHelper' => \App\Http\Helpers\domainHelper::class,
        'VisitorHelper' => \App\Http\Helpers\visitorHelper::class,
        'PushNotificationHelper' => \App\Http\Helpers\pushNotificationHelper::class,
        'DataExchangeHelper' => \App\Http\Helpers\dataExchangeHelper::class,
        'DepartmentHelper' => \App\Http\Helpers\departmentHelper::class,
        'DEPermissionHelper' => \App\Http\Helpers\dePermissionHelper::class,
        'Zipper' => Chumper\Zipper\Zipper::class,
        'ZipArchiveHelper' => \App\Http\Helpers\zipArchiveHelper::class,
    ],
];
