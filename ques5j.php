<?php
include 'connect.php';
if(isset ($_POST["del"]))
{
  $amt = $_POST['amt'];
  $acno = $_POST['acno'];
  $q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
  $row=mysqli_fetch_array($q);
  $bal = $row['bal'];
  $tot=$bal-$amt;
  if($tot>=500)
  {
    $sql = mysqli_query($con,"UPDATE cust set bal='$tot' WHERE acno='$acno'");
    if($sql)
    {
      echo '<script>alert("Amount Withdrawn Successfully");window.location="ques5h.php"</script>';
    }
    else
    {
      echo '<script>alert("Failed");</script>'; 
    }
  }
  else
  {
    echo '<script>alert("Minimum 500 Rupees should be maintained");window.location="ques5k.php"</script>';
  }
}
?>