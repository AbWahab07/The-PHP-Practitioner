<?php require 'partials/header.php'; ?>
            <ul>
                <?php foreach($tasks as $task) : ?>
                    <?php if($task->completed) : ?>
                        <strike><li> <?= $task->desc ;?> </li></strike>
                    <?php else : ?>
                        <li> <?= $task->desc; ?></li>
                    <?php endif; ?>
            <?php endforeach; ?>
            </ul>
<?php require 'partials/footer.php'; ?>
