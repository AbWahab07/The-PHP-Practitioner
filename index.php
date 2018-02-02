<?php
    //echo "Hello World";

    /* Step 3 : Variable is defined by appending $ at the start.
    $greeting = 'Hello';
    $name = 'Abdul';
    echo "{$greeting}, {$name}";
    */

    /* Step 4: PHP and HTML
    Super Global e.g $_GET['key']
    Sanitization for Web Security e.g use htmlspecialchars on the input from the user.
    Always expect userinput to be malicious unless it proves to be innocent.
   */

   /*Step 5: HTML and PHP separation
   Separate PHP code logic by using require in the php file to show the view/HTML file. e.g require 'index.view.php'
   and use the shorthand <?= ?> to echo code in the view/HTML file
   */

   $greeting = 'Hello ' . htmlspecialchars($_GET['name']);

   /*Step 6: Ararys
   Collection of related thing
   */

   $animals = [
       'Mao',
       'Guo',
       'Cat',
       'Dog',
       'Che'
   ];

   var_dump($animals);
   unset($animals['Mao']);
   var_dump($animals);
   $animals[] = 'Abd';
   var_dump($animals);
   /*Step 7: Associative Arrays or AA
   Add an item to AA e.g $person[key]
   Remove an item unset($person[key])
   echo is used to oputput a string.
   if you want to output something other than string use var_dump(val)
   die is used to terminate/break/stop the execution so you can debug or can check what value a particular vairable have.
   */


    $task = [
        'title' => 'Go to Shop',
        'due' => 'Today',
        'assigned_to' => 'Abdul',
    ];

    $task['completed'] = true;
    //unset($task); Displays an error as we've deleted the entire array.
    unset($task['due']);

     //echo $task; doesn't work as we're trying to convert an Array to string.

     //echo '<pre>'; formats the output into a bit readable format
     //var_dump($task); // echo AA.
     //echo '</pre>';

     //die();// terminates the program execution
     //die(var_dump($task)); // Often used in conjunction


   require 'index.view.php';

 ?>
