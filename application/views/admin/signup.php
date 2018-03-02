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
<div class="row">

    
<div class="col m6 push-m3  s12 ">
<h4 class="center-align flow-text">Sign Up (Pharmacies)</h4><hr><br>
        <form class="col m12 s12" action="<?=base_url('index.php/Admin/add_pharma')?>" method="post">
            
            <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="name" required>
                    <label class="active" for="first_name2">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="username" required>
                    <label class="active" for="first_name2">Userame</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="password" required>
                    <label class="active" for="first_name2">Password</label>
                </div>
            </div>
    <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="licence" required>
                    <label class="active" for="first_name2">Licence No</label>
                </div>
            </div>
            <div class="row">
            
           
          
            </div>
  <div class="row">
    <div class="input-field col m12 s12">
      <input id="password" type="number" class="validate" name="contact" required>
      <label for="password">Contact</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col m12 s12">
      <input id="email" type="email" class="validate" name="email" required>
      <label for="email">Email</label>
    </div>
  </div>
  <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="area" required>
                    <label class="active" for="first_name2">Area</label>
                </div>
            </div>
    <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="district" required>
                    <label class="active" for="first_name2">District</label>
                </div>
            </div>
    <div class="row">
                <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="state" required>
                    <label class="active" for="first_name2">State</label>
                </div>
            </div>
    <div class="row">
    <div class="input-field col m12 s12">
                    <input value="" id="first_name" type="text" class="validate" name="pin" required>
                    <label class="active" for="first_name2">PIN</label>
                </div>
            </div>
            
    
    
   <button class="btn waves-effect  purple darken-4" type="submit" action="submit">Submit
<i class="material-icons right">send</i>
</button></div>
</form>
</div>
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
</script>


</html>
