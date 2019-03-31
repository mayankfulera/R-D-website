<html>
<head>
	<link rel="icon" type="image/png" href="img/fav.png" />
<title>R&D Expo|Register</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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





	

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

		</style>
</head>
<body>
	<?php
		session_start();
		$flag=1;
		$dbhost="localhost";
		$dbuser="ieeejkma_may";
		$dbpass="Mayank#fuler2";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$college=$_POST['college'];
		$mob=$_POST['mob'];

		$uname=$_POST['uname'];
		$password=$_POST['pass'];
 $repass=$_POST['repass'];


        if ($password != $repass) {

            ?>
 
 <div class="alert">
   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
   <strong>Error!</strong> Passwords do not match
 </div>
 

            <?php


           exit;


         
         }



		if($_SERVER['REQUEST_METHOD']=='POST'){
		$conn=mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$conn)
		{
			die('Could not connect' . mysqli_error());
			$flag=0;
		}
		// echo "<p>Connected Successfully!!</p>";
		$c=mysqli_select_db($conn, "ieeejkma_rnd");
	 if($c)
        
        {	$sql="select * from registrations where email='$email'";
            $sql_u = "select * from registrations WHERE username='$uname'";

            $result=mysqli_query($conn, $sql);
            $res_u = mysqli_query($conn, $sql_u);

			
		// if{
			if(mysqli_num_rows($result)>0)
			{
                // die("Username Already Exists");
                
				
				?>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> User Already Exists
</div>

<?php

$flag=0;
            }

elseif (mysqli_num_rows($res_u) > 0) {
   ?>

   <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Sorry..</strong> Username Already taken
</div>
	
<?php


				$flag=0;
			}
			else
			{
			$sql="INSERT INTO registrations(fname,lname,email,mob,college,username,password) VALUES( '" . $fname . "' ,'" . $lname . "','" . $email. "' ,'" . $mob . "','" . $college . "','" . $uname . "','" . $password . "')";
			$result=mysqli_query($conn, $sql);
			if($result)
			{
			?>
				<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> You have registered successfully
</div>
			
	 <?php
			}	 
            else 
				{echo "<p>Record could not be inserted in login_data</p>" . mysqli_error($conn);$flag=0;}

		}
		// }
	}
		mysqli_close($conn);
		// echo "<p>Connection closed!! </p>";
		if($flag==1)
		{  
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> You have registered successfully
</div>
<?php
		header("location:login.php");
	}
	}
	else
		header("location:index.php");
	?>















<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Register here for Hackathon</p>
                        <a href="index.php"><input type="submit" name="" value="Home"/></a><br>
                        <!--<a href=index.php><input type="submit" name="" value="<<Back"/></a>-->
                    </div>
                    <div class="col-md-9 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hackathon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ideathon</a>
                            </li>
                        </ul> -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register for Hackathon</h3>
                                <form action="signup.php" method="POST"> 
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="fname" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lname" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" required pattern="^[a-zA-Z0–9_.+-]+@[a-zA-Z0–9-]+.[a-zA-Z0–9-.]+$" name="email" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" name="mob" required />
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                       
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Institute Name *" value="" name="college" required/>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" value="" name="uname" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Password *" value="" name="pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                                        </div>
                                            <div class="form-group">
                                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="repass" required />
                                                </div>
                                        <!-- <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div> -->
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div></form>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>






</body>
</html>