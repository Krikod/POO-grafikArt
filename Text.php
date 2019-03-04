<?php

/**
 * Class Text
 * Allows to manipulate text
 */
class Text
{
//    private static $suffix = " €";

    const SUFFIX = " €";

//    public static function publicWithZero($chiffre)
//    {
//        return self::withZero($chiffre);
//    }

    /**
     * @param $chiffre Integer to preffix by 0 if < 10
     * @return string
     */
    public static function withZero($chiffre)
    {
        if ($chiffre < 10) {
            return 'O' . $chiffre . self::SUFFIX;
        } else {
            return $chiffre . self::SUFFIX;
        }
    }
}