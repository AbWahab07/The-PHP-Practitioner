<?php
// Step 13: Intro to PDO
// Establish database connection. Always use PDO(PHP Data Object) an interface to coonect to a database.
// mysql_connect is deprecated and don't use it. Allow for SQL injection.
// Pass connection string as an argument to PDO object.
// Check connection validation. e.g try catch block.
// Prepare an SQL query (Statement)
// Execute an SQL query (Statement)
// We can fetch all resluts in a PDO::FETCH_OBJ or PDO::FETCH_CLASS
// Benfit of fecting in a class (PDO::FETCH_CLASS) is, you can always call the methods defined in the class on any of the returned result item.
// Use the same names for the class properties as the name of the columns in a table. e.g DESC property in class for DESC column name in Table.

    //die(var_dump($_SERVER));

    require 'vendor/autoload.php';
    require 'core/bootstrap.php';

    //die(var_dump($_SERVER));
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    //die(var_dump($uri));

    $router = new Router();
    require 'routes.php';

    require $router->direct($uri);

?>
