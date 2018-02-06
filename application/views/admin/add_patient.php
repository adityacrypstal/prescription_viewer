
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
	<h4 class="center-align flow-text">Add Patient</h4><hr><br>
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
