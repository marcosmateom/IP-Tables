<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

    $comand = $_GET['comando'];
    //$reglas = shell_exec('sudo iptables -L');
    $reglas = shell_exec($comand);
    echo $reglas;
    /*$lines = explode( "\n", $reglas );
    echo $lines[0];
    //echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
    echo '<br><br>';
    
    echo '<table style="width:100%">';
    $heads = explode( " ", $lines[1] );
    echo '<tr>';
    foreach ($heads as $head) {
        echo '<th>';
        echo $head;
        echo '</th>';
    }
    echo '</tr>';
    $cuenta = count($lines);
    //echo $cuenta
    //echo $lines[6];
    for ($i=2; $i < $cuenta ; $i++) {
        $linn =  trim($lines[$i]);

        $rule = explode( " ", $linn );
        echo '<tr>';
        foreach ($rule as $rul) {
            echo '<td>';
            echo $rul;
            echo '</td>'; 
        }
        echo '</tr>';
        //echo $i;
        //echo $lines[$i];
        //echo '<br>';
    }    
    echo '</table>';*/
?>