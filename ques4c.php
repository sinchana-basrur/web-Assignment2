<?php
include 'connect.php';
if($_POST)
{
    $pno  =$_POST['passno'];
    $q =mysqli_query($con, "select * from pass WHERE passno = $pno ");
    $row=mysqli_fetch_array($q);
    if($row>0)
    {
        $sql = mysqli_query($con,"DELETE FROM  pass  WHERE passno='$pno'");
        if($sql)
        {
            echo '<script>alert("Data deleted Successfully");window.location="ques4g.php"</script>';
        }
        else
        {
            echo '<script>alert("Failed");</script>'; 
        }
    }
    else
    {
        echo '<script>alert("Passport Number Not Found");window.location="ques4d.php"</script>';
    }
}
?>