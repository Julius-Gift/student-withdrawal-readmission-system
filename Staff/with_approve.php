<?php
	session_start();
	require '../style/conn.php';

	if (isset($_GET["docID"])) {
		
		$feedback = "Approved";
		$application_id = $_GET["docID"];
	}
	
	$sql = "INSERT INTO with_feedback(feedback, application_id) VALUES('$feedback','$application_id')";
	$query = mysqli_query($dbc, $sql);
	if (!$query) {
		header("location:view_withdrawal.php?feedback=approvewitherror");
		exit();
	} else {
		header("location:view_withdrawal.php?feedback=approvedwith");
		exit();
	}

	mysqli_close($dbc);
?>