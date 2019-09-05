<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

    $comand = $_GET['comando'];
    $var2 = shell_exec('sudo iptables -L');
    $lines = explode( "\n", $var2 );
    echo $lines[0];
    //echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
    echo '<br><br>';
    
    echo '<table>';
    $heads = explode( " ", $lines[1] );
    foreach ($heads as $head) {
        echo '<tr>';
        echo $head;
        echo '</tr>';
    }
    echo '</table>';
?>