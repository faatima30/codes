<style>
body{
    background:#648470;
    margin:auto 0;
}   
h1{
    padding:10px;
    text-align:center;
    background:#313241;
    color:white;
}
table{
    border: 1px solid #000;
    color:white;
    background:#406030;
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
$invoice_no="0001";
$product_name="Samsung A21s";
$Quantity=10;
$price="$125 USD";
$prc=125;
$ttl=$Quantity*$prc;
$total="$ $ttl USD ";
$cashpayment=1000;
$cash_payment="$ 1000 USD";
$blnc=$ttl-$cashpayment;
$balance="$ $blnc USD";
$customer_name="faatima abdirahmaan ali";
$phone="252612658415";
echo "<h1>Sales Record On 26/9/2022</h1>";
echo "<hr>";
echo"<table>";
echo "<tr><td>Invoice No </td><td>$invoice_no</td></tr>";
echo "<tr><td>Product name </td><td>$product_name</td></tr>";
echo "<tr><td> Quantity </td><td>$Quantity</td></tr>";
echo "<tr><td>Price</td><td>$price</td></tr>";
echo "<tr><td> Total </td><td>$total</td></tr>";
echo "<tr><td> Cash payment </td><td>$cash_payment</td></tr>";
echo "<tr><td> Balance </td><td>$balance</td></tr>";
echo "<tr><td> Customer name</td><td>$customer_name</td></tr>";
echo "<tr><td> Phone </td><td>$phone</td></tr>";
echo"</table>";
?>
