
<?php

 session_start();

$name1="";
$name2="";
$name3="";
$leader="";
$member1="";
$member2="";
$member3="";
$flag=2;












if($_SERVER['REQUEST_METHOD']=='POST')
{
$leader=$_POST['leader'];
$member1=$_POST['member1'];
$member2=$_POST['member2'];
$member3=$_POST['member3'];
$flag=2;

$conn=mysqli_connect("localhost","ieeejkma_may","Mayank#fuler2","ieeejkma_rnd");
$sql="SELECT * from registrations where email='$leader' and teamid IS NOT NULL";
$result=mysqli_query($conn,$sql);
if(mysqli_fetch_array($result)['fname']!="")
	{
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Team Leader is already in a team
</div>

<?php
$flag=1;
}


$sql="SELECT * from registrations where email='$member1'";
$res=mysqli_query($conn,$sql);
if(!mysqli_fetch_array($res)[0] and $member1!="")
	{ $flag=1;
		?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Member 1 email is either incorrect or he's not registered.
</div>

<?php
	}
else
{
$sql="SELECT * from registrations where email='$member1' and teamid IS NOT NULL";
$result=mysqli_query($conn,$sql);
if(mysqli_fetch_array($result)['fname']!="")
	{

		?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Member 1 is already in a team
</div>

<?php

$flag=1;
}

else
{
	$sql="SELECT * from registrations where email='$member1' ";
	$result=mysqli_query($conn,$sql);
	$name1=mysqli_fetch_array($result)['fname'];
	$flag=0;
}
}

$sql="SELECT * from registrations where email='$member2'";
$res=mysqli_query($conn,$sql);
if(!mysqli_fetch_array($res)[0]  and $member2!="")
	{ $flag=1;
		?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Member 2 email is either incorrect or he's not registered.
</div>

<?php
	}
else
{


$sql="SELECT * from registrations where email='$member2' and teamid IS NOT NULL";
$result=mysqli_query($conn,$sql);
if(mysqli_fetch_array($result)['fname'])
	{
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Member 2 is already in a team
</div>

<?php
		$flag=1;
	}

	else
{
	$sql="SELECT * from registrations where email='$member2' ";
	$result=mysqli_query($conn,$sql);
	$name2=mysqli_fetch_array($result)['fname'];
}
}

$sql="SELECT * from registrations where email='$member3'";
$res=mysqli_query($conn,$sql);
if(!mysqli_fetch_array($res)[0] and $member3!="")
	{ $flag=1;
		?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong>Member 3 email is either incorrect or he's not registered.
</div>

<?php
	}
else
{
$sql="SELECT * from registrations where email='$member3' and teamid IS NOT NULL";
$result=mysqli_query($conn,$sql);
if(mysqli_fetch_array($result)['fname'])
	{
?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Error!</strong> Member 3 is already in a team
</div>

<?php
	$flag=1;
}

else
{
	$sql="SELECT * from registrations where email='$member3' ";
	$result=mysqli_query($conn,$sql);
	$name3=mysqli_fetch_array($result)['fname'];
}
}



}
?>


<html>

<head>
<link rel="icon" type="image/png" href="img/fav.png" />
<title>R&D Expo|Dashboard</title>

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

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic);
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css);



.alert {
	margin-top: 100px;
	margin-left: 200px;
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


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  background: #f1f2f7;
  font-family: 'Open Sans', arial, sans-serif;
  color: darkslategray;
}

body.login {
  background-color: white;
  max-width: 500px;
  margin: 10vh auto;
  padding: 1em;
  height: auto;
}

/* general utility classes */
.warn {
  color: lightsalmon;
}

/* header */
header[role=banner] {
  background: white;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
}
header[role=banner] h1 {
  margin: 0;
  font-weight: 300;
  padding: 1rem;
}
header[role=banner] h1:before {
  /* content: "\f248"; */
  font-family: FontAwesome;
  padding-right: .6em;
  color: turquoise;
}
header[role=banner] .utilities {
  width: 100%;
  background: slategray;
  color: #ddd;
}
header[role=banner] .utilities li {
  border-bottom: solid 1px rgba(255, 255, 255, 0.2);
}
header[role=banner] .utilities li a {
  padding: .7em;
  display: block;
}

/* header */
.utilities a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: .6em;
}

.logout a:before {
  content: "";
}

.users a:before {
  content: "";
}

nav[role=navigation] {
  background: #2a3542;
  color: #ddd;
  /* icons */
}
nav[role=navigation] li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
nav[role=navigation] li a {
  color: #ddd;
  text-decoration: none;
  display: block;
  padding: .7em;
}
nav[role=navigation] li a:hover {
  background-color: rgba(255, 255, 255, 0.05);
}
nav[role=navigation] li a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: .6em;
}
nav[role=navigation] .dashboard a:before {
  content: "";
}
nav[role=navigation] .write a:before {
  content: "";
}
nav[role=navigation] .edit a:before {
  content: "";
}
nav[role=navigation] .comments a:before {
  content: "";
}
nav[role=navigation] .users a:before {
  content: "";
}

/* current nav item */
.current, .dashboard .dashboard a, .write .write a, .edit .edit a, .comments .comments a, .users .users a {
  background-color: rgba(255, 255, 255, 0.1);
}

footer[role=contentinfo] {
  background: slategray;
  color: #ddd;
  font-size: .8em;
  text-align: center;
  padding: .2em;
}

/* panels */
.panel {
  background-color: white;
  color: darkslategray;
  -webkit-border-radius: .3rem;
  -moz-border-radius: .3rem;
  -ms-border-radius: .3rem;
  border-radius: .3rem;
  margin: 1%;
}
.panel > h2, .panel > ul {
  margin: 1rem;
}

.panel > h3, .panel > ul {
  margin: 1rem;
}

.panel > h4, .panel > ul {
  margin: 1rem;
}
/* typography */
a {
  text-decoration: none;
  color: inherit;
}

h2,
h3,
h4 {
  font-weight: 300;
  margin: 0;
}

h2,h3,h4 {
  color: #1eb6a7;
}

b {
  color: lightsalmon;
}

.hint {
  color: lightslategray;
}

/* lists */
ul, li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

main li {
  position: relative;
  padding-left: 1.2em;
  margin: .5em  0;
}
main li:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  left: 0;
  top: .3em;
  border-left: solid 10px #dde;
  border-top: solid 5px transparent;
  border-bottom: solid 5px transparent;
}

/* forms */
form input, form textarea, form select {
  width: 100%;
  display: block;
  border: solid 1px #dde;
  padding: .5em;
}
form input:after, form textarea:after, form select:after {
  content: "";
  display: table;
  clear: both;
}
form input[type=checkbox], form input[type=radio] {
  display: inline;
  width: auto;
}
form label, form legend {
  display: block;
  margin: 1em 0 .5em;
}
/* form input[type=submit] {
  background: turquoise;
  border: none;
  border-bottom: solid 4px #21ccbb;
  padding: .7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #21ccbb;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: .5em;
  -moz-border-radius: .5em;
  -ms-border-radius: .5em;
  border-radius: .5em;
} */
/* form input[type=submit]:hover {
  background: khaki;
  border: none;
  border-bottom: solid 4px #eadc5f;
  padding: .7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #eadc5f;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: .5em;
  -moz-border-radius: .5em;
  -ms-border-radius: .5em;
  border-radius: .5em;
} */

/* feedback */
.error {
  background-color: #ffe9e0;
  border-color: #ffc4ad;
}

label.error {
  padding: .2em .5em;
}

.feedback {
  background: #fcfae6;
  color: #857a11;
  margin: 1em;
  padding: .5em .5em .5em 2em;
  border: solid 1px khaki;
}
.feedback:before {
  content: "";
  font-family: fontawesome;
  color: #e4d232;
  margin-left: -1.5em;
  margin-right: .5em;
}
.feedback li:before {
  border-left-color: #f6f0b9;
}
.feedback.error {
  background: #ffe9e0;
  color: #942a00;
  margin: 1em;
  padding: .5em .5em .5em 2em;
  border: solid 1px lightsalmon;
}
.feedback.error:before {
  content: "";
  font-family: fontawesome;
  color: #ff5714;
  margin-left: -1.5em;
  margin-right: .5em;
}
.feedback.error li:before {
  border-left-color: #ffc4ad;
}
.feedback.success {
  background: #98eee6;
  color: #08322e;
  margin: 1em;
  padding: .5em .5em .5em 2em;
  border: solid 1px turquoise;
}
.feedback.success:before {
  content: "";
  font-family: fontawesome;
  color: #1aa093;
  margin-left: -1.5em;
  margin-right: .5em;
}
.feedback.success li:before {
  border-left-color: #6ce7db;
}

/* tables */
table {
  border-collapse: collapse;
  width: 96%;
  margin: 2%;
}

th {
  text-align: left;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}

tr:not(:first-child):hover {
  background: rgba(0, 0, 0, 0.1);
}

td {
  line-height: 40px;
  font-weight: 300;
  padding: 0 10px;
}

@media screen and (min-width: 600px) {
  html, body {
    height: 100%;
  }

  header[role=banner] {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    height: 75px;
  }
  header[role=banner] .utilities {
    position: absolute;
    top: 0;
    right: 0;
    background: transparent;
    color: darkslategray;
    width: auto;
  }
  header[role=banner] .utilities li {
    display: inline-block;
  }
  header[role=banner] .utilities li a {
    padding: .5em 1em;
  }

  nav[role=navigation] {
    position: fixed;
    width: 200px;
    top: 75px;
    bottom: 0px;
  }

  main[role=main] {
    margin: 75px 0 40px 200px;
  }
  main[role=main]:after {
    content: "";
    display: table;
    clear: both;
  }

  .panel {
    margin: 2% 0 0 2%;
    float: left;
    width: 96%;
  }
  .panel:after {
    content: "";
    display: table;
    clear: both;
  }

  .box, .onethird, .twothirds {
    padding: 1rem;
  }

  .onethird {
    width: 33.333%;
    float: left;
  }

  .twothirds {
    width: 66%;
    float: left;
  }

  footer[role=contentinfo] {
    clear: both;
    margin-left: 200px;
  }
}
@media screen and (min-width: 900px) {
  footer[role=contentinfo] {
    position: fixed;
    width: 100%;
    bottom: 0;
    left: 0px;
    margin: 0;
  }

  .panel {
    width: 47%;
    clear: none;
  }
  .panel.important {
    width: 96%;
  }
  .panel.secondary {
    width: 23%;
  }
}


</style>

</head>

<body>
<header role="banner">
	<!-- <img src="rndlogo.png"  height="70px;"> -->
  <h1>Admin Panel</h1> 
  <ul class="utilities">
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="logout.php">Log Out</a></li>
  </ul>
</header>

<nav role="navigation">
  <ul class="main">
    <li class="dashboard"><a href="#dashboard">Dashboard</a></li>
    <!-- <li class="write"><a href="#team">Create Team</a></li> -->
    <!-- <li class="edit"><a href="#">Edit Posts</a></li>
    <li class="comments"><a href="#">Comments</a></li>
    <li class="users"><a href="#">Manage Users</a></li> -->
  </ul>
</nav>

<main role="main">
  <section class="panel important" id="dashboard">
   
    <!-- <ul>
      <li>Important panel that will always be really wide Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
      <li>Aliquam tincidunt mauris eu risus.</li>
      <li>Vestibulum auctor dapibus neque.</li>
    </ul> -->
    
    


    <?php
    $email="";
    //session starts
    if(isset($_SESSION['login']))
    {	
        $user=$_SESSION['login_user']['fname'];
        $email=$_SESSION['login_user']['email'];
        echo " <h2><strong>Welcome to Your Dashboard $user</strong></h2> <hr noshade>"; //Personalised welcome address
$conn=mysqli_connect("localhost","ieeejkma_may","Mayank#fuler2","ieeejkma_rnd");
 $sql="SELECT * from registrations where email='$email' and teamid IS NULL";
        $result=mysqli_query($conn, $sql);
        if(mysqli_fetch_array($result)[0])
        {
            echo "<h4><strong>Create your team<strong></h4>"
            ?>
            <form method="POST" name="team_details" action="dashboard.php" style="padding-left:20px; padding-right:20px;">
                <div class="row">
<div class="col-md-6">
                <h4>Enter the Email adresses:</h4><br>
                    <div class="form-group">
                            <input type="email" class="form-control" id="leader"  name="leader"  value="<?php echo $email; ?>" required />
                        </div><br>
                        <div class="form-group">
                                <input type="email" class="form-control" id="member1"  name="member1"  value="<?php echo $member1; ?>" placeholder="Enter the Email Address of Member 1" required />
                            </div><br>
                            <div class="form-group">
                                    <input type="email" class="form-control" id="member2"  name="member2"  value="<?php echo $member2; ?>" placeholder="Enter the Email Address of Member 2" />
                                </div><br>
                                <div class="form-group">
                                        <input type="email" class="form-control" id="member3"  name="member3"  value="<?php echo $member3; ?>" placeholder="Enter the Email Address of Member 3"  />
                                    </div><br>



</div>


<div class="col-md-6">
<h4>Names:</h4><br>

        <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $user; ?>"   />
            </div><br>
            <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $name1; ?>" disabled />
                </div><br>
                <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $name2; ?>" disabled />
                    </div><br>
                    <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $name3; ?>" disabled />
						</div><br>
						<div class="row">
							<div class="col-md-4"></div>
						<div class="col-md-4"><input type="submit" value="Fetch Data" class="btn btn-success"></div>
						<div class="col-md-4"></div></div><br><br>
    
</div>
            

       </div> </form>


<form name="team_details" action="create_team.php" method="POST" style="padding-left:20px; padding-right:20px;">
<input  required type="email" name="l_email" hidden value="<?php echo $leader; ?>">
<input type="email" name="m1_email" hidden value="<?php echo $member1; ?>">
<input type="email" name="m2_email" hidden value="<?php echo $member2; ?>">
<input type="email" name="m3_email" hidden value="<?php echo $member3; ?>">

<div class="row">
<div class="col-md-6">
<div class="form-group">
      <input type="text" class="form-control" name="team_name"  value="" placeholder="Enter the Team Name"  />
                                    </div><br></div>
                                    <div class="col-md-6">      
                                     <div class="form-group">
                                            <select class="form-control" name="teamtrack">
                                                <option class="hidden"  selected disabled>Please select your Track</option>
                                            <option>Machine Learning</option>
                                                                                    <option>Artificial Intelligence</option>
                                            <option>Blockchain</option>
                                            <option>FinTech</option>
                                            <option>HealthTech</option>
                                            <option>Future Mobility</option>
                     <option>Internet of things</option>
                                          <option>Algorithms</option>
                     <option>AR/VR</option>

                    
                        

                                                
                                            </select>
                                        </div><br>
                                    </div>

</div>

<div class="row">
	<div class="col-md-4"></div>

	<div class="col-md-4"><input type="submit" class="btn btn-info" value="Create Team"  <?php if($flag==1 or $flag==2) echo "disabled" ?>> </div>
	<div class="col-md-4"></div></div>

</form>










        <?php
    }
    else 
    {
        ?>
<h2>Your team is created</h2>
<table>
    <tr>
		<th>Email Address</th>
		<!-- <th>Name</th> -->
    </tr>
<?php
$sql="SELECT leader,member1,member2,member3 from teams where leader='$email' or member1='$email' or member2='$email' or member3='$email' ";
$result=mysqli_query($conn,$sql);
$res=mysqli_fetch_array($result);
$i=0;
while($i<4){
echo"<tr>";
if($res[$i]!="") echo "<td>".$res[$i]."</td>";
echo "</tr>";






$i+=1;
}
?>
</table>




         <?php
    }
        

       
        
    } 
    // else
    // {
    //     header("location: index.php");//redirection to home-page
    // }
    // ?>














  </section>

  

</main>
<!-- <footer role="contentinfo">Easy Admin Style by Melissa Cabral</footer> -->

</body>
</html>