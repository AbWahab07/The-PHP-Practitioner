<?php
    require 'core/database/Connection.php';
    require 'core/database/QueryBuilder.php';
    require 'core/Router.php';

    $config = require 'config.php';
    //die(var_dump($config));

    return new QueryBuilder(
        Connection::make($config['database'])
    );
 ?>
