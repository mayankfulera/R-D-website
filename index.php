<?php
$conn=mysqli_connect("localhost","ieeejkma_may","Mayank#fuler2","ieeejkma_rnd");
session_start();
if( isset($_SESSION['login']) )
{
$a=$_SESSION['login_user'];
	header("location: dashboard.php");
}
?>
    
    
    <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<!--<link rel="shortcut icon" href="img/fav.png">-->
		<link rel="icon" type="image/png" href="img/fav.png" />
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>R&D Expo|IEEE JUIT SB's Flagship Event</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">

			<!-- <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 -->

			<style>
			.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 
}


@media (min-width: 576px)
{
	.modal-dialog
	{max-width:1500px;
	margin:1.75rem auto;
	}
}


@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400);

.font-roboto {
  font-family: 'roboto condensed';
}

* {
  box-sizing: border-box;
}



.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
}

.modal-dialog {
  position: fixed;
  margin: 0;
  width: 100%;;
  height: 100%;
  padding: 0;
}

.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border: 2px solid #8ab92d;
  border-radius: 0;
  box-shadow: none;
}

.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #6598d9;
  border: 0;
}

.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}

.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
}

.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 60px;
  padding: 10px;
  background: #f1f3f5;
}

.btn-modal {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -100px;
  width: 200px;
}




::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid darken(#f1f3f5, 10%);
}

::-webkit-scrollbar-thumb {
  background: darken(#f1f3f5, 20%);
}






			
			</style>
		</head>
		<body>

			
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/rndlogo.png" alt="" title="" height="80px;"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
						  <li class="menu-active"><a href="#home">Home</a></li>
						  <li><a href="#about">About R&D Expo</a></li>
				          <li><a href="#hackathon">Hackathon</a></li>
				          <li><a href="#ideathon">Ideathon</a></li>
				          <li><a href="#schedule">Schedule</a></li>
				          <!-- <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				              <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li> -->
						  <li><a class="ticker-btn" href="register.php">Hackathon Registration</a></li>
						  <li><a class="ticker-btn" href="login.php">Sign in</a></li>

				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-9 col-md-12">
							<h6>Flagship Event of IEEE JUIT Student Branch</h6>
							<h1 class="text-white">
								R&D Expo 2019			
							</h1>
							<div class="countdown">
								<div id="timer" class="text-white"></div>
							</div>
							<h4><span class="lnr lnr-calendar-full"></span>  19th - 20th April, 2019</h4>
							<h4><span class="lnr lnr-map"></span>  Jaypee University of Information Technology, Solan</h4>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->				
	
			<!-- Start home-video Area -->
			<section class="home-video-area" id="about">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center">
						<div class="col-lg-4 no-padding about-right">
							<p class="top-title">What is R&D Expo?</p>
							<h1>IEEE JUIT Student Branch Pesents <br>
							R&D Expo 2019</h1>
							<!-- <p><span>We are here to listen from you deliver exellence</span></p> -->
							<p>
								R&D Expo is a two-day event being hosted by IEEE JUIT Student Branch. Many events are being organized under R&D Expo such as
								 Hackathon, Ideathon, Project Exposition, Tech Talks by various speakers having expertise and experience in
								  the field of science and technology.
								 Our goal is to bring all the students and attendees together to give them inspiration, vision and motivation to achieve more and be successful.
							</p>
						</div>
						<section class="video-area col-lg-6 no-padding">
							<div class="overlay overlay-bg"></div>
							<div class="containers">
								<div class="video-content">
									<img class="img-fluid" src="img/about1.jpg" alt="">
								</div>
							</div>
						</section>											
					</div>
				</div>	
			</section>
			<!-- End home-aboutus Area -->


			<!-- Start home-aboutus Area -->
			<section class="home-aboutus-area">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-8 no-padding about-left">
							<img class="img-fluid" src="img/about2.jpg" alt="">
						</div>
						<div class="col-lg-4 no-padding about-right">
							<p class="top-title">Main Events of R&D Expo</p>
							<h1 class="text-white">Our Main events <br>
							in R&D Expo 2019 include</h1>
							<h4 class="text-white"><span>Hackathon</span></h4>
							<p>
								A hackathon is a design sprint-like
event in which computer
programmers and others involved in
software development, including
graphic designers, interface designers,
project managers, and others, often
including domain including domain experts, collaborate
intensively on software projects.
							</p>
							<br>
							<h4 class="text-white"><span>Ideathon</span></h4>
							<p>
								Pitching your idea on the open stage,
that marks a signiöcant change in the
trend.
Participants present their ideas using
posters designed by them.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-aboutus Area -->

			<!-- Start video-sec Area -->
			<section class="video-sec-area section-gap" id="hackathon">
				<div class="container">
					<div class="row justify-content-center align-items-center ">
						<div class="col-lg-6 video-left">
							<!-- <h6>Brand new app to blow your mind</h6> -->

							<img src="img/hack.png" height="170px;"><br>
							<!-- <h1>HACKATHON<br>
							</h1> -->
							<p>DATE: 19 AND 20 APRIL, 2019 | ENTRY FEE: ₹ 400 PER TEAM
									<br><span style="color:red">* RESGISTER BEFORE APRIL 18</span></p>
							<p><span>Choose your own team and Dream, Hack & Build!</span></p>
							<p>
								 A 18 hour Hackathon aimed at building innovation and creative solutions 
								where the participants build an 
								application, web or mobile, based on the given topics. Practice Skills, learn technologies,
								 win prizes and grow your network!<br><br><span><i class="fa fa-trophy" style="font-size:24px; color:#ffc107"></i>&nbsp; Prizes worth more than ₹ 50,000</span>
							</p><br>
							<!-- <p><img src="img/prize.png" height="140px;"  class="center"></p> -->
							<button type="button" class="primary-btn" data-toggle="modal" data-target="#fssModal">Read More..</button> &nbsp; &nbsp; 
							<button type="button" class="primary-btn" data-toggle="modal" data-target="#fssModal">Register</button>
						</div>
						<div class="col-lg-6">
							<div class="active-video-carusel">
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/web1.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div> -->
									<!-- <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/hackathon.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div>
									<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>	
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/prize.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div>
									<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>																		
							</div>							
						</div> 
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->












			<section class="video-sec-area section-gap" id="ideathon" style="background: #f7f7f7;" >
				<div class="container">
					<div class="row justify-content-center align-items-center ">
						
						
<!-- <div class="col-lg-2"></div> -->
						<div class="col-lg-6 video-left">
							<!-- <h6>Brand new app to blow your mind</h6> -->

							<img src="img/ideathon1.png" height="100px;"><br><br><br>
							<!-- <h1>HACKATHON<br>
							</h1> -->
							<p><span>Choose your own team and Dream, Design and Develop</span></p>
							<p>
								Pitching your idea on the open stage,
								that marks a signiöcant change in the
								trend.
								Participants present their ideas using
								posters designed by them.<br><br><span><i class="fa fa-trophy" style="font-size:24px; color:#ffc107"></i> Prizes worth more than ₹ 5,000.
							</p><br>
							<!-- <p><img src="img/prize.png" height="140px;"  class="center"></p> -->
							<button type="button" class="primary-btn" data-toggle="modal" data-target="#fsModal">Read More..</button> &nbsp; &nbsp; 
							<!-- <button type="button" class="primary-btn" data-toggle="modal" data-target="#fsModal">Register</button> -->


								
						
						</div>










						
						




















		

						<div class="col-lg-6">
							<div class="active-video-carusel">
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/marketing_process1.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div> -->
									<!-- <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/ideathon-brain.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div>
									<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>	
									<div class="item video-right justify-content-center align-items-center d-flex" style="background:url(img/video-bg.png) no-repeat center;background-size: cover;">
									<!-- <div class="overlay overlay-bg"></div>
									<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a> -->
									</div>																		
							</div>							
						</div> 


					</div>
				</div>	
			</section>


			<div id="fsModal"
			class="modal animated bounceIn"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myModalLabel"
			aria-hidden="true">
	   
		 <!-- dialog -->
		 <div class="modal-dialog">
	   
		   <!-- content -->
		   <div class="modal-content">
			 <!-- header -->
			 <!-- <div class="modal-header"> -->
				<!-- <button type="button" class="close" data-dismiss="modal" style=>&times;</button> -->

			   <!-- <h1 id="myModalLabel"
				   class="modal-title">
				 Modal title
			   </h1> -->
			 <!-- </div> -->
			 <!-- header -->
			 
			 <!-- body -->
			 <div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" style="float: right;">&times;</button>
					<br>

			   
					<div class="container">
							<div class="row justify-content-center align-items-center ">
								
								
		<!-- <div class="col-lg-2"></div> -->
								<div class="col-lg-6 video-left">
									<!-- <h6>Brand new app to blow your mind</h6> -->
		
									<img src="img/ideathon1.png" height="100px;"><br><br><br>
									<!-- <h1>HACKATHON<br>
									</h1> -->
									<p><span><strong>Choose your own team and Dream, Design and Develop</strong></span></p>
									<p>
										Pitching your idea on the open stage,
										that marks a signiöcant change in the
										trend.
										Participants present their ideas using
										posters designed by them.<br><br><span><i class="fa fa-trophy" style="font-size:24px; color:#ffc107"></i> <strong>Prizes worth more than ₹ 5,000.</strong>
									</p><br>
									<!-- <p><img src="img/prize.png" height="140px;"  class="center"></p> -->
									<!-- <button type="button" class="btn btn-success" >Register</button> -->Registrations for Ideathon will open on 7th April, 2019.
		
		
										
								
								</div>
		
		

				
		
								<div class="col-lg-6">
									<img src="img/video-bg.png">			
								</div> 
		
		
							</div>
						</div>	





			 </div>
			 <!-- body -->
	   
			 <!-- footer -->
			 <div class="modal-footer">
			   <button class="btn btn-success"
					   data-dismiss="modal">
				 close
			   </button>
			   <!-- <button class="btn btn-default">
				 Default
			   </button>
			   <button class="btn btn-primary">
				 Primary
			   </button> -->
			 </div>
			 <!-- footer -->
	   
		   </div>
		   <!-- content -->
	   
		 </div>
		 <!-- dialog -->
	   
	   </div>
	   <!-- modal -->
	   







	   <div id="fssModal"
			class="modal animated bounceIn"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myModalLabel"
			aria-hidden="true">
	   
		 <!-- dialog -->
		 <div class="modal-dialog">
	   
		   <!-- content -->
		   <div class="modal-content">
			 <!-- header -->
			 <!-- <div class="modal-header"> -->
				<!-- <button type="button" class="close" data-dismiss="modal" style=>&times;</button> -->

			   <!-- <h1 id="myModalLabel"
				   class="modal-title">
				 Modal title
			   </h1> -->
			 <!-- </div> -->
			 <!-- header -->
			 
			 <!-- body -->
			 <div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" style="float: right;">&times;</button>
					<br>

			   
					<div class="container">
							<div class="row justify-content-center align-items-center ">
								
								
		<!-- <div class="col-lg-2"></div> -->
								<div class="col-lg-6 video-left">
									<!-- <h6>Brand new app to blow your mind</h6> -->
		
									<img src="img/hack.png" height="170px;"><br>
									<!-- <h1>HACKATHON<br>
									</h1> -->
									<p style="color: #8ab92d;">
										<strong>Date: 19 AND 20 APRIL, 2019<BR>
											Time: 18 HRS<BR>
												Entry Fee: ₹ 400 PER TEAM</strong><br><br>
												<!-- <button type="button" class="btn btn-success" >Register</button> -->

									</p><br>

									<p style="color: #8ab92d; font-size: 30px;">
									
									<strong>Description</strong>
									
									
									</p>
									<!-- <p><span><strong>Choose your own team and Dream, Design and Develop</strong></span></p> -->
									<p>
											18 hours of tech rendezvous, where art and technology run wild! Choose your own team and Dream, Hack & Build!
											 A 18 hour Hackathon aimed at building innovation and creative solutions where the participants build an application,
											 web or mobile, based on the given topic. Practice Skills, learn technologies, win prizes and grow your network!
									</p><br>

									<p style="color: #8ab92d; font-size: 30px;">
									
											<strong>Prizes</strong>
											
											
											</p>
											
											<span><i class="fa fa-trophy" style="font-size:48px; color:#ffc107"></i><br> 
												<strong> WORTH <br><span style="color: #8ab92d;">₹ 50,000</span></strong><br><br>

												<p style="color: #8ab92d; font-size: 30px;">
									
														<strong>Tracks</strong>
														
														
														</p><br>
														<p>
																Develop your innovation into reality working on the following tracks:<br>
															<span style="color: #8ab92d;">•	<strong>Machine Learning:</strong></span>	 Are you fascinated by how Netflix recommends the movies you’ll like? Have you wondered what is the Google algorithm that shows you such accurate search results? Machine Learning is behind these innovations. It represents a key evolution in the fields of computer science, data analysis, software engineering, and artificial intelligence.<br>
															<span style="color: #8ab92d;">	•   <strong>Artificial Intelligence:</strong></span> From bots, to personal assistants, and shopping automation, what the future holds for artificial intelligence can be described for sure with at least one word; Exciting. Our machines and devices are getting faster, more efficient and slowly learning to do things on their own.<br>
															<span style="color: #8ab92d;">•   <strong>Blockchain:</strong></span> Today's most exciting use cases for blockchain technology extend far beyond payments and digital currency. With the advent of "smart contracts" and turing-complete frameworks, blockchain technology has evolved far beyond just bitcoins. It is time to join the Web 3.0 revolution!<br>
																<span style="color: #8ab92d;">	•	<strong>AR / VR:</strong></span> VR and AR is the extension of our minds, and is meant for those interested in building immersive, engaging experiences for real industry applications. From fashion and sports to data visualisation and engineering to education and healthcare, every sector will be impacted by the rise of VR & AR.<br>
																	<span style="color: #8ab92d;">•	<strong>Internet of Things:</strong></span> A world of devices connected by internet opens up opportunities for us that were previously unthinkable. Innovative apps can be built that can allow devices to share data and take intelligent decisions.<br>
																		<span style="color: #8ab92d;">	•	<strong>Algorithm:</strong></span> Ever wondered why is there a price hike while we hunt for the same flight over and over? Algorithms do it for the Airlines. This concept of Algorithms has existed for centuries; from increasing your flight fares to making your work easier online, algorithms are an integral part of how computers process data. With this track, you challenge world's best programmers and put your coding skills at their best!<br>
																			<span style="color: #8ab92d;">	•	<strong>FinTech:</strong></span> The financial services industry is facing a wave of digital disruption that is starting to reshape the sector. This industry is currently the second-biggest target for disruption, after health care.<br>
																				<span style="color: #8ab92d;">	•	<strong>HealthTech:</strong></span> None of us need to search far for a friend or family member impacted by sickness or injury. At our most vulnerable moments, we are confronted with a healthcare system woefully incapable of meeting the current demands. We are calling on all hackers and sponsors to innovate for a healthier future.<br>
																					<span style="color: #8ab92d;">	•	<strong>Future Mobility:</strong></span> From self driving cars to smart cities software and sensor technology is changing the way we move around. Hate traffic? We too. Hate pollution? Same. Hate finding a parking spot? Yep. Join the Future Mobility track and solve these problems.
																




														</p>



												<br><br>

												<p style="color: #8ab92d; font-size: 30px;">
									
														<strong>Rules</strong>
														
														
														</p>
														
														<p>
																•	Travel charges to the venue i.e Waknaghat, Solan must be borne by the participants.<br>
																•	Participants should get Laptops.<br>
																•	Individual participation for hackathon not allowed.<br>
																•	Each group should consist minimum of 2 and maximum of 4 participants.<br>
																•	Choose one of the above mentioned tracks to form the project in the Hackathon.<br>

																•	Only 18 hours will be provided to build the Project.<br>
																•	All members must be physically present at the venue during sign-in, Project building and presentation.<br>
																•	Open source libraries can be used, provided the library has a GNU General Public License.<br>
																•	Hardware, software and other open source libraries that are being used in the project must be submitted during sign-in.<br>
																•	The decision by the jury will be transparent, final and binding.<br>
																•	Participants are requested to bring their own hardware and software required to develop the Project which needs to be verified with the organizers.<br>
																•	Maintaining discipline throughout the event is mandatory and any misbehaviour will lead to disqualification of the entire team.<br>
																



														</p>









									<!-- <p><img src="img/prize.png" height="140px;"  class="center"></p> -->
									<a href="register.php"><button type="button" class="btn btn-success" >Register</button></a>
		
		
										
								
								</div>
		
		

				
		
								<div class="col-lg-6" style="padding-bottom:1500px;">
									<img src="img/web.png">			
								</div> 
		
		
							</div>
						</div>	





			 </div>
			 <!-- body -->
	   
			 <!-- footer -->
			 <div class="modal-footer">
			   <button class="btn btn-success"
					   data-dismiss="modal">
				 close
			   </button>
			   <!-- <button class="btn btn-default">
				 Default
			   </button>
			   <button class="btn btn-primary">
				 Primary
			   </button> -->
			 </div>
			 <!-- footer -->
	   
		   </div>
		   <!-- content -->
	   
		 </div>
		 <!-- dialog -->
	   
	   </div>
	   <!-- modal -->
	   







			<!-- Start spekers Area -->
			<!-- <section class="spekers-area pb-100" id="speakers">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-speaker-carusel col-lg-12 no-padding">
							<div class="single-speaker item">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-6 speaker-img no-padding">
											<img src="img/s1.jpg" alt="">
										</div>
										<div class="col-md-6 speaker-info no-padding">
											<h6 class="text-uppercase">speaker 01</h6>
											<h1 class="text-white">Essie Ballard</h1>
											<p>
												Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances.
											</p>
											<p><span class="lnr lnr-phone-handset"></span>+880 (012) 8954 253</p>
											<p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
											<ul>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-dribbble"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</ul>
										</div>
									</div>
								</div>								
							</div>
							<div class="single-speaker item">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-6 speaker-img no-padding">
											<img src="img/s2.jpg" alt="">
										</div>
										<div class="col-md-6 speaker-info no-padding">
											<h6 class="text-uppercase">speaker 02</h6>
											<h1 class="text-white">Elizabeth Stokes</h1>
											<p>
												Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances.
											</p>
											<p><span class="lnr lnr-phone-handset"></span>+880 (012) 8954 253</p>
											<p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
											<ul>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-dribbble"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</ul>
										</div>
									</div>
								</div>								
							</div>	
							<div class="single-speaker item">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-6 speaker-img no-padding">
											<img src="img/s1.jpg" alt="">
										</div>
										<div class="col-md-6 speaker-info no-padding">
											<h6 class="text-uppercase">speaker 01</h6>
											<h1 class="text-white">Essie Ballard</h1>
											<p>
												Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances.
											</p>
											<p><span class="lnr lnr-phone-handset"></span>+880 (012) 8954 253</p>
											<p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
											<ul>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-dribbble"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</ul>
										</div>
									</div>
								</div>								
							</div>	
							<div class="single-speaker item">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-6 speaker-img no-padding">
											<img src="img/s2.jpg" alt="">
										</div>
										<div class="col-md-6 speaker-info no-padding">
											<h6 class="text-uppercase">speaker 02</h6>
											<h1 class="text-white">Elizabeth Stokes</h1>
											<p>
												Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances.
											</p>
											<p><span class="lnr lnr-phone-handset"></span>+880 (012) 8954 253</p>
											<p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
											<ul>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-dribbble"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</ul>
										</div>
									</div>
								</div>								
							</div>																					
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End spekers Area -->
			
<br><br>
			<!-- Start schedule Area -->
			<section class="schedule-area pb-100" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Event Schedule</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">sl</th>
								      <th class="head" scope="col">session</th>
								      <!-- <th class="head" scope="col">speaker</th> -->
									  <th class="head" scope="col">venue</th>
									  <th class="head" scope="col">date</th>
								      <th class="head" scope="col">time</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th class="name" scope="row">01</th>
								      <td>Hackathon Registration</td>				      
								     				      
									  <td>Reception</td>
									  <td>19 April, 2019</td>				      
								      <td>02:00 PM - 05:00 PM</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">02</th>
								      <td>Hackathon Start</td>				      
								     			      
									  <td>Lecture Theatre 1/2</td>	
									  <td>19 April, 2019</td>			      
								      <td>06:00 PM</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">03</th>
								      <td>Dinner</td>				      
								      			      
									  <td>College Campus Mess</td>	
									  <td>19 April, 2019</td>			      
								      <td>07:30 PM - 9:00 PM</td>						      
									</tr>
									<tr>
										<th class="name" scope="row">04</th>
										<td>Hackathon Project Exposition and Judjing</td>				      
													 
										<td>Academic Area</td>
										<td>20 April, 2019</td>				      
										<td>10:00 AM </td>						      
									  </tr>

									  <tr>
										<th class="name" scope="row">05</th>
										<td>Ideathon Begins</td>				      
													 
										<td>Academic Area</td>	
										<td>20 April, 2019</td>				      
										<td>10:00 AM</td>						      
									  </tr>
								    <tr>
								      <th class="name" scope="row">06</th>
								      <td>Inaugration of R&D Expo</td>				      
								     		      
									  <td>Lecture Theatre 3</td>	
									  <td>20 April, 2019</td>				      
								      <td>10:00 AM - 10:15 AM</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">07</th>
								      <td>Tech Talk 1</td>				      
								      				      
									  <td>Lecture Theatre 3</td>
									  <td>20 April, 2019</td>					      
								      <td>10:15 AM - 11:00 AM</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">08</th>
								      <td>Tech Talk 2</td>				      
								     			      
									  <td>Lecture Theatre 3</td>
									  <td>20 April, 2019</td>					      
								      <td>11:00 AM - 11:30 AM</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">09</th>
								      <td>Prize Distribution</td>				 
								     				      
									  <td>Lecture Theatre 3</td>
									  <td>20 April, 2019</td>					      
								      <td>01:00 PM</td>					      
									</tr>	
									
									<tr>
										<th class="name" scope="row">10</th>
										<td>Lunch Break</td>				 
															 
										<td>College Campus Mess</td>
										<td>20 April, 2019</td>					      
										<td>01:00 PM - 2:00 PM</td>					      
									  </tr>	

									  <tr>
										<th class="name" scope="row">11</th>
										<td>Crash of Trash</td>				 
															 
										<td>Open Cafeteria</td>
										<td>20 April, 2019</td>					      
										<td>06:00 PM</td>					      
									  </tr>	

									  <tr>
										<th class="name" scope="row">12</th>
										<td>Closing Ceremony</td>				 
															 
										<td>Lecture Theatre 3</td>	
										<td>21 April, 2019</td>				      
										<td>10:00 AM</td>					      
									  </tr>	


								  </tbody>
							</table>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End schedule Area -->		

			<!-- Start price Area -->
			<!-- <section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">How Our Customers Treat Us</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>																		
					</div>
				</div>	
			</section> -->
			<!-- End price Area -->
					
			<!-- Start brand Area -->
			<section class="brand-area section-gap" style="background:#f7f7f7">
				<div class="container">
						<div class="title text-center">
								<h1 class="mb-10">Our Sponsors</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div><br><br>
					<div class="row logo-wrap">
						<a class="col single-img" href="https://www.nescafe.com/in/">
							<img class="d-block mx-auto" src="img/nescafe.png" alt="" height="70px;">
						</a>
						<a class="col single-img" href="http://www.cetpainfotech.com/">
							<img class="d-block mx-auto" src="img/cetpa.png" alt="" height="70px;">
						</a>
						<a class="col single-img" href="https://www.ucobank.com/english/home.aspx">
							<img class="d-block mx-auto" src="img/uco.png" alt="" height="70px;">
						</a>
						<a class="col single-img" href="https://www.pnbindia.in/">
							<img class="d-block mx-auto" src="img/pnb.png" alt="" height="70px;">
						</a>
						<a class="col single-img" href="https://www.titan.co.in/">
							<img class="d-block mx-auto" src="img/titan.png" alt="" height="70px;">
						</a>
					</div>	
				</div>	
			</section>
			<!-- End brand Area -->	
							
				
			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Have Queries?</h1>
							<p>Got a query? Please ask us below. We'd be more than happy to help you out.

								</p>
							<form style="opacity:0.8;">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
                           <div class="form-group">
							   <input type="text" class="form-control" placeholder="What's your Name?" name="name">
						   </div>
						   <div class="form-group">
								<input type="email" class="form-control" placeholder="What's your Email Address?" name="email">
							</div>
							<div class="form-group">
									<textarea rows="5" class="form-control" placeholder="Type Your query" name="query"></textarea>
								</div>

							<input type="submit" class="callaction-btn" value="Submit">	


						</div>
					
					<div class="col-md-3"></div>
					</div></form>
													
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->
					

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<img src="img/ieee.png" height="30px;"><br><br>
								
								&nbsp; &nbsp; <h6>About Us</h6>
								<p>
										The world’s largest technical professional organization for the advancement of technology.

										As the world’s largest technical professional organization, IEEE offers a number of ways to get involved with technical and local 
										communities. 
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>IEEE JUIT Student Branch. All rights reserved.

								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/ieeejuitsb/"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/ieeejuit/?r=nametag"><i class="fa fa-instagram"></i></a>
									<a href="ieeejuit.co.in"><i class="fa fa-dribbble"></i></a>
									<!-- <a href="#"><i class="fa fa-behance"></i></a> -->
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	






			
			  
		
		
		



		</body>
	</html>



