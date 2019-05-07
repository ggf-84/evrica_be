<?php

/**
 * Webhooks config file
 */

return [
    // max_attempts to send request to webhook url
    'max_attempts' => 3,
    
    'retry_after' => 5,
    
    'public_events' => [
        'ExampleEvent',
        'NewGuest'
    ],
];
