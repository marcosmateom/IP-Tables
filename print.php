<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

echo '<h3>Chain OUTPUT</h3>';
	$var2 = shell_exec('sudo iptables -nL OUTPUT');
	echo "<pre>$var2</pre>";
	echo '<br><br>';

$comand = $_GET['comando'];

//$output = shell_exec("sudo iptables -L");
$output = shell_exec($comand);
//$output = suexec($comand);
echo "<p>$output</p>";
echo "<pre>$output</pre>";
?>