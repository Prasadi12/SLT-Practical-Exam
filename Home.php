<!DOCTYPE html>
<html>
<head>
	<title>Smart-Banks</title>

	<!-- Bootsrap -->
	 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Bootsrap end-->

    <!-- Fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fa fa icon end-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&display=swap" rel="stylesheet">

    <!-- Theme classes -->
    <style type="text/css">
   		.font-1{font-family: 'Gowun Batang', serif; font-weight: 1000; font-size: 17pt;}
   	</style>
    <!-- Theme classes end-->
</head>
    
<body>
	<!-- nav_bar -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F06292;">
		<div class="container-fluid">
    		<a class="navbar-brand" href="#">
      			<img src="Img/logo.jpg" alt="" width="250" height="80">
    		</a>
  		</div>
  		<div class="container-fluid">
    		<div class="collapse navbar-collapse font-1" id="navbarNav">
      			<ul class="navbar-nav">
        			<li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="#">Home</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="Registration.php">Register</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="login.php">Login</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="#contact_us">Contact us</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="#about_us">About us</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>
	<!-- nav_bar end -->

	<!-- Slideshow -->
	<style type="text/css">
		.slider-div{height:450px; background-repeat:no-repeat; background-size:cover; background-position:center;}
	</style>
	<div id="carouselExampleControls" class="carousel slide carousel-fade " data-bs-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
    			<div class="container-fluid slider-div ps-0 pe-0">
      				<img src="Img/sh1.jpg" class="d-block w-100 pic-1" alt="...">
    			</div>
    		</div>
    		<div class="carousel-item">
    			<div class="container-fluid slider-div ps-0 pe-0">
      				<img src="Img/sh3.jpg" class="d-block w-100" alt="...">
    			</div>
    		</div>
    		<div class="carousel-item">
    			<div class="container-fluid slider-div ps-0 pe-0">
      				<img src="Img/sh5.jpg" class="d-block w-100" alt="...">
    			</div>
    		</div>
   		</div>
  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Previous</span>
  		</button>
  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="visually-hidden">Next</span>
  		</button>
	</div>
	<!-- Slideshow end -->

	<!-- Area1 -->
			<style type="text/css">
  				.title-1{font-family: 'Teko', sans-serif; font-size:42pt;}
  				.hr-1{width:120px;}
			</style>
			<div class="container my-5 border">
  				<div class="container-fluid">
  					<center>
    					<h1 class="title-1 mb-0 text-success"> <a id="about_us">ABOUT US</a> </h1>
    					<hr class="mt-0 hr-1">
  					</center>
  				</div>

  				<div class="container-fluid p-0">
    				<div class="row m-0">
      	<!-- Left area -->
      					<div class="col" style="text-align: justify;">
        					<ul>
        						<li>
          							<b>SmartBank</b> is the best application since 2005 in Sri Lanka. People prefer to have multiple bank accounts to help them better manage their finances. In day-to-day life, it is difficult to remember each and every bank account details when you need. We provide a solution for that. You can create an account and add your account details. Then you can visit here and view those details. We always try to give best service for the customers. Come & Enjoy your life with us. Thank you.
          						</li>
       						</ul>
     					</div>
		<!-- Left end-->
		<!-- Right area-->
						<div class="col text-danger">
        					<p>
          						CREATE AN ACCOUNT FROM HERE...!!
        					</p>
        					<a href="Registration.php" class="btn btn-outline-info px-4 mx-5">Registration</a>
      					</div>
		<!-- Right end-->
					</div>
  				</div>

			</div>
	<!-- Area1 end-->

	<!-- footer -->
	<div class="container-fluid" style="background-color: #F06292;">
		<div class="container text-dark">
			<div class="row">
				<div class="border-bottom text-center">
					<h1 class="font-1"><a id="contact_us">Contact Us</a></h1>
					<p>Main street, <br> Kandy Road,MA 01803, <br> Kurunegala.</p>
					<i class="fa fa-phone"></i> <font>077 768 5055</font><br><br>
          			<p><i>FOR INQUIRIES CONTACT:</i></p>
          			<P class="text-warning" href="#">INFO@THE-SMARTBANKS.COM</P>
				</div>
				<div class="border-bottom text-center">
					<h1 class="font-1">Find Us</h1>
					<a href=""><img src="Img/fb.png"></a>
					<a href=""><img src="Img/insta.png"></a>
					<a href=""><img src="Img/lin.png"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark text-center text-white py-1">
		<p>©2021 Copy & Right</p>
	</div>
	<!-- Footer end-->
	
</body>
</head>
</html>
