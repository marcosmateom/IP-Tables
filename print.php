<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

echo '<h3>Chain OUTPUT</h3>';
    $comand = $_GET['comando'];
    $var2 = shell_exec('sudo iptables -L');
    $lines = explode( "\n", $var2 );
    foreach ($lines as $line) {
        $num = substr_count($line, ' ');
            if ($num <5) {
                echo $line;
                echo '<br>';
            }
            if ($num >= 5) {
                $line = trim($line);
                $rules = explode( " ", $line );
                echo '<tr>';
                foreach ($rules as $rule) {
                    echo '<tb>';
                    echo $rule;
                    echo '</tb>';
                }
                echo '</tr>';
            }
        

    }
    //echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
	echo '<br><br>';
?>