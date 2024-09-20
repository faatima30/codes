<?php
/// car information system 
$car=array("car_name"=>"mbw","modelNO"=>"2018","plateNO"=>"AH230","steering"=>"right","price"=>2000,"doors"=>5,"engine_type"=>"automatic","color"=>"white");
echo "<table border='1' cellspacing='0'>";
echo "<tr><td>car name</td><td>".$car['car_name']."</td></tr>";
echo "<tr><td>model NO </td><td>".$car['modelNO']."</td></tr>";
echo "<tr><td>plate number</td><td>".$car['plateNO']."</td></tr>";
echo "<tr><td>steering</td><td>".$car['steering']."</td></tr>";
echo "<tr><td>price</td><td>".$car['price']."</td></tr>";
echo "<tr><td>doors</td><td>".$car['doors']."</td></tr>";
echo "<tr><td>engine type</td><td>".$car['engine_type']."</td></tr>";
echo "<tr><td>colors</td><td>".$car['color']."</td></tr>";
?>