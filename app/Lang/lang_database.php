<?php

namespace App\Lang;

class lang_database
{
    static function trans($str = null)
    {
        $lang = include(base_path('resources/lang/' . app()->getLocale() . '/lang.php'));
        if ($str == null) {
            $str = ob_get_clean();
        }
        foreach ($lang as $k => $v) {
            $str = str_replace($k, $v, $str);
        }
        return $str;
    }
}
