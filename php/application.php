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
	$f_name=$_POST['f_name'];
	$e_mail=$_POST['e_mail'];
	$mobile=$_POST['mobile'];
	$course=$_POST['course'];
	$dob=$_POST['dob'];
	$matric_marks=$_POST['matric_marks'];
	$inter_marks=$_POST['inter_marks'];
	$nationality=$_POST['nationality'];
	$caste=$_POST['caste'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	
	//insertion code
	$sql = "INSERT INTO cimage_db(name,f_name,e_mail,mobile,course,dob,matric_marks,inter_marks,nationality,caste,gender,address)VALUES('$name','$f_name','$e_mail','$mobile','$course','$dob','$matric_marks','$inter_marks','$nationality','$caste','$gender','$address')";
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