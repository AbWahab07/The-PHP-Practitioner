<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PDO Concepts</title>
    </head>
    <body>
        <div class="container">
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul>
                <?php foreach($tasks as $task) : ?>
                    <?php if($task->completed) : ?>
                        <strike><li> <?= $task->desc ;?> </li></strike>
                    <?php else : ?>
                        <li> <?= $task->desc; ?></li>
                    <?php endif; ?>
            <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>
