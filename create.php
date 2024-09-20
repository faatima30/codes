<style>
body{
    margin:auto 0;
}
h1{
    background:green;
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
</style>



<h1>mark processing system in pp and mysql</h1>
    <form action="create.php" method="post">
        <a href="php_mysql_connection.php" class="link"> view data</a>
        <div style="clear:both;"></div>
        student name <br>
        <input type="text" name="student_name" class="txt"><br>
        subject name <br>
        <input type="text" name="subject_name" class="txt"><br>
        acivity one <br>
        <input type="text" name="activity_one" class="txt"><br>
        midterm <br>
        <input type="text" name="midterm" class="txt"><br>
        final<br>
        <input type="text" name="final" class="txt"><br>
        semister id<br>
        <input type="text" name="semid" class="txt"><br>
        academic year <br>
        <select name="academic_year" class="txt">
            <option >2022-2023</option>
            <option >2021-2022</option>
            <option >2020-2021</option>
            <option >2019-2020</option>
</select>
        <input type="submit" value="save data" name="btn_save">
    </form>
<?php
if(isset($_POST['btn_save'])){
$student_name=$_POST['student_name'];
$subject_name=$_POST['subject_name'];
$activity_one=$_POST['activity_one'];
$midterm=$_POST['midterm'];
$final=$_POST['final'];
$semister_id=$_POST['semid'];
$academic_year=$_POST['academic_year'];


//make connection to database
$con=mysqli_connect("localhost:3306","root","");
$dbname=mysqli_select_db($con,"cmsfivec");
$id=mysqli_insert_id($con); // automatic id generation
$total=$activity_one+$midterm+$final;
$query=mysqli_query($con,"INSERT INTO exam VALUES('$id','$student_name','$subject_name','$activity_one','$midterm','$final','$total','$semister_id','$academic_year')");
?>
<script>
    alert("your data has been inserted successfully")
    window.location="php_mysql_connection.php"
    </script>
    <?php
}
?>