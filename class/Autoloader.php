<?php

namespace Krikod;

/**
 * Class Autoloader
 */
class Autoloader
{
    /**
     * Enregistre l'autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclut le fichier correspondant à la classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        // ne charger que classes du namespace Krikod
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require 'class/' . $class . '.php';
        }
    }
}
