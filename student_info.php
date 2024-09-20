<style>
body{
    background:#123456;
    margin:auto 0;
}   
h1{
    padding:10px;
    text-align:center;
    background:#130844;
    color:white;
}
table{
    border: 1px solid #000;
    color:white;
    background:#131281;
    border-collapse:collapse;
    margin:auto;
}
td{
    border: 1px solid #000;
    padding:10px;
}
hr{
    width:100%;
    height:3px;
    background: white;
    margin-top:-25px;
    border-top:dotted 2px;
    
}
</style>
<?php
/// student information system 
$student=array("student_ID"=>"130844","student_name"=>"faatima","Faculty_name"=>"engineering & computer",
"php"=>100,"ms"=>95,"net"=>90,"EC"=>97,"SE"=>100,"COA"=>90,"linux"=>98);
$total=$student['php']+$student['ms']+$student['net']+$student['EC']+$student['SE']+$student['COA']+$student['linux'];
$average=$total/7;
echo "<h1>student information </h1>";
echo "<hr>";
echo "<table border='1' cellspacing='0'>";
echo "<tr><td>ID NO: </td><td>".$student['student_ID']."</td></tr>";
echo "<tr><td>student name: </td><td>".$student['student_name']."</td></tr>";
echo "<tr><td>marks of php: </td><td>".$student['php']."</td></tr>";
echo "<tr><td>marks of management information system: </td><td>".$student['ms']."</td></tr>";
echo "<tr><td>marks of advanced network: </td><td>".$student['net']."</td></tr>";
echo "<tr><td>marks of E-Commerce: </td><td>".$student['EC']."</td></tr>";
echo "<tr><td>marks of Software Engineering: </td><td>".$student['SE']."</td></tr>";
echo "<tr><td>marks of Computer Organization And architector: </td><td>".$student['COA']."</td></tr>";
echo "<tr><td>marks of linux: </td><td>".$student['linux']."</td></tr>";
echo "<tr><td>total marks:  </td><td>".$total."</td></tr>";
echo "<tr><td>average: </td><td>".$average."</td></tr>";
?>