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
     
      <li class="active"><a href="home.php">Home</a></li>
      <li  ><a href="pharmacies.php">List Pharmacies</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="appointments.php">Logout</a></li>

      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li class="active"><a href="home.php">Home</a></li>
      <li  ><a href="pharmacies.php">Pharmacies</a></li>
      <li><a href="prrofile.php">Profile</a></li>
      <li><a href="appointments.php">Logout</a></li>
  
      </ul>
    </div>
</nav><br><br>
<div class="row">

    
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">local_pharmacy</i>Paracetamol</div>
      <div class="collapsible-body"><span><p><b>Doctor</b>: Dr Vasudevan</p>
                                             <p><b>Qty</b>: 2.5g</p>
                                            <p><button class="btn waves-effect waves-light">Order</button></p></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">done</i>Z-cold 250</div>
      <div class="collapsible-body"><span><p><b>Doctor</b>: Dr Vasudevan</p>
                                             <p><b>Qty</b>: 2.5g</p>
                                            <p><button class="btn waves-effect waves-light disabled">Order</button></p></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">done</i>Gelusil</div>
      <div class="collapsible-body"><span><p><b>Doctor</b>: Dr Vasudevan</p>
                                             <p><b>Qty</b>: 2.5g</p>
                                            <p><button class="btn waves-effect waves-light disabled">Order</button></p></span> </div>
    </li>
  </ul>


    
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
  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>


</html>
