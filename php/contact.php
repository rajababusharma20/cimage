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
	$message=$_POST['message'];
	
	//insertion code
	$sql = "INSERT INTO contact(name,e_mail,mobile,message)VALUES('$name','$e_mail','$mobile','$message')";
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