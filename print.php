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
        $spaces = substr_count($line, ' ');
        if ($spaces < 5) {
            echo $line;
            echo '<br>';
        } elseif ($spaces >= 5) {
            $rules = explode( " ", $line );
            echo '<tr>';
            foreach ($rules as $rule) {
                echo '<td>';
                echo '$rule';
                echo '</td>';
            }
        }
    }
    echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
	echo '<br><br>';
?>