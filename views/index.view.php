<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> PHP and HTML </title>
    </head>
    <style media="screen">
        header{
            padding: 2em;
            text-align: center;
            background: #e3e3e3;
        }
        li{
            list-style: none;
        }
    </style>
    <body>
        <header>
            <h1>
                <?= $greeting ?>
            </h1>
            <ul>
                <?php
                /* 1st way of doing it
                foreach ($animals as $animal) {
                    echo "<li>{$animal}</li>";
                }
                */
                 ?>

                <!-- 2nd way/ Recommended way // Output regular Array
                <?php foreach ($animals as $animal) : ?>
                    <li><?= $animal ?></li>
                <?php endforeach; ?>
            -->

                <!-- Output Associative Array
                <?php foreach ($task as $key => $val) : ?>
                    <li> <strong><?= ucwords( $key ); ?></strong> <?= $val; ?> </li>
                <?php endforeach; ?>

                <li> <strong>Name :</strong> <?= $task['title']; ?> </li>
                <li> <strong>Due Date :</strong> <?= $task['due']; ?> </li>
                <li> <strong>Responsible :</strong> <?= $task['assigned_to']; ?> </li>

            -->


                <!-- Ternary Operator to check the status
                if you've only a string to echo then it is recommended to use Ternary.
                <li> <strong>Status :</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> </li>
            -->

            <!-- Show custom icon on completed status
            <li><strong>Status : </strong>
                <?php if($task['completed']) : ?>
                    <span class="icon">&#9745;</span>
                <?php else : ?>
                    <span class="icon">Incomplete</span>
            <?php endif; ?>

            </li>
        -->

            <?php foreach ($tasks as $task) : ?>
                <?php if($task->iscomplete()) : ?>
                    <strike> <?= $task->description(); ?>  </strike>
                <?php else : ?>
                    <li><?= $task->description(); ?></li>
                <?php endif; ?>
            <?php endforeach; ?>


            </ul>
        </header>

    </body>
</html>
