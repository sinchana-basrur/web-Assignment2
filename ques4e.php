<?php
include 'connect.php';
if($_POST)
{
    $pno  =$_POST['passno'];
    $q =mysqli_query($con, "select * from pass WHERE passno = $pno ");
    $row=mysqli_fetch_array($q);
    if($row==0)
    {
        echo '<script>alert("Passport Number not found");window.location="ques4f.php"</script>';
    }
}
?>
<form method="post" action="">
    <table border="1" style="text-align:left;">
        <tr>
            <td colspan="2" style="text-align:center;"> Update</td>
        </tr>
        <tr>
            <td>Enter Passport Number</td>
            <td><input type="text" name="passno" value="<?php echo $row['passno']; ?>"></td>
        </tr>
        <tr>
            <td>Enter First Name</td>
            <td><input type="text" name="fname" value="<?php echo $row['fname']; ?>"></th>
        </tr>
        <tr>
            <td>Enter Middle Name</td>
            <td><input type="text" name="mname" value="<?php echo $row['mname']; ?>"></td>
        </tr>
        <tr>
            <td>Enter Last Number</td>
            <td><input type="text" name="lname" value="<?php echo $row['lname']; ?>"></td>
        </tr>
        <tr>
            <td>Enter DOB</td>
            <td><input type="date" name="dob" value="<?php echo $row['dob']; ?>"></td>
        </tr>
        <tr>
            <td>Enter Nationality</td>
            <td><input type="text" name="nation" value="<?php echo $row['nation']; ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" ><?php echo $row['address']; ?></textarea></td>
        </tr>
        <tr>
            <td>Select Gender</td>
            <td><input type="radio" name="gender" value="male" 
            <?php if($row['gender']=="male"){ echo "checked";}?>>Male
            <input type="radio" name="gender" value="female" 
            <?php if($row['gender']=="female"){ echo "checked";}?>>Female
            <input type="radio" name="gender" value="other" 
            <?php if($row['gender']=="other"){ echo "checked";}?>>Other</td>
        </tr>      
        <tr>
            <td>Upload Picture</td>
            <td><img src="<?php echo $row['pic']; ?>" height="100px" width="100px">
            <input type="file" name="file" ></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center">
            <input type="submit" name="update" value="Update"></td>
        </tr> 
    </table>
</form>
<?php
if(isset ($_POST["update"]))
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$passno = $_POST['passno'];
$nation = $_POST['nation'];
$addr = $_POST['address'];
$gender = $_POST['gender'];
$pic=$row['pic'];
$pname=$_FILES['file']['name'];
$ftype=$_FILES['file']['type'];
$fsize=$_FILES['file']['size'];
$floc=$_FILES['file']['tmp_name'];
$fstore="upload/".$pname;
move_uploaded_file($floc,$fstore);
if($fstore=="upload/")
{
    $fstore=$pic;
}
$sql = mysqli_query($con,"UPDATE `pass` set `passno`='$passno',`fname`='$fname',`mname`='$mname',`lname`='$lname',`dob`='$dob',`nation`='$nation',`address`='$addr',`gender`='$gender',`pic`='$fstore' WHERE passno='$pno'");
if($sql)
{
    echo '<script>alert("Data Updated Successfully");window.location="ques4g.php"</script>';
}
else
{
    echo '<script>alert("Failed");</script>'; 
}
}
?>