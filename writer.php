<?php
$filename=fopen("data.txt","w");
for($n=1;$n<=20;$n++){
    $x=$n*$n;
    $y=$n*$n*$n;
    fwrite($filename,"$n =$x= $y\n");
}
fclose($filename);
?>