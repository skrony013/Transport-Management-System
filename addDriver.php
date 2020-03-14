<?php 
	if(isset($_POST['submit'])){
		include('connect-mysql.php');
		$did=$_POST['driver_id'];
		$dname=$_POST['driver_name'];
		$dadress=$_POST['address'];
		$dphone=$_POST['phone_number'];
		$dshift=$_POST['shift_time'];
		$djoining=$_POST['joining_time'];
		$sql="INSERT INTO driver_details(`driver_id`, `driver_name`, `address`, `phone_number`, `shift_time`, `joining_time`) VALUES ('$did','$dname','$dadress','$dphone','$dshift','$djoining')";
		$conn=mysqli_query($dbcon,$sql);
		if($conn)
			echo "Data Inserted";
		else
			echo"Not inserted";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Add Driver Details</title>
		<link rel="stylesheet" href="style1.css"/>
	</head>
	<body>
		<form action="addDriver.php" method="post" style="background-color:#cdc4c5;">
		    <fieldset>
				<legend class="legend">Driver Details</legend>
				<label >Driver Id</label><br>
				<input type="text" name="driver_id" ></br></br>
				<label>Driver Name</label></br>
				<input type="text" name="driver_name" ></br></br>
				<label>Address</label><br>
				<input type="text" name="address" ></br></br>
				<label>Phone Number</label></br>
				<input type="text" name="phone_number" ></br></br>
				<label>Shift Time</label></br>
				<input type="text" name="shift_time"> </br></br>
				<label>Date of Joining</label></br>
				<input type="text" name="joining_time"></br></br>
				</br>
				<input type="submit" name="submit" value="SUBMIT">
				<input type="reset"  name="reset"  value="RESET">
			</fieldset>
		</form>
	</body>
</html>