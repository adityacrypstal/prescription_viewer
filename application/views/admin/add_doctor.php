
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
	<h4 class="center-align flow-text">Add Doctor</h4><hr><br>
			<form class="col m12 s12" action="<?=base_url('index.php/Admin/add_doctor')?>" method="post">
				<div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2">First Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="lname" required>
						<label class="active" for="first_name2">Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12 s12">
				
          <textarea id="icon_prefix2" class="materialize-textarea" name="address"></textarea>
          <label for="icon_prefix2">Address</label>
					</div>
				</div>
				<p>
				<input name= "sex" type="radio" id="male" value="male" />
				<label for="male">Male</label>
			</p>
			<p>
				<input name="sex" type="radio" id="female" value="female" />
				<label for="female">Female</label>
			</p>
			<br>
      <div class="row">
        <div class="input-field col m12 s12">
          <input id="contact" type="number" class="validate" name="contact" required>
          <label for="contact">Contact</label>
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
						<input value="" id="first_name" type="text" class="validate" name="username" required>
						<label class="active" for="first_name2">Username</label>
					</div>
				</div>
      <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="password" class="validate" name="password" required>
						<label class="active" for="first_name2">Password</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="qualification" required>
						<label class="active" for="first_name2">Qualification</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="specialization" required>
						<label class="active" for="first_name2">Specialization</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
          <input type="text" class="timepicker validate" id="first_name" name="s_from"required>
						<label class="active" for="first_name2">Shift From</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
          <input type="text" class="timepicker validate"  id="first_name" name="s_to"required>
						<label class="active" for="first_name2">Shift To</label>
					</div>
				</div>
        
        
	   <button class="btn waves-effect  purple darken-4" type="submit" action="submit">Submit
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
<script>
  $(document).ready(function() {
    Materialize.updateTextFields();
	});</script>
	<script>$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>

</html>
