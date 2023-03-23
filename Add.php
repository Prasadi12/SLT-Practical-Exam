

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
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Home.php">Logout</a>
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

    <!-- Order -->
    <style type="text/css">
        .divider:after,
        .divider:before {content: ""; flex: 1; height: 1px; background: #eee;}
    </style>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Phone image">
                </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="connect2.php" method="post">
            
            <div class="form-outline mb-1">
                <label class="form-label" for="bname">Bank name</label>
                <input type="text" id="bname" name="bname" required class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-1">
                <label class="form-label" for="branch">Branch</label>
                <input type="text" id="branch" name="branch" required class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-1">
                <label class="form-label" for="bcode">Branch Code</label>
                <input type="text" id="bcode" name="bcode" required class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-1">
                <label class="form-label" for="anumber">Account Number</label>
                <input type="text" id="anumber" name="anumber" required class="form-control form-control-lg" />
            </div>
            
            <!-- Submit button -->
            <center>
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">ADD</button>
            </center>
            <!-- Submit button end-->
        
            </form>
            </div>
            </div>
        </div>
    </section>
    <!-- Order end-->

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