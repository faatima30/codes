<?php 
// ------password encryption



// $password=123;
// echo "original password is ".$password."<br>";
// $password=md5($password);
// echo "after encryption the password is : ".$password."<br>";

// --------stop program excution and tell error

$con = mysqli_connect("localhost:3306","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
$dbname=mysqli_select_db($con,"cmsfivec") or die(mysqli_error($con));
$query=mysqli_query($con,"select * from exam")  or die(mysqli_error($con));
// $data=mysqli_fetch_array($query); 
// $data=mysqli_fetch_assoc($query);
while($data=mysqli_fetch_row($query)) // we use while because it is godd for unknown iteration.
{ 
echo $data[0];
echo $data[2];
echo $data[3];
echo $data[4];
echo $data[5];
echo $data[6];
echo $data[7];
echo "<br>";
}