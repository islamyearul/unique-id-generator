<?php

namespace Yearul\LaraUniqueId;
use Illuminate\Support\Str;

class LaraUniqueId
{
    public function generate($input,  $pad_len = null, $pad_string = null, $prefix = null, $year = null)
    {
        $prefix = empty($prefix) ? config('lara-unique-id.prefix') : $prefix;
        $prefix = Str::upper($prefix);
        $pad_len =  empty($pad_len) ? config('lara-unique-id.pad_len') : $pad_len;
        $pad_len = intval(5);
        // check is year true from config
        if(config('lara-unique-id.year') == true){
            $year = empty($year) ? config('lara-unique-id.year') : $year;
            $year = intval($year);
        }else{
            $year = '';
        }

        $input = intval($input); 
        $input = $input + $start_from;
        $pad_direction =config('lara-unique-id.pad_direction');
        $pad_string = empty($pad_string) ? config('lara-unique-id.pad_string') : $pad_string;

        if ($pad_len <= strlen($input)) {
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate Unique number', E_USER_ERROR);
        }

        if (is_string($prefix)) {
            return sprintf("%s%s%s%s", $prefix,$year, '-', str_pad($input, $pad_len, $pad_string,  $pad_direction));
        }

        return sprintf("%s%s%s%s", $year, '-', str_pad($input, $pad_len, $pad_string,  $pad_direction));
    }
}
