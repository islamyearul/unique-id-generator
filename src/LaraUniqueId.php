<?php

namespace Yearul\LaraUniqueId;
use Illuminate\Support\Str;

class LaraUniqueId
{
    public function generate($input, $start_from = null, $pad_len = null, $pad_string = null, $prefix = null, $Year = null)
    {
        $prefix = empty($prefix) ? config('unique-id-generator.prefix') : $prefix;
        $prefix = Str::upper($prefix);
        $pad_len =  empty($pad_len) ? config('unique-id-generator.pad_len') : $pad_len;
        $pad_len = intval($pad_len);
        // check is year true from config
        if(config('unique-id-generator.year') == true){
            $year = empty($year) ? config('unique-id-generator.year') : $year;
            $year = intval($year);
        }else{
            $year = '';
        }

        $start_from = empty($start_from) ? config('unique-id-generator.start_from') : $start_from;
        $start_from = intval($start_from);
        $input = intval($input); 
        $input = $input + $start_from;
        $pad_direction =config('unique-id-generator.pad_direction');

        if ($pad_len <= strlen($input)) {
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
        }

        if (is_string($prefix)) {
            return sprintf("%s%s%s%s%s", $prefix,$GetYear,$shop_id, '-', str_pad($input, $pad_len, "0",  $pad_direction));
        }

        return sprintf("%s%s%s%s%s", $GetYear,$shop_id, '-', str_pad($input, $pad_len, "0",  $pad_direction));
    }
}
