<?php
include "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM `user_table` WHERE id='$id'";
mysqli_query($conn, $sql);
header('location: display.php');

?>