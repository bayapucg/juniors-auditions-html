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
			<h3>Register</h3>
		</div>	
		<div class="col-md-6">
			<a class="btn btn-primary pull-right" href="index.php">Back to Home</a>
		</div>
	</div>
	<hr style="margin:0">
    <div class="row mt-4"  >
    <div class="form-group col-md-6">
      <label >Junior's Name </label>
      <input type="text" class="form-control"placeholder="Enter Junior's Name">
    </div>  
	<div class="form-group col-md-3">
      <label >Father  Name </label>
      <input type="text" class="form-control"placeholder="Enter Father Name">
    </div>  
	<div class="form-group col-md-3">
      <label >Mother  Name </label>
      <input type="text" class="form-control"placeholder="Enter Mother Name">
    </div>  
		<div class="form-group col-md-6">
      <label>Date of Birth:</label>
      <input type="date" class="form-control"   >
    </div>
		<div class="form-group col-md-6">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

	<div class="form-group col-md-6">
      <label >Mobile </label>
      <input type="text" class="form-control"placeholder="Enter Mobile no">
    </div> 
	<div class="form-group col-md-6">
      <label >Alternative  Mobile </label>
      <input type="text" class="form-control"placeholder="Enter Alternative  Mobile">
    </div> 	
	<div class="form-group col-md-6">
      <label >Pincode</label>
      <input type="text" class="form-control" placeholder="Pincode">
    </div> 
	<div class="form-group col-md-6">
      <label >State</label>
      <input type="text" class="form-control" placeholder="State">
    </div> 
	<div class="form-group col-md-6">
      <label >District</label>
      <input type="text" class="form-control" placeholder="District">
    </div>
	<div class="form-group col-md-6">
      <label >City</label>
      <input type="text" class="form-control" placeholder="City">
    </div> 

	<div class="form-group col-md-6">
      <label>Gender</label>
     <div >
     <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Female
  </label>
</div>
</div>
    </div>
	<div class="form-group col-md-6">
      <label>Upload a solo photograph (Full Length)</label>
      <input type="file" class="form-control" id="email" >
    </div>
	<div class="form-group col-md-6">
      <label>Upload a solo photograph (Closeup)</label>
      <input type="file" class="form-control" id="email" >
    </div>
	
	</div>
	<div class="row" id="otp-form" style="display:none;">
	<div class="form-group col-md-12">
      <label >Otp </label>
      <input type="text" class="form-control"placeholder="Enter Otp">
    </div> 
	</div>
	<div class="col-md-12">
		<a href="verify-otp.php" class="btn btn-primary">Get Otp</a>
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
