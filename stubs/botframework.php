<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bot Handle
    |--------------------------------------------------------------------------
    |
    | This is the bot handle that represents your bot, when using the
    | web chat from the Microsoft Bot Framework. If you do not
    | use web chat, leave it blank.
    |
    */
    'bot_handle' => env('MICROSOFT_BOT_HANDLE'),

    /*
    |--------------------------------------------------------------------------
    | App ID
    |--------------------------------------------------------------------------
    |
    | Your Microsoft Bot Framework App ID.
    |
    */
    'app_id' => env('MICROSOFT_APP_ID'),

    /*
    |--------------------------------------------------------------------------
    | App Key
    |--------------------------------------------------------------------------
    |
    | Your Microsoft Bot Framework App key/secret.
    |
    */
    'app_key' => env('MICROSOFT_APP_KEY'),
];