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
        <button type='button' href='#' class='btn btn-primary'>Nueva regla</button>
        <a type='button' class='btn btn-primary' href='print.php'>link a pruebas de impresion</a>
        <h2>Input </h2>
        <pre>
        <?php
            adminRules::getRules(1);
        ?>
        </pre>
    </div>
    
</body>
</html>