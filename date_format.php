<?php
$d=date("D: d/M/Y  "); // current year in 4 digit
echo $d;
$date=date("D");
if($date=="Sat")
{
    echo "have a nice saturday";
}
else if($date=="Sun")
{
    echo "have a nice sunday";
}
else if($date=="Mon")
{
    echo "have a nice monday";
}
else if($date=="Tue")
{
    echo "have a nice tuesday";
}
else if($date=="Wed")
{
    echo "have a nice wednesday";
}
else if($date=="Thur")
{
    echo "have a nice thursday";
}
else if($date=="Fri")
{
    echo "have a nice friday";
}
else
{
    echo "have a nice unknown day";
}
?>