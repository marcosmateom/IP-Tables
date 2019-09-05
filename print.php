<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php
$comand = $_GET['comando'];
//$output = shell_exec("sudo iptables -L");
$output = shell_exec('echo "" | sudo -S echo "foo" 2> /dev/null');
//$output = suexec($comand);
echo $output;
?>