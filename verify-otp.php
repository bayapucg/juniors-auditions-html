<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Juniors Auditions</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>





<section >
  <div class="container mt-5">
	   <form action="">
		<div class="box-shadow py-4 px-4 "  >
		    <div class="row">
		<div class="col-md-6">
			<h3>Verify OTP</h3>
		</div>	
		<div class="col-md-6">
			<a class="btn btn-primary pull-right" href="index.php">Back to Home</a>
		</div>
	</div>
	<hr style="margin:0">
    <div class="row mt-4 justify-content-center"  >
			<div class="form-group col-md-6">
			  <label >OTP </label>
			  <input type="text" class="form-control"placeholder="Enter Otp">
			</div> 
	<div class="col-md-4 ">
	<label >&nbsp; </label>
	<div>
		<a href="verify-otp.php" class="btn btn-primary">Verify</a>
		</div>
	</div>
		</div>
	  </form>
  </div>
</section>

   
   
  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
  $("#otp-btn").click(function(){
  $("#main-form").hide();
  $("#otp-form").css('display','block');
});


  </script>
</body>

</html>
