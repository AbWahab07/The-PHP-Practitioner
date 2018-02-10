<?php
    $tasks = App::get('database')->all('todos');

    require 'views/pdo.view.php';
 ?>
