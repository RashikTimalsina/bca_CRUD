<?php
$conn = mysqli_connect("localhost:3306", "root", "rashik", "bca");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id =$id";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
$sqli = "UPDATE students SET name='$name',email='$email', address='$address' WHERE id=$id";
  if(mysqli_query($))

}

if (mysqli_query($conn, $sql)) {
    header("Location: index1.php");
} else {
    echo "Error deleting record: ";
}
?>