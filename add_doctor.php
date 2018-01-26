<!DOCTYPE html>
<html>
<head>
	<title>Prescription Viewer</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<nav class="nav-extended wavaes light-blue">
    <div class="nav-wrapper container">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li  class="active" ><a href="add_doctor.php" >Add Doctor</a></li>
      <li><a href="list_doctor.php">List Doctor's</a></li>
      <li  ><a href="add_patient.php">Add Patient</a></li>
      <li><a href="list_patient.php">List Patient</a></li>
      <li><a href="appointments.php">Appointments</a></li>
    
       <li><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="#">Logout</a></li> 
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li  class="active"><a href="add_doctor.php" >Add Doctor</a></li>
      <li><a href="list_doctor.php">List Doctor's</a></li>
      <li  ><a href="add_patient.php">Add Patient</a></li>
      <li ><a href="list_patient.php">List Patient</a></li>
      <li><a href="appointments.php">Appointments</a></li>
    
  <li><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="#">Logout</a></li>
      </ul>
    </div>
</nav><br><br>
<div class="row">

    
	<div class="col m6 push-m2  s12 ">
	<h4 class="center-align flow-text">Add Doctor</h4><hr><br>
			<form class="col m12 s12" action="" method="post">
				<div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="username" required>
						<label class="active" for="first_name2">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12 s12">
						<input id="regnum" type="text" class="validate" name="regnum" required>
						<label for="register number">Register Number</label>
					</div>
				</div>
      <div class="row">
        <div class="input-field col m12 s12">
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m12 s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>

	   <button class="btn waves-effect  purple darken-4" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  </div>


    
</body>
<!--<div class="footer-copyright">
            <div class="container">
            © 2017 Copyright CRYPSTAL
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
</div>-->
<script>
// Show sideNav
   $(".button-collapse").sideNav();
 $(document).ready(function() {
    Materialize.updateTextFields();
  });

  </script>


</html>
