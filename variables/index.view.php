<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<ul>
    <!-- Loop though an array foreach name in the names array give me a name -->
    <?php foreach($names as $name) : ?>
        <li>
           <?= $name; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
