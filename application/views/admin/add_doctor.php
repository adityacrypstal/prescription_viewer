
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
	<h4 class="center-align flow-text">Add Doctor</h4><hr><br>
			<form class="col m12 s12" action="" method="post">
				<div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">First Name</label>
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
				
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Address</label>
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
          <input id="password" type="password" class="validate" name="password" required>
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
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Password</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Qualification</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">Specialization</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
          <input type="text" class="timepicker validate" id="first_name" name=""required>
						<label class="active" for="first_name2">Shift From</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
          <input type="text" class="timepicker validate"  id="first_name" name=""required>
						<label class="active" for="first_name2">Shift To</label>
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
