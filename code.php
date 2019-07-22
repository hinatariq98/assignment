<?php
include("connection.php");
$query = "INSERT INTO USER_TABLE  VALUE ('4','junnat','fatima','fatima153@gmail.com')";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "data inserted into datadase";
}

?>