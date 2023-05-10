<?php

namespace Yearul\LaraUniqueId;
use Illuminate\Support\Str;

class LaraUniqueId
{
    public function generate($input, $start_from = null, $pad_len = null, $pad_string = null, $prefix = null, $Year = null)
    {
        $prefix = empty($prefix) ? config('lara-unique-id.prefix') : $prefix;
        $prefix = Str::upper($prefix);
        $pad_len =  empty($pad_len) ? config('lara-unique-id.pad_len') : $pad_len;
        $pad_len = intval($pad_len);
        // check is year true from config
        if(config('lara-unique-id.year') == true){
            $year = empty($year) ? config('lara-unique-id.year') : $year;
            $year = intval($year);
        }else{
            $year = '';
        }

        $start_from = empty($start_from) ? config('lara-unique-id.start_from') : $start_from;
        $start_from = intval($start_from);
        $input = intval($input); 
        $input = $input + $start_from;
        $pad_direction =config('lara-unique-id.pad_direction');

        if ($pad_len <= strlen($input)) {
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
        }

        if (is_string($prefix)) {
            return sprintf("%s%s%s%s%s", $prefix,$GetYear,$shop_id, '-', str_pad($input, $pad_len, "0",  $pad_direction));
        }

        return sprintf("%s%s%s%s%s", $GetYear,$shop_id, '-', str_pad($input, $pad_len, "0",  $pad_direction));
    }
}
