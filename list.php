<?php
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact");

$query="SELECT * FROM users";

$result= mysqli_query($link,$query);
?>

<table border="1" width="70%">
    <tr>
        <td> id </td>
        <td> Present Address</td>
        <td> Permanent Address </td>
       <!-- <td> Full Name </td>
        <td> Fathers Name </td>
        <td> Mothers Name </td>
        <td>Religion</td>-->
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <!--<td><?php echo $row['full_name']?></td>
            <td><?php echo $row['fathers_name']?></td>
            <td><?php echo $row['mothers_name']?></td>
            <td><?php echo $row['religion']?></td> -->
            <td> <a href="edit.php">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php

    }
    ?>
</table>
<a href="create.html">HOME</a>