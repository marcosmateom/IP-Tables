<?php

$chain = $_POST["chain"];
$target = $_POST["target"];
$ip = $_POST["ip"];
$params = $_POST["params"];
$porttype = $_POST["porttype"];
$ports = $_POST["port"];
$protocol = $_POST["protocols"];


echo $chain."</br>";
echo $target."</br>";
echo $ip."</br>";
echo $params."</br>";

$command = 'sudo iptables -A '.$chain." ".$params." ".$protocol." ".$porttype." ".$ports." ".$ip." -j ".$target;
echo $command;
//$command = $command." -v -n";
        $output = shell_exec($command);
        echo $output;

?>