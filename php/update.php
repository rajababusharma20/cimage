<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cimage";
	
	//create connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	//check connection
	if ($conn->connect_error)
	{
		die("Connection Failed: " .$conn->connect_error);
	}
	//for updation
	$name=$_POST['name'];
	$f_name=$_POST['f_name'];
	$mobile=$_POST['mobile'];
	$sql = "UPDATE admission_form SET name='$name',f_name='$f_name' WHERE mobile='$mobile'";
	if ($conn->query($sql)==TRUE)
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('Record Successfully Updated');\n";
		echo "</script>";
	}
	else
	{
		echo"Error Updating Record: " .$conn->error;
	}
	//connection Close
	$conn->close();
?>