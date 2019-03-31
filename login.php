
<?php

$conn=mysqli_connect('localhost','ieeejkma_may','Mayank#fuler2','ieeejkma_rnd');
session_start();
if( isset($_SESSION['login']) )
{
$a=$_SESSION['login_user'];
	header("location: dashboard.php");
}
?>

<html>
<head>
    <link rel="icon" type="image/png" href="img/fav.png" />
<title>R&D Expo|Login</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rnd</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
		.register{
			background: -webkit-linear-gradient(left, #679a01, #8ab92d);
			margin-top: 3%;
			padding: 3%;
		}
		.register-left{
			text-align: center;
			color: #fff;
			margin-top: 4%;
		}
		.register-left input{
			border: none;
			border-radius: 1.5rem;
			padding: 2%;
			width: 60%;
			background: #f8f9fa;
			font-weight: bold;
			color: #383d41;
			margin-top: 30%;
			margin-bottom: 3%;
			cursor: pointer;
		}
		.register-right{
			background: #f8f9fa;
			border-top-left-radius: 10% 50%;
			border-bottom-left-radius: 10% 50%;
		}
		.register-left img{
			margin-top: 15%;
			margin-bottom: 5%;
			width: 25%;
			-webkit-animation: mover 2s infinite  alternate;
			animation: mover 1s infinite  alternate;
		}
		@-webkit-keyframes mover {
			0% { transform: translateY(0); }
			100% { transform: translateY(-20px); }
		}
		@keyframes mover {
			0% { transform: translateY(0); }
			100% { transform: translateY(-20px); }
		}
		.register-left p{
			font-weight: lighter;
			padding: 12%;
			margin-top: -9%;
		}
		.register .register-form{
			padding: 10%;
			margin-top: 10%;
		}
		.btnRegister{
			float: right;
			margin-top: 10%;
			border: none;
			border-radius: 1.5rem;
			padding: 2%;
			background: #8ab92d;
			color: #fff;
			font-weight: 600;
			width: 50%;
			cursor: pointer;
		}
		.register .nav-tabs{
			margin-top: 3%;
			border: none;
			background: #0062cc;
			border-radius: 1.5rem;
			width: 28%;
			float: right;
		}
		.register .nav-tabs .nav-link{
			padding: 2%;
			height: 34px;
			font-weight: 600;
			color: #fff;
			border-top-right-radius: 1.5rem;
			border-bottom-right-radius: 1.5rem;
		}
		.register .nav-tabs .nav-link:hover{
			border: none;
		}
		.register .nav-tabs .nav-link.active{
			width: 100px;
			color: #0062cc;
			border: 2px solid #0062cc;
			border-top-left-radius: 1.5rem;
			border-bottom-left-radius: 1.5rem;
		}
		.register-heading{
			text-align: center;
			margin-top: 8%;
			margin-bottom: -15%;
			color: #495057;
		}
		
		</style>

</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Login for Hackathon</p>
                        <a href="index.php"><input type="submit" name="" value="Home"/></a><br>
                        
                        <!--<a href="index.php"><input type="submit" name="" value="Go to home page"/></a>-->
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Sign In using your Username</h3>
                                <form method="POST" action="login_script.php"> 
                                <div class="row register-form">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Username *" value="" name="username" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Enter Password" value="" name="password" required />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Login"/>
                                    </div>
                                    <div class="col-md-3"></div>
                                    </form>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>
            </body></html>