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
      <li ><a href="add_doctor.php" >Add Doctor</a></li>
        <li><a href="list_doctor.php">List Doctor's</a></li>
        <li  ><a href="add_patient.php">Add Patient</a></li>
		    <li><a href="list_patient.php">List Patient</a></li>
        <li class="active"><a href="appointments.php">Appointments</a></li>
      <li><a href="pharmacies.php">Pharmacies</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li ><a href="add_doctor.php" >Add Doctor</a></li>
      <li><a href="list_doctor.php">List Doctor's</a></li>
      <li  ><a href="add_patient.php">Add Patient</a></li>
      <li ><a href="list_patient.php">List Patient</a></li>
      <li class="active"><a href="appointments.php">Appointments</a></li>
    
      <li><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="#">Logout</a></li>
      </ul>
    </div>
</nav><br><br>
<h5 class="center-align">Appointments</h5><br>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
 <ul class="collection with-header">
       
        <li class="collection-item"><div>Alvin<a href="appoint.php" class="secondary-content"><i class="material-icons">add</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="appoint.php" class="secondary-content"><i class="material-icons">add</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="appoint.php" class="secondary-content"><i class="material-icons">add</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="appoint.php" class="secondary-content"><i class="material-icons">add</i></a></div></li>
      </ul>
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
