
<div class="row">
    <div class="col m6 push-m3  s12 ">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Search Patients</label>
        </div>
      </div>
    </div>
  </div>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
    <ul class="collapsible" data-collapsible="accordion">
  
  <?php foreach($patients as $patient):?>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">account_circle</i>
     <?=$patient['fname'].' '.$patient['lname']?>
      <span class="badge"><?=$patient['age']?></span></div>
    <div class="collapsible-body">
          <p><b>Blood </b>:<?=$patient['blood']?><br>
          <b>Sex </b>:<?=$patient['sex']?><br>
          <b>Address </b>:<?=$patient['address']?><br>
          <b>Contact </b>:<?=$patient['contact']?><br>
          <b>Email</b>:<?=$patient['email']?></p>
          
    </div>
  </li>
<?php endforeach;?>
</ul>
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
