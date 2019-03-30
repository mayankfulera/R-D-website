<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	$name=$_POST['username'];
		$pass=$_POST['password'];

		$conn=mysqli_connect("localhost",'root','','ieee');
		$sql="SELECT * from registrations where username='$name' and password='$pass'";
		$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
		$count=mysqli_num_rows($result);


	mysqli_close($conn);
}else
header("location:index.php");
?>
