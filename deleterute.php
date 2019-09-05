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

        
        <form action="controllers/deleterule.php" method="POST">
            <div class="form-group">
            <label for="sel1">CADENA</label>
            <select name="chain" class="form-control" id="sel1">
                <option value="INPUT">INPUT</option>
                <option value="OUTPUT">OUTPUT</option>
                <option value="FORWARD">FORWARD</option>    
            </select>
            </div>

            <div class="form-group">
            <label for="sel2">TARGET</label>
            <select name="target" class="form-control" id="sel2">
                <option value="ACCEPT">ACCEPT</option>
                <option value="DROP">DROP</option>
                <option value="RETURN">RETURN</option>    
            </select>
            </div>

            <div class="form-group">
            <label for="sel3">PARAMETROS</label>
            <select name="params" class="form-control" id="sel3">
                <option value="-i">RED DE INTERFAZ ENTRANTE</option>
                <option value="-p">PROTOCOLO</option>
                <option value="-s">FUENTE PARA PAQUETE</option>    
            </select>
            </div>
            
            <div class="form-group">
                <label for="ipip">IP</label>
                <input type="text" name="ip" class="form-control" id="ipip" placeholder="IP">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Eliminar</button>
        
       
        </form>
        
    </div>
    
</body>
</html>