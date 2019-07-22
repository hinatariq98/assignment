<style>
td
{
	padding:10px
}
</style>
<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM user_table";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
	
    <table>
	    <tr>
		   <th>id</th>
		   <th>firstname</th>
		   <th>Lastname</th>
		   <th>Email</th>
		   <th colspan="3">operations</th>
        </tr>
	

    
	<?php
	
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		         <td>".$result['id']."</td>
		         <td>".$result['firstname']."</td>
		         <td>".$result['lastname']."</td>
			     <td>".$result['email']."</td>
				 <td><a href='update.php?id=$result[id]&fn=$result[firstname]&ln=$result[Lastname]&ei=$result[Email]'>Edit</a><td>
				 <td><a href='delete.php?id=$result[id]'>Delete</a></td>
		   </tr>";
    }
}
else
{
	echo "No recod found";
}
	

?>
</table>