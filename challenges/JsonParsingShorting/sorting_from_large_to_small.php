<?php
            $a ='{"mazhar":100,"fuat":15,"ozkan":-10}';
            $b = json_decode($a);
            $inta = $b->{'mazhar'};
            $intb = $b->{'fuat'};
            $intc = $b->{'ozkan'};
            $numbers = array($inta,$intb,$intc);
            rsort($numbers);
            $array = count($numbers);
            for($x = 0; $x < $array; $x++) {
            echo $numbers[$x];
            echo " ";
            }
    ?>