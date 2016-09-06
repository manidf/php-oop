<!DOCTYPE html>
<html>
<head>
    <title>PHP Views</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Fira+Sans:500|Source+Sans+Pro:400,600|Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
    
    </style>
</head>
<body>
    
    <div class="container">
    <div class="colourblocking"></div>
    <div class="title-container">

    <h4>
        <?= $greeting; ?>
    </h4>

    <ul>
    <?php
        foreach($names as $name) {
            echo "<li>$name</li>";
        }
    ?>
    </ul>

    <h6>Animals</h6>
    <ul>
        <?php
            foreach($animals as $animal) {
                echo "<li>$animal</li>";
            }
        ?>
    </ul>

    <p class="copy copy--droid">
        
    </p>
    </div>
    <footer> </footer>
  </div>
</body>
</html>