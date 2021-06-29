<?php
include 'connect.php';
?>
<html>
<form method="post" action="ques4e.php">
<table border="1">
    <tr>
        <td colspan="3" style="text-align: center;"> Update</td>
    </tr>
    <tr>
        <td>Enter Passport Number</td>
        <td><input type="text" name="passno" required></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:center">
        <input type="submit" name="submit" value="Update"></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST["submit"]))
{
    $pno  =$_POST['passno'];
    $q =mysqli_query($con, "select * from pass WHERE passno = $pno ");
    $row=mysqli_fetch_array($q);
    if($row<0)
    {
    }
}
?>