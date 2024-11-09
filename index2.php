<?php

    $conn = mysqli_connect("localhost", "root", "", "employee");

    if(!$conn){
        die("Connection failed:" .mysqli_connect_error());
    }else{
        echo"Connected successfully";
    }


    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    // $data = mysqli_fetch_all($result);
    // print_r($data); 
?>
<table border='1' width = '100%'>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>Email</th>
        <th>gender</th>
        <th>Address</th>
        <th>phone</th>
        <th>action</th>
    </tr>
    <?php foreach($result as $student) {?>
    <tr>
        <td><?php echo $student['id'];?></td>
        <td><?=  $student['name'];?></td>
        <td><?= $student['email']; ?></td>
        <td><?= $student['gender']; ?></td>
        <td><?= $student['address']; ?></td>
        <td><?= $student['phone']; ?></td>
      
        
        <td>
        <a href="edit.php?id=<?= $student['id'] ?>">edit</a>
        <a href="delete.php?id=<?= $student['id'] ?>">delete</a>
        </td>
    </tr>
    <?php } ?>

</table>
