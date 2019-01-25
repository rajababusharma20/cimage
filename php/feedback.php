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
	
	//variable declaration
	$name=$_POST['name'];
	$e_mail=$_POST['e_mail'];
	$mobile=$_POST['mobile'];
	$feedback=$_POST['feedback'];
	
	//insertion code
	$sql = "INSERT INTO feedback(name,e_mail,mobile,feedback)VALUES('$name','$e_mail','$mobile','$feedback')";
	if($conn->query($sql)== TRUE)
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('Form Successfully Submitted');\n";
		echo "</script>";
	}
	else
	{
		echo"Error :" .sql. "<br>" .$conn->error;
	}
	//connection closed
	$conn->close();
?>