<?php

/**
 *
 */
class Connection
{

    function __construct()
    {
        # code...
    }

    function make($config)
    {
        # code...
        try {
            //return new PDO('mysql:localhost=127.0.0.1;dbname=mytodo', 'root', '');
            return new PDO (
                $config['host'] . ';dbname=' . $config['dbname'],
                $config['user'],
                $config['password'],
                $config['options']
            );
            //die('Success');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            die('Error');
        }

    }
}


 ?>
