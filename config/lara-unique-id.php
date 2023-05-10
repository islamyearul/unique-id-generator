
<?php

// config for Yearul/LaraUniqueId
return [

    /* 
    |--------------------------------------------------------------------------
    | Unique Id Generator Config
    |--------------------------------------------------------------------------
    |
    | This is the config file for unique id generator. You can override
    | this config file by placing it in your application's config directory
    | and change the values as per your need.
    |
    */

     /*
    |--------------------------------------------------------------------------
    | Default Pad Length
    |--------------------------------------------------------------------------
    |
    | If no  pad length is provided to the generate method, this value will be used
    |
    */
    "pad_len" => 5,

    /*
    |--------------------------------------------------------------------------
    | Default Prefix
    |--------------------------------------------------------------------------
    |
    | If no prefix is provided to the generate method, this value will be used
    |
    */
    "prefix" => "YEA",
    /*
    |--------------------------------------------------------------------------
    | Default year and year_val
    |--------------------------------------------------------------------------
    |
    | If no year and year_val is provided to the generate method, this value will be used
    |
    */

    "year" => true,
    "year_val" => date('Y'),
    /*
    |--------------------------------------------------------------------------
    | Default  start from
    |--------------------------------------------------------------------------
    |
    | If no start from is provided to the generate method, this value will be used
    |
    */

    "start_from" => 0,  //  0 to 999999999* 

    /*
    |--------------------------------------------------------------------------
    | Default  pad string
    |--------------------------------------------------------------------------
    |
    | If no pad string is provided to the generate method, this value will be used
    |
    */

    "pad_string" => 0,   // 0, #, *, $.......etc
    /*
    |--------------------------------------------------------------------------
    | Default  pad_direction
    |--------------------------------------------------------------------------
    |
    | If no pad_direction is provided to the generate method, this value will be used
    |
    */

    "pad_direction" => STR_PAD_LEFT,   // STR_PAD_LEFT, STR_PAD_RIGHT

];