<style>
    body{
        margin:auto 0;
    }
    table{
        border-collapse:collapse;
        width:100%;
    }
    td{
        border:1px solid #ccc;
        padding:7px;
    }
    .tr{
        background:green;
        color:white;
        font-weight:bold;
    }
    tr:nth-child(even){
        background:#ccc;
        color:black;
    }
    .link{
    text-decoration:none;
    padding: 8px;
    border:1px solid blue;
    background:blue;
    border-radius:10px;
    color:white;
    float:right;
}
.red{
    text-decoration:none;
    padding: 8px;
    border:1px solid red;
    background:red;
    border-radius:10px;
    color:white;
    float:right;
}
<
</style>
<?php
$servername="localhost:3306";
$username="root";
$password="";
$con=mysqli_connect($servername,$username,$password);
$dbname=mysqli_select_db($con,"cms5c");
?>
<a href="product_create.php" class="link">Go Back</a>
<?php
echo "<table>";
echo "<tr style='background:maroon; color:white'>";
echo "<td> id</td>";
echo "<td> Product name</td>";
echo "<td> Product model </td>";
echo "<td> Manufacture</td>";
echo "<td> Quantity</td>";
echo "<td> Price</td>";
echo "<td> made in</td>";
echo "<td> description</td>";
echo "<td>  Date</td>";
echo "</tr>";
$sql=mysqli_query($con,"select * from product");
while ($data=mysqli_fetch_assoc($sql)){

    echo "<tr>";
    echo "<td>".$data['Id']."</td>";
    echo "<td> ".$data['Product name']."</td>";
    echo "<td>".$data['Product Model']."</td>";
    echo "<td>".$data['Manufacture']." </td>";
    echo "<td> ".$data['Quantity']."</td>";
    echo "<td> ".$data['Price']."</td>";
    echo "<td> ".$data['Made in']."</td>";
    echo "<td> ".$data['Description']."</td>";
    echo "<td> ".$data['Date']."</td>";
}
?>