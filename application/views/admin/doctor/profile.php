
<div class="row">
<div class="col s12 m4 offset-m4"  >
<div class="card" >
  <?php foreach($profiles as $profile):?>
  <div class="card-image">
    <img src="<?=base_url('assets/placeholder.png')?>">
    <span class="card-title"><?=$profile['fname'].' '.$profile['lname']?></span>
  </div>
  <div class="card-content">
    <p><b>Address: </b><?=$profile['address']?></p><br>
    <p><b>Age: </b><?=$profile['username']?></p><br>
    <p><b>Contact: </b><?=$profile['contact']?></p><br>
    <p><b>Email: </b><?=$profile['email']?></p><br>
   
    <p><b>Qualification: </b><?=$profile['qualification']?></p><br>
    <p><b>Specialization: </b><?=$profile['specialization']?></p><br>
    <p><b>Shift : </b><?=date('h:i',strtotime($profile['s_from'])).' To '.date('h:i',strtotime($profile['s_to']))?></p>
  </div>
  <div class="card-action">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Profile</a>
  </div>
  <?php endforeach;?>
</div>
</div>
</div>


  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
     
    <form class="col m12 s12" action="<?=base_url('index.php/Doctor/edit_profile_doctor')?>" method="post">
				
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="contact" >
						<label class="active" for="first_name2">Contact</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col m12 s12">
						<input value="" id="first_name" type="text" class="validate" name="specialization" >
						<label class="active" for="first_name2">Specialisation</label>
					</div>
				</div>
        <div class="row">
        <div class="input-field col m12 s12">
        <input type="text" class="timepicker validate" id="first_name" name="s_from">
          <label class="active" for="first_name2">Shift From</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m12 s12">
        <input type="text" class="timepicker validate"  id="first_name" name="s_to">
          <label class="active" for="first_name2">Shift To</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m12 s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
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
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
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
