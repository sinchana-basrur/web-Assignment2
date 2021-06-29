<?php
include 'connect.php';
if($_POST)
{
    $acno  =$_POST['acno'];
    $q =mysqli_query($con, "select * from cust WHERE acno = $acno ");
    $row=mysqli_fetch_array($q);
    if($row==0)
    {
        echo '<script>alert("Enter the valid account Number ");window.location="ques5g.php"</script>';
    }
}
?>
<form method="post" action="ques5f.php">
<table border="1">
    <tr>
        <td colspan="2" style="text-align:center;"> Deposit</td>
    </tr>
    <tr>
        <td>Acccount Number</td>
        <td><input type="number" name="acno" readonly="" value="<?php echo $acno?>"></td>
    </tr>
    <tr>
        <td>Enter the amount to deposit</td>
        <td><input type="number" name="amt"></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:center">
        <input type="submit" name="add" value="Deposit"></td>
    </tr>
</table>
</form>