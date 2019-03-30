<html>
<head>
	<title>"Sign Up!!"</title>
</head>
<body>
	<?php
		session_start();
		$flag=1;
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$college=$_POST['college'];
		$mob=$_POST['mob'];

		$uname=$_POST['uname'];
		$password=$_POST['pass'];

		if($_SERVER['REQUEST_METHOD']=='POST'){
		$conn=mysqli_connect($dbhost, $dbuser, $dbpass);
		if(! $conn)
		{
			die('Could not connect' . mysqli_error());
			$flag=0;
		}
		echo "<p>Connected Successfully!!</p>";
		$c=mysqli_select_db($conn, "ieee");
		if($c)
		{	$sql="select * from registrations where username='$uname' ";
			$result=mysqli_query($conn, $sql);
			if(!$result)
			{die ("mysqli_error($conn)");$flag=0;}
		else{
			if(mysqli_num_rows($result)>0)
			{
				die("Username Already Exists");$flag=0;
			}
			else
			{
			$sql="INSERT INTO registrations(fname,lname,email,mob,college,username,password) VALUES( '" . $fname . "' ,'" . $lname . "','" . $email. "' ,'" . $mob . "','" . $college . "','" . $uname . "','" . $password . "')";
			if(mysqli_query($conn, $sql))
				echo "<p>Record Inserted in login_data!!</p>";
			else 
				{echo "<p>Record could not be inserted in login_data</p>" . mysqli_error($conn);$flag=0;}

		}
		}
	}
		mysqli_close($conn);
		echo "<p>Connection closed!! </p>";
		if($flag==1)
		{  
		header("location:login.php");
	}
	}
	else
		header("location:index.php");
	?>
</body>
</html>