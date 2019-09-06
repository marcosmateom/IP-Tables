<?php

$number = $_NUMBER["number"];
$chain = $_POST["rulechain"];
$target = $_POST["target"];
$ip = $_POST["ip"];
$params = $_POST["params"];
$porttype = $_POST["porttype"];
$ports = $_POST["port"];
$protocol = $_POST["protocols"];
$params2 = $_POST["params2"];


$command = 'sudo iptables -R '.$chain." ".$number." ".$params." ".$protocol." ".$params2." ".$porttype." ".$ports." ".$ip." -j ".$target;
echo $command;
//$command = $command." -v -n";
        $output = shell_exec($command);
        echo $output;

        echo $command;
        echo '<br><a class="btn btn-primary" href="http://ec2-52-53-235-198.us-west-1.compute.amazonaws.com/" role="button">Home</a>';

/*
        header("Location: http://ec2-52-53-235-198.us-west-1.compute.amazonaws.com?comando=".$command);
        die();*/
?>
