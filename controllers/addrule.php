<?php

$chain = $_POST["chain"];
$target = $_POST["target"];
$ip = $_POST["ip"];
$params = $_POST["params"];
$porttype = $_POST["porttype"];
$ports = $_POST["port"];
$protocol = $_POST["protocols"];
$params2 = $_POST["params2"];


echo $chain."</br>";
echo $target."</br>";
echo $ip."</br>";
echo $params."</br>";

$command = 'sudo iptables -A '.$chain." ".$params." ".$protocol." ".$params2." ".$porttype." ".$ports." ".$ip." -j ".$target;
echo $command;
//$command = $command." -v -n";
        $output = shell_exec($command);
        echo $output;

/*
        header("Location: http://ec2-52-53-235-198.us-west-1.compute.amazonaws.com/");
        die();*/
?>