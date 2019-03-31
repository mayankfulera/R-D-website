<?php
if($_SERVER['REQUEST_METHOD']=='POST')
	{	$leader=$_POST['l_email'];
		$member1=$_POST['m1_email'];
		$member2=$_POST['m2_email'];
		$member3=$_POST['m3_email'];
		$team_name=$_POST['team_name'];
		$teamtrack=$_POST['teamtrack'];

	$conn=mysqli_connect("localhost","ieeejkma_may","Mayank#fuler2","ieeejkma_rnd");

		$sql="INSERT INTO teams(leader,member1,member2,member3,team_name,teamtrack) VALUES( '" . $leader . "' ,'" . $member1 . "','" . $member2. "' ,'" . $member3 . "','" . $team_name . "','" . $teamtrack . "')";
		$result=mysqli_query($conn,$sql);
		$sql="SELECT team_no from teams where leader='$leader'";
		$teamid=mysqli_fetch_array(mysqli_query($conn,$sql))[0];
		echo $teamid;
		$sql="UPDATE registrations SET teamid='$teamid' where email='$leader'";
		mysqli_query($conn,$sql);
		$sql="UPDATE registrations SET teamid='$teamid' where email='$member1'";
		mysqli_query($conn,$sql);
		$sql="UPDATE registrations SET teamid='$teamid' where email='$member2'";
		mysqli_query($conn,$sql);
		$sql="UPDATE registrations SET teamid='$teamid' where email='$member3'";
		mysqli_query($conn,$sql);

}

header("location:dashboard.php");
?>