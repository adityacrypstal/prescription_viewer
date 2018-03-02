
<div class="row">
<div class="col s12 m4 offset-m4"  >
<div class="card" >
  <?php foreach($profiles as $profile):?>
  <div class="card-image ">
    <img src="<?=base_url('assets/placeholder1.png  ')?> ">
    <span class="card-title" style="color:grey;"><?=$profile['name']?></span>
  </div>
  <div class="card-content">
     <p><b>Contact:</b>  <?=$profile['contact']?><br>
    <b>Lic No:</b>  <?=$profile['licence']?><br>
    <b>Email:</b>  <?=$profile['email']?><br><hr>
    <b>Area:</b>  <?=$profile['area']?><br>
    <b>District:</b>  <?=$profile['district']?><br>
    <b>State:</b>  <?=$profile['state']?></p><br>
  </div>
  <div class="card-action">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Profile</a>
  </div>
  <?php endforeach;?>
</div>
</div>
</div>


  <!-- Modal Structure -->
 <!-- Modal Structure -->
 <div id="modal1" class="modal modal-fixed-footer">
 <div class="modal-content">
  
 <form class="col m12 s12" action="<?=base_url('index.php/Pharma/edit_profile')?>" method="post">
     
     <div class="row">
       <div class="input-field col m12 s12">
         <input value="" id="first_name" type="text" class="validate" name="contact" >
         <label class="active" for="first_name2">Contact</label>
       </div>
     </div>
     <div class="row">
       
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
  </script>


</html>
