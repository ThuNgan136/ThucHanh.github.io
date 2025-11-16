<?php
$ten=$_GET["ten"];
$cachtim=$_GET["ct"];
$loai=$_GET["loai"];

echo "ten sp:" .$ten;
echo "<br>";
if($cachtim==1){
    echo "tim gan dung";
}else{
    echo "tim chinh xac";
}
echo "<br>";
echo "Cac loai SP duoc chon: <br>";
foreach($loai as $a){
    if($a==4){
        echo "loai 1";
        echo "loai 2";
        echo "loai 3";
        break;
    } else if($a==1){
        echo "Loai 1<br>";
    } else if($a==2){
        echo "Loai 2<br>";
    } else 
        echo "Loai 3<br>";

}
?>