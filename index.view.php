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
                    <li> <strong><?= $key ?></strong> <?= $val ?> </li>
                <?php endforeach; ?>

            </ul>
        </header>

    </body>
</html>
