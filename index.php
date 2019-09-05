<?php
  include "controllers/rules.php";          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Menu principal</h1>
        <hr>
        <a class="btn btn-primary" href="newrule.php" role="button">Nueva REgla</a>
        
        <button type='button' class='btn btn-primary' href='print.php'>link a pruebas de impresion</button>
        <h2>Input</h2>
        <pre>
        <?php
            adminRules::getRules(1);
        ?>
        </pre>
        <h2>Output</h2>
        <pre>
        <?php
            adminRules::getRules(2);
        ?>
        </pre>
        <h2>Forward</h2>
        <pre>
        <?php
            adminRules::getRules(3);
        ?>
        </pre>
    </div>
    
</body>
</html>