<?php 
	if(isset($_POST['submit'])){
		include('connect-mysql.php');
		$cid=$_POST['conductor_id'];
		$cname=$_POST['conductor_name'];
		$cadress=$_POST['address'];
		$cphone=$_POST['phone_number'];
		$cstime=$_POST['shift_time'];
		$cjoining=$_POST['date_of_joining'];
		$sql="INSERT INTO conductor_details(`conductor_id`, `conductor_name`, `address`, `phone_number`, `shift_time`, `date_of_joining`) VALUES ('$cid','$cname','$cadress','$cphone','$cstime','$cjoining')";
		$conn=mysqli_query($dbcon,$sql);
		if($conn){
			echo "Data Inserted";
		}
		else{
			echo"Not Inseted";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Add Conductor Details</title>
		<link rel="stylesheet" href="style1.css"/>
	</head>
	<body >
		<form action="addConductor.php" method="POST" style="background-color:#f7cab9;">
			<fieldset>
			<legend class="legend">Conductor Details</legend>
			<label >Conductor Id</label></br>
			<input type="text" name="conductor_id" ></br></br>
			<label>Conductor Name</label><br>
			<input type="text" name="conductor_name" ></br></br>
			<label>Address</label></br>
			<input type="text" name="address" ></br></br>
			<label>Phone Number</label></br>
			<input type="text" name="phone_number" ></br></br>
			<label>Shift Time</label></br>
			<input type="text" name="shift_time"> </br></br>
			<label>Date of Joining</label></br>
			<input type="text" name="date_of_joining"></br></br>
			<br/>
			<input type="submit" name="submit" value="SUBMIT">
			<input type="reset"  name="reser" value="RESET">
			</fieldset>
		</form>
		
	</body>
</html>