<?php
    return [
        'database' => [
            'host' => 'mysql:localhost=127.0.0.1',
            'dbname' => 'mytodo',
            'user' => 'root',
            'password' => '',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];
 ?>
