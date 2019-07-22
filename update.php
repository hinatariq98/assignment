<?php
include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $ei = $_POST['ei'];
	
	$query = "UPDATE `user_table` SET `firstname`='$fn',`lastname`='$ln',`email`='$ei' WHERE id = $id";
   $data = mysqli_query($conn, $query);
	
header('location:display.php');
}
	
?>


<html>
<head>
</head>
<body>

<form action="" method="POST">
id <input type="text" name="id"><br><br>
Firstname <input type="text" name="fn"><br><br>
Lastname <input type="text" name="ln"><br><br>
Email <input type="text" name="ei"><br><br>
<input type="submit" name="submit" value="update"/>

</form>

</body>
</html>