<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
</head>
<body>

<h1>Task for the day</h1>
<ul>
    <li>
        <strong>Name:</strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Due:</strong> <?= $task['due']; ?>
    </li>
    <li>
        <strong>Person Responsible:</strong> <?= $task['assigned_to']; ?>
    </li>
    <li>
        <strong>Status:</strong> <?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
    </li>
</ul>

<ul>
    <!-- Loop though an array foreach name in the names array give me a name -->
    <?php foreach ($task as $heading => $value) : ?>
        <li>
            <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
