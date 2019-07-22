<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>

<form action="" method="POST">
id <input type="text" name="id" value=""/><br><br>
Firstname <input type="text" name="Firstname" value=""/><br><br>
Lastname <input type="text" name="Lastname" value=""/><br><br>
Email <input type="text" name="email" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>

</form>

<?php
if($_POST['submit'])
{
   $id = $_POST['id'];
   $fn = $_POST['Firstname'];
   $ls = $_POST['Lastname'];
   $ei = $_POST['Email'];

	if($id!="" && $fn!="" && $ls!="" && $ei!="")
	{
		$query = "INSERT INTO user_table VALUES ('$id','$fn','$ls','$ei')";
        $data = mysqli_query($conn, $query);

        if($data)
        {
	        echo "data inserted into database";
        }

	}
	else
	{
		echo "All fields are requied";
	}

}

?>


</body>
</html>