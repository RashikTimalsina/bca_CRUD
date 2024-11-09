<?php
$conn = mysqli_connect("localhost:3306", "root", "rashik", "bca");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<form action="" method="post">
    Name:<input type="text" name="name" required><br>
    Email:<input type="email" name="email" required><br>
    Address:<input type="text" name="address" required><br>
    <button>Add Record</button>

</form>
<table border="1" width="100%">
    <tr>
        <th>S.n</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php foreach ($result as $student) { ?>
        <tr>
            <td></td>
            <td><?php echo $student['name']; ?>
            </td>
            <td>
                <?= $student['email']; ?>
            </td>
            <td>
                <?= $student['address']; ?>
            </td>
            <td>
                <a href="">Edit</a>
                <a href="delete.php?id=<?=$student['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>