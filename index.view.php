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

                <?php foreach ($animals as $animal) : ?>
                    <li><?= $animal ?></li>
                <?php endforeach; ?>

                <?php foreach ($task as $key => $val) : ?>
                    <li> <strong><?= ucwords( $key ); ?></strong> <?= $val; ?> </li>
                <?php endforeach; ?>

                <li> <strong>Name :</strong> <?= $task['title']; ?> </li>
                <li> <strong>Due Date :</strong> <?= $task['due']; ?> </li>
                <li> <strong>Responsible :</strong> <?= $task['assigned_to']; ?> </li>
                <!-- Ternary Operator to check the status
                if you've only a string to echo then it is recommended to use Ternary.
                <li> <strong>Status :</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> </li>
            -->

            <li><strong>Status : </strong>
                <?php if($task['completed']) : ?>
                    <span class="icon">&#9745;</span>
                <?php else : ?>
                    <span class="icon">Incomplete</span>
            <?php endif; ?>

            </li>



            </ul>
        </header>

    </body>
</html>
