<!DOCTYPE html>
<html>
<head>
    <title>PHP Classes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Fira+Sans:500|Source+Sans+Pro:400,600|Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <ul>

        <?php foreach ($tasks as $task) : ?>
            <li>

                <?php if ($task->completed) : ?>
                    <strike>
                <?php endif; ?>

                    <?= $task->description; ?>

                <?php if ($task->completed) : ?>
                    </strike>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>

    </ul>
</div>

</body>
</html>
