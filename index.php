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
        <a class="btn btn-primary" href="newrule.php" role="button">Nueva Regla</a>
        <a class="btn btn-primary" href="deleterute.php" role="button">Reemplazar Regla</a>
        <a class="btn btn-primary" href="deleterute.php" role="button">Eliminar Regla</a>
        <a class='btn btn-primary' href='print.php'>link a pruebas de impresion</a>
        <h2>Input </h2>
        <a class="btn btn-primary" href="replacerule.php?rule=INPUT" role="button">Reemplazar Regla</a>
        <pre>
        <?php
            adminRules::getRules(1);
        ?>
        </pre>
        <h2>Output</h2>
        <a class="btn btn-primary" href="replacerule.php?rule=OUTPUT" role="button">Reemplazar Regla</a>
        <pre>
        <?php
            adminRules::getRules(2);
        ?>
        </pre>
        <h2>Forward</h2>
        <a class="btn btn-primary" href="replacerule.php?rule=FORWARD" role="button">Reemplazar Regla</a>
        <pre>
        <?php
            adminRules::getRules(3);
        ?>
        </pre>

        <?php
            $comando = $_POST["comando"];
            if(isset($comando)){
                echo "comando usado anteriormente: ".$comando;
            }

        ?>

    </div>
    
</body>
</html>