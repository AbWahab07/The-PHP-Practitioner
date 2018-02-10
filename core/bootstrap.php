<?php
    // require 'core/database/Connection.php';
    // require 'core/database/QueryBuilder.php';
    // require 'core/Router.php';
    // $app = [];
    // $app['config'] = require 'config.php';
    // //die(var_dump($config));
    //
    // $app['database'] = new QueryBuilder(
    //     Connection::make($app['config']['database'])
    // );

    App::bind('config', require 'config.php');
        //var_dump(App::get('config'));
    App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database']))
    );
 ?>
