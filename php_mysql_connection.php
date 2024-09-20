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
$dbname=mysqli_select_db($con,"cmsfivec");
?>
<a href="create.php" class="link">Go Back</a>
<?php
echo "<table>";
echo "<tr style='background:maroon; color:white'>";
echo "<td> id</td>";
echo "<td> name</td>";
echo "<td> subject</td>";
echo "<td> Assignment one </td>";
echo "<td> midterm</td>";
echo "<td> final</td>";
echo "<td> total</td>";
echo "<td> semister id</td>";
echo "<td> Academic year</td>";
echo "<td> action</td>";
echo "</tr>";
$sql=mysqli_query($con,"select * from exam");
while ($data=mysqli_fetch_assoc($sql)){

    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td> ".$data['name']."</td>";
    echo "<td>".$data['subject']."</td>";
    echo "<td>".$data['assignment1']." </td>";
    echo "<td> ".$data['midterm']."</td>";
    echo "<td> ".$data['final']."</td>";
    echo "<td> ".$data['total']."</td>";
    echo "<td> ".$data['semid']."</td>";
    echo "<td> ".$data['academic_year']."</td>";
    ?>
    <td> <a href="update.php?id=<?php echo $data['id'];?>"class="link">Update</a>
         <a href="delete.php?id=<?php echo $data['id'];?>"class="red">Delete</a></td>
    <?php
    echo "</tr>";
}
?>