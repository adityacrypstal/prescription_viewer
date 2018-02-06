
<div class="row">
<div class="col s12 m4 offset-m4"  >
<div class="card" >
  <div class="card-image">
    <img src="<?=base_url('assets/placeholder.png  ')?> ">
    <span class="card-title">Traders Name</span>
  </div>
  <div class="card-content">
    <p><b>Address:</b></p>
    <p><b>Reg No:</b></p>
    <p><b>Contact:</b></p>
    <p><b>Email:</b></p>
    <p><b>Area:</b></p>
  </div>
  <div class="card-action">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Profile</a>
  </div>
</div>
</div>
</div>


  <!-- Modal Structure -->
   <!-- Modal Structure -->
   <div id="modal1" class="modal modal-fixed-footer">
   <div class="modal-content">
    
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

     
</form> 
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
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
