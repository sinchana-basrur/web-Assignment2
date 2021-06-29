<?php
include 'connect.php';
?>
<form method="post" enctype="multipart/form-data">
<table border="1">
<thead>
    <tr>
        <th>Sl. No</th>
        <th>Passport Number</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>                                        
        <th>Date Of Birth</th>                                         
        <th>Nationality</th>                                         
        <th>Address</th> 
        <th>Gender</th>                                                
        <th>Image</th>             
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $i=1;
    $sql=mysqli_query($con,"SELECT * FROM pass ORDER BY passno ASC");
    while($row=mysqli_fetch_array($sql))
    {
    ?>
        <tr class="tr-shadow">
            <td><?php echo $i++;  ?></td>                                    
            <td ><?php echo $row['passno'];  ?></td>
            <td><?php echo $row['fname'];  ?></td>
            <td><?php echo $row['mname'];  ?></td>
            <td><?php echo $row['lname'];  ?></td>
            <td><?php echo date('d-m-Y',strtotime($row['dob']));  ?></td>
            <td><?php echo $row['nation'];  ?></td>
            <td><?php echo $row['address'];  ?></td>
            <td><?php echo $row['gender'];  ?></td>
            <td><img src="<?php echo $row['pic'];?>" height="60" width="60"></td>
            <td><a href="ques4f.php" data-placement="top" title="Edit"></a>
            &nbsp;
            <a href="ques4d.php" onclick="return confirm('Are you sure to delete');" title="Delete"></a></td>
        </tr>
    <?php 
    } 
    ?> 
</tbody>
</table>
</form>
<a href="ques4a.php">Back</a>
