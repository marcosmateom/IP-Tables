<?php
    $chain = $_POST["chain"];
    $target = $_POST["target"];
    $ip = $_POST["ip"];
    $params = $_POST["params"];
    
    echo $chain."</br>";
    echo $target."</br>";
    echo $ip."</br>";
    echo $params."</br>";
    
    $command = 'sudo iptables -D '.$chain." ".$params." ".$ip." -j ".$target;
    echo $command;
    //$command = $command." -v -n";
    $output = shell_exec($command);
    echo $output;

?>
<br>
<a href='/'>Home</a>