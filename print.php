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
        if ($line < 5) {
            echo $line;
        }
        if ($line >= 5) {
            $rules = explode( "\s", $line );
            foreach ($rules as $rule) {
                echo $rule;
                echo '<br>';
            }
        }


    }
    echo '<p>'. $var2.'</p>';
	//echo "<pre>$var2</pre>";
	echo '<br><br>';
?>