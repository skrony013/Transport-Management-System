<?php 
	if(isset($_POST['submit'])){
		include('connect-mysql.php');
		$aid=$_POST['admin_id'];
		$aname=$_POST['admin_name'];
		$aadress=$_POST['address'];
		$aphone=$_POST['phone_number'];
		$sql="INSERT INTO admin_details(`admin_id`, `admin_name`, `phone_number`, `address`) VALUES ('$aid','$aname','$aadress','$aphone')";
		$conn=mysqli_query($dbcon,$sql);	
		if($conn)
			echo"Successfully inserted";
		else
			echo"Not inserted";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Add Admin Details</title>
		<link rel="stylesheet" href="style1.css"/>
	</head>
	<body >
		<form action="addAdmin.php" method="post" style="background-color:#bbaadd;">
			<fieldset>
			<legend class="legend">Admin Details</legend>
			<label >Admin Id</label></br>
			<input type="text" name="admin_id" ></br></br>
			<label>Admin Name</label></br>
			<input type="text" name="admin_name" ></br></br>
			<label>Address</label></br>
			<input type="text" name="address" ></br></br>
			
			<label>Phone Number</label></br>
			<input type="text" name="phone_number" ></br></br>
			</br>
			<input type="submit" name="submit" value="SUBMIT">
			<input type="reset" name="reset" value="RESET">
			</fieldset>
		</form>
	</body>
</html>