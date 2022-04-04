<?php
    $names= ['Joshua', 'Nelson','Emet','Yshtola'];?>

<!DOCTYPE html>
<html lang = "en-ca">
    <head> 
        <meta chartset="utf-8">
        <meta name="viewport" content="width=device-,width, initial-scale=1">
        <title> Welcome to My programs</title>
        <style>
            .some-names{
                background-color: sienna;
                color:white;
            }
            
            .more-names{
                background-color:grey;
            }
            
            
            </style>
    </head>
    <link rel="stylesheet" href="styles.css">
    <link re2="stylesheet" href="styles.css">
    <link re3="stylesheet" href="styles.css">
    <body> 
        <header></header>
        <div class="container">
            <div class="menu">
                <ul class="nav">
                    <li class="logo"><img src="slider-logo-img-tiny.png"></li>
                    <li class="button"><a href="index.html">Home</a></li>
                    <li class="button"><a href="CV.html">CV</a></li>
                    <li class="button"><a href="Programs.html">Programs JavaScript</a></li>
                    <li class="button"><a href="algo.php">Programs Php</a></li>
                </ul>
            </div> 
        </div>
        <h1> My Programs</h1>
        <h2> The time of the day is </h2>    
        <?php echo date('h:i:s A'); ?>
     
        <body class="">
            <h1>Names of beloved ones</h1>
            <ul class="<?= count($names) > 3 ? 'more-names': 'some-names' ?>">
                <?php foreach($names as $name) { ?>
                <li><?= $name ?></li>
                <?php } ?> 
            </ul>
        </body>
        
        <body class="random">
        <h3> This would generate a random number</h3>   
        <?php echo(rand());?>




        </body>

        
        
    </body>
</html>