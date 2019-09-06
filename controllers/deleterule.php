<?php
    $chain = $_POST["chain"];
    $linenum = $_POST["linenum"];
    
    echo $chain."</br>";
    echo $linenum."</br>";
    
    $command = 'sudo iptables -D '.$chain." ".$linenum;
    echo $command;
    //$command = $command." -v -n";
    $output = shell_exec($command);
    echo $output;

?>
<br>
<a href='/'>Home</a>