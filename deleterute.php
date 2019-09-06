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
        <h1>Eliminar regla</h1>
        <hr>
        <h2>Todas las reglas </h2>
        <pre>
        <?php
            adminRules::getRules(0);
        ?>
        </pre>
        <hr>
        
        <form action="controllers/deleterule.php" method="POST">
            <div class="form-group">
            <label for="sel1">CADENA</label>
            <select name="chain" class="form-control" id="sel1">
                <option value=""></option>
                <option value="INPUT">INPUT</option>
                <option value="OUTPUT">OUTPUT</option>
                <option value="FORWARD">FORWARD</option>    
            </select>
            </div>
    
            <div class="form-group">
                <label for="port">Numero de regla</label>
                <input type="int" name="linenum" class="form-control" id="linenum" placeholder="Numero de linea">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Eliminar</button>
        
       
        </form>
        
    </div>
    
</body>
</html>