<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cimage";

	//create connection
	$conn=new mysqli($servername, $username, $password, $dbname);
	//check connection
	if ($conn->connect_error)
	{
		die("Connection faild: " .$conn->connect_error);
	}
	// sql to delete a record
	$mobile=$_POST['mobile'];
	$sql = "DELETE FROM admission_form WHERE mobile='$mobile'";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('Record Successfully Deleted');\n";
		echo "</script>";
	}
	else 
	{
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>