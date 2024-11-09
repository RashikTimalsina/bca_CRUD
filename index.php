<h1>helloworld</h1>

<?php

$conn=mysqli_connect("localhost","root","","bca");

if(!$conn){

    die("Connection failed:".mysqli_connect_error());
}

$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sqli);

<table border="1" width="100%">


<tr>
    <th>S.n</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Action</th>

</tr>

<?php foreach($result as $student){

?>

<tr>
    <td></td>
    <td><?php echo $student['name']; ?></td>
    <td><?php $student['name']; ?></td>
    <td><?php $student['name']; ?></td>
    <td>
    
    <a href="">edit</a>
    <a href="">delete</a>
    
    </td>

</tr>

<?php
}
?>
</table>