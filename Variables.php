<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables</title>
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
    <!--
    place this in browser url
    http://localhost:8888/Variables.php/?name=%3Ca%20href=%22www.google.com%22%20target=%22_blank%22%3EGoogle%3C/a%3E
    -->
    <h1 class="title title--firaSans ghostWhite">
        <?php
            $name = $_GET['name'];
            $sentance = $_GET['sentance'];
            echo "Hello, $name . $sentance";
        ?>
    </h1>

    <h2>
        <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
    </h2>

    <p class="copy copy--droid">
        
    </p>
    </div>
    <footer> </footer>
  </div>
</body>
</html>