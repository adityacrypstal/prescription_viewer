
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
	<h4 class="center-align flow-text">Add Patient</h4><hr><br>
			<form class="col m12 s12" action="<?=base_url('index.php/Admin/add_patient')?>" method="post">
				<div class="row">
					<div class="input-field col m12 s12">
						<input id="first_name" type="text" class="validate" name="fname" required>
						<label class="active" for="first_name2"> First Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="last_name" type="text" class="validate" name="lname" required>
						<label class="active" for="last_name">Last Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="age" type="text" class="validate" name="age" required>
						<label class="active" for="age">Age</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="address" type="text" class="validate" name="address" required>
						<label class="active" for="address">Address</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input  id="contact" type="number" class="validate" name="contact" required>
						<label class="active" for="contact">Contact</label>
					</div>
				</div>
     
					
				<p>
					<input name= "sex" type="radio" id="male"  />
					<label for="male">Male</label>
				</p>
				<p>
					<input name="sex" type="radio" id="female" />
					<label for="female">Female</label>
				</p>
				<br>	
					
				<div class="row">
					<div class="input-field col m12 s12">
					<select name="blood">
							<option value="" disabled selected>Choose your option</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
						<label>Blood Group</label>
					</div>

				</div>
			
      <div class="row">
        <div class="input-field col m12 s12">
          <input id="username" type="text" class="validate" name="username" required>
          <label for="password">Username</label>
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

	   <button class="btn waves-effect  purple darken-4" type="submit" value="submit">Submit
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
	$(document).ready(function() {
    $('select').material_select();
  });
	$('select').material_select('destroy')
  </script>
<script>
  $(document).ready(function() {
    Materialize.updateTextFields();
	});</script>
	<script>$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>

</html>
