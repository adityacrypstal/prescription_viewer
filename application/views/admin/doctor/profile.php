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
<nav class="nav-extended wavaes light-blue ">
    <div class="nav-wrapper container">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
     
      <li><a href="home.php">Home</a></li>
      <li ><a href="pharmacies.php">List Pharmacies</a></li>
      <li class="active"><a href="list_patient.php">Profile</a></li>
      <li><a href="appointments.php">Logout</a></li>

      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li><a href="home.php">Home</a></li>
      <li  ><a href="pharmacies.php">Pharmacies</a></li>
      <li class="active"><a href="list_patient.php">Profile</a></li>
      <li><a href="#">Logout</a></li>
  
      </ul>
    </div>
</nav><br><br>
<div class="row">
<div class="col s12 m4 offset-m4"  >
<div class="card" >
  <div class="card-image">
    <img src="../placeholder.png">
    <span class="card-title">Aditya V</span>
  </div>
  <div class="card-content">
    <p><b>Address:</b></p>
    <p><b>Age:</b></p>
    <p><b>Contact:</b></p>
    <p><b>Email:</b></p>
    <p><b>Blood Group:</b></p>
  </div>
  <div class="card-action">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Profile</a>
  </div>
</div>
</div>
</div>


  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
     
    <form class="col m12 s12" action="" method="post">
				<div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2"> First Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Last Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Age</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Address</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Contact</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
          <p>
            <input name="group1" type="radio" id="test1" />
             <label for="test1">Male</label>
          </p>
					<p>
            <input name="group1" type="radio" id="test1" />
             <label for="test1">Female</label>
          </p>
					
		</div>
		</div>
		<div class="row">
			<div class="input-field col m12 s12">
				<input value="" id="first_name" type="text" class="validate" name="username" required>
				<label class="active" for="first_name2">Blood group</label>
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

	  
</form> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
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
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script>


</html>
