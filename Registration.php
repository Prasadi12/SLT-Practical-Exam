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
    
<body bgcolor="#00d2ff">
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
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_us">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav_bar end -->

    <!-- Form -->
    <style type="text/css">
      body {background-image: linear-gradient(to right, #3a7bd5, #00d2ff)}
    </style>
      
    <section class="vh-50" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 0px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>


                <form class="mx-1 mx-md-4" action="connect.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" id="name" name="name"/>
                      <label class="form-label" for="name">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" class="form-control" id="email" name="email"/>
                      <label class="form-label" for="email">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" class="form-control" id="password" name="password"/>
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" class="form-control" id="cpassword" name="cpassword"/>
                      <label class="form-label" for="cpassword">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg"><a href="Login.php.php" style="text-decoration: none; color: white;">Register</a></button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
    <!-- Form end-->

<!-- footer -->
    <div class="container-fluid" style="background-color: #F06292;">
        <div class="container text-dark">
            <div class="row">
                <div class="border-bottom text-center">
                    <h1 class="font-1"><a id="contact_us">Contact Us</a></h1>
                    <p>Main street, <br> Kandy Road,MA 01803, <br> Kurunegala.</p>
                    <i class="fa fa-phone"></i> <font>077 768 5055</font><br><br>
                    <p><i>FOR INQUIRIES CONTACT:</i></p>
                    <P class="text-warning" href="#">INFO@THE-SMARTBANK.COM</P>
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