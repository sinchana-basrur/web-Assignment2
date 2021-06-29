<?php
include 'connect.php';
?>
<form method="post">
<table border="2">
<thead>
    <tr>
        <th>Sl. No</th>
        <th>Account Number</th>
        <th>Customer Name</th>                                       
        <th>Customer Address</th> 
        <th>Account Type</th>                                        
        <th>Balance</th>
    </tr>
</thead>
<tbody>
    <?php
    $i=1;
    $sql=mysqli_query($con,"SELECT * FROM cust ORDER BY acno ASC");
    while($row=mysqli_fetch_array($sql))
    {
    ?>
    <tr>
        <td><?php echo $i++;  ?></td>           
        <td ><?php echo $row['acno'];  ?></td>
        <td><?php echo $row['name'];  ?></td>
        <td><?php echo $row['address'];  ?></td>
        <td><?php echo $row['type'];  ?></td>
        <td><?php echo $row['bal'];  ?></td>
    </tr>
    <?php 
    } 
    ?>                                       
    <tr>
        <td colspan="6" style="text-align:center">
        <a href="p5.php" class="btn btn-dark">Back</a></td>
    </tr>
</tbody>
</table>
</form>