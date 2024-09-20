<style>
    body{
        margin:auto 0;
    }
    h1{
        padding:6px;
        color:white;
        background:brown;
        text-align:center;
    }
    .txt{
        width:100%;
        padding:6px;
        border:1px solid #000;
    }
    .submit{
        background:green;
        border:1px sold green;
        border-radius:7px;
        text-align:center;
        color:white;
        font-weight:bold;
        font-size:20px;
    }
    form{
        margin-left:20%;
        margin-right:20%;
        margin-top:20%;
        padding:20px;
    }
    </style>
    <h1> Age convertor Application in php</h1>
    <form action="input_form.php" method="post">
        how old are you? <input type="text" name="age" class="txt" placeholder="Enter your age"><br><br>
        <input type="submit" value="submit" name="btn" class="submit">
</form>
<?php
if(isset($_POST["btn"])){
    $age=$_POST['age'];
    echo "<center>";
    echo ($age*12). " months<br>";
    echo ($age*365)." Days<br>";
    echo ($age*365*24)."Hours<br>";
    
    echo "</center>";
}
?>