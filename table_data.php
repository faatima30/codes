<style>
body{
    background:green;
    margin:auto 0;
}
h1{
    background:brown;
    color:white;
    padding:10px;
    text-align:center;
}
table{
    border: 1px solid #000;
    color:white;
    background:#666;
    border-collapse:collapse;
}
td{
    border: 1px solid #000;
    padding:10px;
}

</style>
<?php
$firstname="Faatima";
$midddlename="Abdirahmaan";
$lastname="Ali";
$country="Somalia";
$code="+252";
$phone="612658415";
 
echo "<h1>personal record</h1>";
echo"<table>";
echo "<tr><td>first name </td><td>$firstname</td></tr>";
echo "<tr><td>middle name </td><td>$midddlename</td></tr>";
echo "<tr><td>last name </td><td>$lastname</td></tr>";
echo "<tr><td>country name </td><td>$country</td></tr>";
echo "<tr><td>country code </td><td>$code</td></tr>";
echo "<tr><td>phone </td><td>$phone</td></tr>";
echo"</table>";
?>
<input type="submit" value="print report" onclick="window.print()">
