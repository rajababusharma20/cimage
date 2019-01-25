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
	//For Display
	$mobile=$_POST['mobile'];
	//$name=$_POST['name'];
	$result = mysqli_query($conn,"SELECT * FROM cimage_db WHERE mobile='$mobile'");
		echo"<table border=1px solid red align=center>
			<tr>
				<th>Name</th>
				<th>Father's Name</th>
				<th>E-mail</th>
				<th>Mobile</th>
				<th>Course</th>
				<th>DOB</th>
				<th>Matric Marks</th>
				<th>Inter Marks</th>
				<th>Nationality</th>
				<th>Caste</th>
				<th>Gender</th>
				<th>Adderss</th>
			</tr>";
			while($row = mysqli_fetch_array($result))			
			{
				echo"<tr>";
					echo"<td>".$row['name']."</td>";
					echo"<td>".$row['f_name']."</td>";
					echo"<td>".$row['e_mail']."</td>";
					echo"<td>".$row['mobile']."</td>";
					echo"<td>".$row['course']."</td>";
					echo"<td>".$row['dob']."</td>";
					echo"<td>".$row['matric_marks']."</td>";
					echo"<td>".$row['inter_marks']."</td>";
					echo"<td>".$row['nationality']."</td>";
					echo"<td>".$row['caste']."</td>";
					echo"<td>".$row['gender']."</td>";
					echo"<td>".$row['address']."</td>";
				echo"</tr>";
			}
		echo"</table>";
   $conn->close();
?>