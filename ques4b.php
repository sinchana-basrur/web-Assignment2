<?php 
    include 'connect.php';
?>
<form method="post" action="">
    <table border="1" style="text-align:left;">
        <tr><td colspan="2" style="text-align:center;"> Passport Form</td></tr>
        <tr>
            <td>Enter Passport Number</td>
            <td><input type="text" name="passno"></td>
        </tr>
        <tr>
            <td>Enter First Name</td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Enter Middle Name</td>
            <td><input type="text" name="mname"></td>
        </tr>
        <tr>
            <td>Enter Last Number</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Enter DOB</td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td>Enter Nationality</td>
            <td><input type="text" name="nation"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address"></textarea></td>
        </tr>
        <tr>
            <td>Select Gender</td>
            <td><input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other</td>
        </tr>
        <tr>
            <td>Upload Picture</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center">
            <input type="submit" name="submit" value="Submit"></td>
        </tr> 
    </table>
</form>
<?php
if(isset ($_POST["submit"]))
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$passno = $_POST['passno'];
$nation = $_POST['nation'];
$addr = $_POST['address'];
$gender = $_POST['gender'];
$pname=$_FILES['file']['name'];
$ftype=$_FILES['file']['type'];
$fsize=$_FILES['file']['size'];
$floc=$_FILES['file']['tmp_name'];
$fstore="upload/".$pname;
move_uploaded_file($floc,$fstore);
$q =mysqli_query($con, "select * from pass WHERE passno = $passno ");
$row=mysqli_fetch_array($q);
if($row==0)
{
    $sql=mysqli_query($con,"INSERT INTO pass VALUES('$passno','$fname','$mname','$lname','$dob','$nation','$addr','$gender','$fstore')");
    if($sql)
    {
        echo '<script>alert("Data Added Successfully");window.location="ques4g.php"</script>';
    }
    else
    {
        echo '<script>alert("Failed");</script>';
    }
}
else
{
    echo '<script>alert("Passport Number Already Present");window.location="ques4b.php"</script>';
}
}
?>