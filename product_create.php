<style>
body{
    margin:auto 0;
}
h1{
    background:blue;
    color:white;
    font-size:25px;
    font-weight:bold;
    text-align:center;
    padding:15px;
}
form{
    margin-left:10%;
    margin-right:10%;
    border:3px solid blue;
    padding:25px;
    border-radius:10px;
}
.txt{
    width:100%;
    padding:8px;
    border:1px solid #ccc;
    border-radius:10px;
    margin:10px;
}
.btn{
    width:100%;
    padding:8px;
    border:1px solid #ccc;
    border-radius:5px;
    margin:10px;
    background:brown;
    color:white;
    text-align:center;
    font-weight:bold;
}
.link{
    text-decoration:none;
    padding: 15px;
    border:1px solid blue;
    background:blue;
    color:white;
    float:right;
    border-radius:10px;
}
.link1{
    text-decoration:none;
    padding: 10px;
    border:1px solid blue;
    background:blue;
    color:white;
    border-radius:10px;
}
</style>



<h1>product Registration system</h1>
    <form action="product_create.php" method="post">
        <a href="phpmysqlconnection.php" class="link"> view data</a>
        <div style="clear:both;"></div>
        product name <br>
        <input type="text" name="product name" class="txt"><br>
        product model <br>
        <input type="text" name="product model" class="txt"><br>
         manufacture <br>
        <input type="text" name="manufacture" class="txt"><br>
        Quantity <br>
        <input type="text" name="quantity" class="txt"><br>
        price<br>
        <input type="text" name="price" class="txt"><br>
         made in<br>
        <input type="text" name="made in" class="txt"><br>
        description <br>
        <textarea name="description" id="" cols="150" rows="10" placeholder="enter description" ></textarea> <br>
          date<br>
        <input type="date" name="date" class="txt"><br>
        <input type="submit" value="save data" name="btn_save" class="link1">
    </form>
<?php
if(isset($_POST['btn_save'])){
$product_name=$_POST['product_name'];
$product_model=$_POST['product_model'];
$manufacture=$_POST['manufacture'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$made_in=$_POST['made_in'];
$description=$_POST['description'];
$date=$_POST['date'];


//make connection to database
$con=mysqli_connect("localhost:3306","root","");
$dbname=mysqli_select_db($con,"cms5c");
$id=mysqli_insert_id($con); // automatic id generation
$query=mysqli_query($con,"INSERT INTO product VALUES('$id','$product_name','$product_model','$manufacture','$quantity','$price','$made_in','$description','$date')");
?>
<script>
    alert("your data has been inserted successfully")
    window.location="phpmysqlconnection.php"
    </script>
    <?php
}
?>