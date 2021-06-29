<?php
include 'connect.php';
if(isset ($_POST["add"]))
{
$amt = $_POST['amt'];
$acno = $_POST['acno'];
$q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
$row=mysqli_fetch_array($q);
if($row>0)
{
$bal = $row['bal'];
$tot=$amt+$bal;
$sql = mysqli_query($con,"UPDATE cust set bal='$tot' WHERE acno='$acno'");
if($sql)
{
    echo '<script>alert("Amount Deposited Successfully");window.location="ques5h.php"</script>';
}
else
{
    echo '<script>alert("Failed");</script>'; 
}
}
else
{
     echo '<script>alert("Account Number not found");window.location="ques5a.php"</script>';  
}
}
?>