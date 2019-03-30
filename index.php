
<?php
session_start();
if( isset($_SESSION['login']) )
{
$a=$_SESSION['login_user'];
	header("location: dashboard.php");
}
?>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1", user-scalable=no>


	<?php
	if(!(empty($_GET['msg'])) and  $_SESSION['index_page_redirect_counter'])
	{
		?>
		<script type="text/javascript">
		alert("You have signed up Successfully");
		</script>
		<?php
		$_SESSION['index_page_redirect_counter']=false;
	}

	?>
	<script type="text/javascript">
	function validate()
	{
		var n=document.forms['signup_form']['name'].value;
		for(i=0;i<n.length;i++)
		{
			var a=n.charCodeAt(i);
			if(a>=48 && a<=57)
			{	document.getElementById("2").reset();
				alert("There is a number in the name?? :D");
				return false;
			}
		}
	}
	</script>

	<title>Home Page!! </title>
	<style type="text/css">
	/* Tablet Landscape */

 

}
	body{
		font-family:courier;
		background-color:green;
	}


	
	.LoginContent{
		display:none;
		background-color: orange;
	}
	.LoginHover{
		position:absolute;
		top:255px;
		left:200px;

		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.LoginHover:hover .LoginContent{
		display:block;
	}

		.SignupContent{
		display:none;
		background-color: orange;
	}
	.SignupHover{
		position:absolute;
		top:255px;
		left:700px;
		padding-left: 2px;
		padding-right: 2px;
		padding-top: 2px;
		padding-bottom: 2px;
		width:300px;
		text-align:center;
	    font-size: 30;
		background-color: orange;

	}
	.SignupHover:hover .SignupContent{
		display:block;
	}


	.bg {
    /* The image used */
    background-image: url("qwerty.jpg");

    /* Full height */
    height: 100%; 
    opacity: 0.9;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


	</style>
	</head>

	<body id="primary" class="bg">		
		<div class="w3-container w3-teal">
		<h1 class="w3-container w3-teal"style="text-align:center"> Gas Supply !! </h1>
		<div class="LoginHover">
			<p id="logintext"> Log In </p>
				<div class=LoginContent>
					<form name="login_form" action='login.php' method="post">
						<input type="username" required name="username" placeholder="Enter Username">
						<input type="password" required name="password" placeholder="Enter Password">
						<input type="submit" value="Log In">
					</form>
				</div>
		</div>



		<div class="SignupHover">
			<p> SignUp </p>

			<div class="SignupContent">
				<form id="2" name="signup_form" onsubmit="return validate()" action="signup.php" method="post">
					<input type="text" name="fname" required placeholder="First name please :)">
					<input type="text" name="lname" required placeholder="Last name please :)">
					<input type="email" name="email" required placeholder="Email">
					<input type="text" name="college" required placeholder="Institute name">
					<input type="number" name="mob" required placeholder="Phone Number">
					<input type="text" name="uname" required placeholder="Username">
					<input type="password" name="pass"required  placeholder="Password">
					<input type="password" name="re-pass"required  placeholder="Retype Password">

					<input type="submit" value="SignUp!!">
					<input type="reset">
				</form>

			</div>
		</div>

	</div>
	



















</body>
</html>
