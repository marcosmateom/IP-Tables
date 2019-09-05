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
        <h1>Nueva regla</h1>
        <hr>

        
        <form action="controllers/addrule.php" method="POST">
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
            <label for="sel2">TARGET</label>
            <select name="target" class="form-control" id="sel2">
                <option value=""></option>
                <option value="ACCEPT">ACCEPT</option>
                <option value="DROP">DROP</option>
                <option value="RETURN">RETURN</option>    
            </select>
            </div>

            <div class="form-group">
            <label for="sel3">PARAMETROS</label>
            <select name="params" class="form-control" id="sel3">
                <option value=""></option>
                <option value="-i">RED DE INTERFAZ ENTRANTE -i</option>
                <option value="-p">PROTOCOLO -p</option>
                <option value="-s">FUENTE PARA PAQUETE -s</option>    
            </select>
            </div>

            <div class="form-group">
            <label for="sel3">PROTOCOLOS</label>
            <select name="protocols" class="form-control" id="sel4">
                <option value=""></option>
                <option value="tcp">TCP</option>
                <option value="udp">UDP</option>
            </select>
            </div>

            <div class="form-group">
            <label for="sel3">TIPO DE PUERTO</label>
            <select name="porttype" class="form-control" id="sel5">
                <option value=""></option>
                <option value="--dport">DPORT</option>
                <option value="--sport">SPORT</option>
            </select>
            </div>
            
            <div class="form-group">
                <label for="ipip">IP</label>
                <input type="text" name="ip" class="form-control" id="ipip" placeholder="IP">
                
            </div>

            <div class="form-group">
                <label for="port">PORT</label>
                <input type="text" name="port" class="form-control" id="ports" placeholder="PUERTO">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Agregar</button>
        
       
        </form>
        
    </div>
    
</body>
</html>