<?php

    /**
     *
     */
    class App
    {
        protected static $registery = [];

        public static function bind($key, $value)
        {
            # code...
            static::$registery[$key] = $value;
        }

        public static function get($key)
        {
            # code...
            if (! array_key_exists($key, static::$registery)) {
                # code...
                throw new \Exception("Error Processing Request", 1);

            }
            return static::$registery[$key];
        }
    }

 ?>
