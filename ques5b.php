<?php 
    include 'connect.php';
?>
<form method="post" action="">
<table border="1">
    <tr>
        <td colspan="2" style="text-align:center;"> Bank Form</td>
    </tr>
    <tr>
        <td>Enter Account Number</td>
        <td><input type="text" name="acno"></td>
    </tr>
    <tr>
        <td>Enter Customer Name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><textarea name="addr"></textarea></td>
    </tr>
    <tr>
        <td>Enter Account Type</td>
        <td><input type="text" name="type"></td>
    </tr>
    <tr>
        <td>Enter Balance</td>
        <td><input type="number" name="balance"></td>
    </tr> 
    <tr>
        <td colspan="3" style="text-align:center">
        <input type="submit" name="submit" value="Create"></td>
    </tr> 
</table>
</form>
<?php
if(isset ($_POST["submit"]))
{
$acno = $_POST['acno'];
$name = $_POST['name'];
$addr = $_POST['addr'];
$type = $_POST['type'];
$bal = $_POST['balance'];
$q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
$row=mysqli_fetch_array($q);
if($row==0)
{
    if($bal>=500)
    {
        $sql = mysqli_query($con,"INSERT INTO cust VALUES('$acno','$name','$type','$addr','$bal')");
        if($sql)
        {
            echo '<script>alert("Data Added Successfully");window.location="ques5h.php"</script>';
        }
        else
        {
            echo '<script>alert("Failed");</script>'; 
        }
    }
    else
    {
        echo '<script>alert("Minimum 500 Rupees should be maintained");window.location="ques5b.php"</script>';  
    }
}
else
{
    echo '<script>alert("Account Number Already Present");window.location="ques5a.php"</script>';
}
}
?>