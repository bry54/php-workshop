<?php

class Validator {
    public static function isString($value)
    {
        return strlen(trim($value)) == 0;
    }

    public static function isAcceptableLength($value, $min = 0, $max=INF)
    {
        if (self::isString($value)){
            return strlen($value) >= $min && strlen($value) <= $max;
        }
    }

}