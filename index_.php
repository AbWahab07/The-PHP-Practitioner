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

   /*
   var_dump($animals);
   unset($animals['Mao']);
   var_dump($animals);
   $animals[] = 'Abd';// Adding item to an Array
   var_dump($animals);// prins/ echo the Array
   */


   /*Step 7: Associative Arrays or AA
   Add an item to AA e.g $person[key]
   Remove an item unset($person[key])
   echo is used to oputput a string.
   if you want to output something other than string use var_dump(val)
   die is used to terminate/break/stop the execution so you can debug or can check what value a particular vairable have.

    $task = [
        'title' => 'Go to Shop',
        'due' => 'Today',
        'assigned_to' => 'Abdul',
    ];

    $task['completed'] = false;
    */
    //unset($task);  //Displays an error as we've deleted the entire array.
    //unset($task['due']);

     //echo $task; doesn't work as we're trying to convert an Array to string.

     //echo '<pre>'; formats the output into a bit readable format
     //var_dump($task); // echo AA.
     //echo '</pre>';

     //die();// terminates the program execution
     //die(var_dump($task)); // Often used in conjunction

     /*Step 8: Booleans
     Ternary Operator:  conditional ? if true : if false
     */

     /*Step 9: Conditionals
     */

     /*Step 10 : Functions
     Recommended to use functions.php file to seoarte functions and have them all in one place.

     require 'functions.php';

     if (verify_age(23)) {
         echo "You're allowed";
     }
     else {
         echo "You're not allowed";
     }

     dd($task);
     */

     /*Step 11: MySQL
     Workbench SQL : A GUI for mySQL.
     learned some CLI commands to create and use databases. Hint: HELP.txt
     */

     /*Step 12: Classes
     class NAME {                               //Define a class
        visibility NAME; e.g public decription; // define a property

        public function __construct() {}         //Constructor
        public function NAME() {}                //Any no. of functions can be defined.
    }
     */

     /**
      *
      */
     class Task
     {
         protected $description;
         protected $completed;

         function __construct($desc)
         {
             $this->description = $desc;
             $this->completed = false;
         }

         public function isComplete()
         {
             if ($this->completed) {
                 # code...
                 return true;
             }
             else {
                 return false;;
             }
         }

         public function description()
         {
             # code...
             return $this->description;
         }

         public function complete()
         {
             # code...
             $this->completed = true;
         }
     }

     $tasks = [
         new Task('Go to store'),
         new Task('Bring food'),
         new Task('Call me')
     ];
     $tasks[0]->complete();

     require 'functions.php';
     //dd($task);

     require 'index.view.php';

 ?>
