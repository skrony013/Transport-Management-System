<?php 
	if(isset($_POST['submit'])){
		include('connect-mysql.php');
		$tid=$_POST['trip_id'];
		$tnum=$_POST['bus_number'];
		$tdid=$_POST['driver_id'];
		$tcid=$_POST['conductor_id'];
		$tdate=$_POST['date'];
		$ts=$_POST['start_time'];
		$te=$_POST['ending_time'];
		$tep=$_POST['ending_place'];
		$tticket=$_POST['ticket_of_rate'];
		$tpassen=$_POST['no_of_Passengers'];
		$sql="INSERT INTO trip_details(`trip_id`, `bus_number`, `driver_id`, `conductor_id`, `date`, `start_time`, `end_time`, `end_place`, `ticket_rate`, `no_of_passengers`) VALUES ('$tid','$tnum','$tdid','$tcid','$tdate','$ts','$te','$tep','$tticket','$tpassen')";
		$conn=mysqli_query($dbcon,$sql);
		if($conn)
			echo "Inserted Sucessfully";
		else
			echo"Not inserted";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Add Trip Details</title>
		<link rel="stylesheet" href="style1.css"/>
	</head>
	<body >
		<form action="addTrip.php" method="post" style="background-color:#a2a7ad;">
			<fieldset>
			<legend class="legend">Trip Details</legend>
			<label >Trip Id</label></br>
			<input type="text" name="trip_id" ></br></br>
			<label>Bus Number</label></br>
			<input type="text" name="bus_number" ></br></br>
			<label>Driver Id</label></br>
			<input type="text" name="driver_id" ></br></br>
			<label>Conductor Id</label></br>
			<input type="text" name="conductor_id" ></br></br>
			<label>Date</label></br>
			<input type="text" name="date"> <br><br>
			<label>Starting Time</label></br>
			<input type="text" name="start_time"></br></br>
			<label>Ending Time</label></br>
			<input type="text" name="ending_time"></br></br>
			<label>Ending Place</label></br>
			<input type="text" name="ending_place"></br></br>
			<label>Ticket of rate</label></br>
			<input type="text" name="ticket_of_rate"></br></br>
			<label>No. of Passengers</label></br>
			<input type="text" name="no_of_Passengers"></br></br>
			</br>
			<input type="submit" name="submit" value="SUBMIT">
			<input type="reset" name="reset" value="RESET">
			</fieldset>
		</form>
	</body>
</html>