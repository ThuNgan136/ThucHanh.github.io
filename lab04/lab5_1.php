<?php
    function showArraytable($arr){
       echo "<table border=1>" ;
       echo "<tr><td>Key</td><td>Value</td></tr>";
       $i=0;
       foreach($arr as $k=>$v){
        $i++;
        echo "<td>$k</td>";
        echo "<td>$v</td></tr>";
       }
       echo "</table>";
    }
    $a = array(6, 2, 7, 8, 5);
    showArraytable($a);
?>