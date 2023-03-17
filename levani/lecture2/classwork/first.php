<?php 
$arr = [];
$less = 0;
$more = 0;
for($i = 0;$i<12;$i++){
    $arr[$i] = rand(10, 100);
}
echo "<pre>";
print_r($arr);
$x = $_POST["num"];
for ($i=0; $i < 12; $i++) { 
    if ($x > $arr[$i]) {
        $more++;
    }
    else{
        $less++;
    }
}
echo "$less ricxvi metia $x-ze";
echo "<br>";
echo "$more ricxvi naklebia $x-ze";
