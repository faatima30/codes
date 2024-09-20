<?php
$filename=fopen("welcome.txt","r");
while(!feof($filename)){
    echo fgets($filename);
}
fclose($filename);
