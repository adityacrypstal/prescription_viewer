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
      <li ><a href="add_patient.php">Add Patient</a></li>
      <li ><a href="list_patient.php">List Patient</a></li>
      <li  class="active"><a href="appointments.php">Appointments</a></li>
    
       <li><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="#">Logout</a></li> 
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li ><a href="add_doctor.php" >Add Doctor</a></li>
      <li><a href="list_doctor.php">List Doctor's</a></li>
      <li ><a href="add_patient.php">Add Patient</a></li>
      <li ><a href="list_patient.php">List Patient</a></li>
      <li  class="active"><a href="appointments.php">Appointments</a></li>
    
  <li><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="#">Logout</a></li>
      </ul>
    </div>
</nav>
<div class="row">
<div class="row ">
        <div class="col s12 m3 ">
          <div class="card">
            <div class="card-image">
              <img src="placeholder.png">
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
              <a href="#">Edit Profile</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 ">
        <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">account_circle</i>
      Dr Alex
      <span class=" badge">MBBS</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">account_circle</i>
      Dr John
      <span class="badge">MD</span></div>
    <div class="collapsible-body"><p><b>Address</b>:Crypstal Technologies </p>
                                  <p><b>Gender</b>:Male</p>
                                  <p><b>Qualification</b>:MBBS</p>
                                  <p><b>Specialixation</b>:MBBS</p>
                                  <p><b>Contact</b>: +95 67682232</p>
                                  <p><b>e-mail</b> :adityavadityav@gmail.com</p> 
                                    </div>
  </li>
</ul>
        </div>
      </div>
      </div>
      
            
</div>



<div class="fixed-action-btn toolbar ">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="tel:+900300400"><i class="material-icons">call</i></a></li>
      <li class="waves-effect waves-light"><a href="sms:+900300400"><i class="material-icons">sms</i></a></li>
      <li class="waves-effect waves-light active"><a href="#!"><i class="material-icons ">email</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
    </ul>
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
