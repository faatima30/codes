<style>
body{
    background:brown;
}
table{
    background:#555;
    border-collapse:collapse;
    width:80%;
    margin-left:5%;
}
td{
    border: 1px solid yellow;
    padding:6px;
    color:white;
    font-weight:bold;
}
</style>
<form action="multiplication_table.php" method="post">
    enter number of rows<input type="text" name="row"><br>
    enter number of columns<input type="text" name="column"><br>
    <input type="submit" value="submit" name="btn"><br>
</form>
<?php
$row=@$_POST['row'];
$column=@$_POST['column'];
echo "<table>";
for($i=1;$i<=$row;$i++)
{
    echo "<tr>";
    for($j=1;$j<=$column;$j++)
    {
        if(($i*$j)%2==0)
        {
            echo "<td style='background:red;'>".$i*$j."</td>";
        }
        else
        {
            echo "<td>".$i*$j."</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>