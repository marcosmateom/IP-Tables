<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

    $comand = $_GET['comando'];
    $reglas = shell_exec('sudo iptables -L');
    $lines = explode( "\n", $reglas );
    echo $lines[0];
    //echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
    echo '<br><br>';
    
    echo '<table>';
    $heads = explode( " ", $lines[1] );
    echo '<tr>';
    foreach ($heads as $head) {
        echo '<th>';
        echo $head;
        echo '</th>';
    }
    echo '</tr>';
    $cuenta = count($lines);
    echo $cuenta;
    echo '<tr>';
    for ($i=2; $i > $cuenta; $i++) { 
        $regla = explode( " ", $lines[i] );

        foreach ($regla as $reg ) {
            echo '<td>';
            echo $reg;
            echo '</td>';
        }
    }
    
    echo '</tr>';
    echo '</table>';
?>