<?php
declare(strict_types=1);

final class adminRules
{    
    /*
     * Get all the rules
     * @param int tipo: 0 = all, 1 = input, 2 = output, 3 = forward
     */

    public static function getRules(int $tipo){
    
        $command = "sudo iptables -L";
        switch ($tipo) {
            case 1:
                $command = $command."INPUT";
                break;
            case 2:
                $command = $command."OUTPUT";
                break;
            case 3:
                $command = $command."FORWARD";
                break;
            
            default:
                $command = $command;
                break;
        }
        $command = $command." -v -n";
        $output = shell_exec($command);
        echo $output;
    }

    
}

?>