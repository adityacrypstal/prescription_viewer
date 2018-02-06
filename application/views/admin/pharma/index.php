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
    
      <li><a href="profile.php">Profile</a></li>
      <li><a href="appointments.php">Logout</a></li>

      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li class="active"><a href="home.php">Home</a></li>
   
      <li><a href="prrofile.php">Profile</a></li>
      <li><a href="appointments.php">Logout</a></li>
  
      </ul>
    </div>
</nav><br><br>
<div class="row container">

    
<table>
        <thead>
            <tr>
              <th>Id</th>
              <th>Patient</th>
              <th>Doctor</th>
              <th>Date</th>
              <th></th>
              <th></th>
          </tr>

        </thead>

        <tbody>
          
            <tr>
              <td>0043</td>
              <td>Aditya</td>
              <td>Samuel</td>
              <td>31-1-18</td>
              <td>
                      <a class="btn btn-floating btn-small cyan pulse" href="#" target="_blank"><i class="material-icons">edit</i></a>

              </td>
              <form action="#"  method="post">
              <td><button class="btn btn-floating btn-small cyan pulse"  name="qstnId" value=""><i class="material-icons">close</i></a></td>
              </form>
            </tr>
           
        </tbody>
      </table>


    
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
