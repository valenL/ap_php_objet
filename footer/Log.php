<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 13/03/2018
 * Time: 11:35
 */

class Log
{
    /**
     * @param $data
     */
    public static function logWrite($data)  // string message d'erreur
    {
        $directory = "/logs/";
        $file = date('Y-m-d') . ".log";
        $path = dirname(__DIR__) . $directory . $file; // chemin de la racine
        $data = date('H:i:s') . " " . $data;
        $handle = fopen($path, "a");  // ajouter mechanisme de verouillage = condition

        if (flock($handle, LOCK_EX)) {
            fwrite($handle,  $data . PHP_EOL);
            flock($handle,  LOCK_UN );
        }

    }

}