<?php
    $arr=array();
    $r=array("id"=>"sp1","name"=>"San pham 1");
    $arr[]=$r;
    $r=array("id"=>"sp2","name"=>"San pham 2");
    $arr[]=$r;
    $r=array("id"=>"sp3","name"=>"San pham 3");
    $arr[]=$r;
    print_r($arr);
    showArray($arr);
    function showArray($a){
        echo "<table border=1>";
        echo "<tr><td>Stt</td><td>Ma san pham</td><td>Ten san pham</td></tr>";
        $i=0;
        foreach($a as $k=>$v){
            $i++;
            echo "<tr><td>$i</td>";
            foreach($v as $kv=>$vv){
                echo "<td>$vv</td>";
            }
        }
        echo "</table>";
    }
?>