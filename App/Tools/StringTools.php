<?php

namespace App\Tools;

class StringTools
{
    public static function toCamelCase($value, $pascalcase = false)
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $value));
        $value = str_replace(' ', '', $value);

        if ($pascalcase === false) {
            return lcfirst($value);
        }
        else {
            return $value;
        }
    }
    
    public static function toPascalCase($value)
    {
        return self::toCamelCase($value, true);
    }
}