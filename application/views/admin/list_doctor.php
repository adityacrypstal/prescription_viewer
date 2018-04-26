
<div class="row">
    <div class="col m6 push-m3  s12 ">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Search using Id</label>
        </div>
      </div>
    </div>
  </div>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
    <ul class="collapsible" data-collapsible="accordion">
  
  <?php foreach($doctors as $doctor):?>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">account_circle</i>
      <?=$doctor['fname']?>
      <span class="badge"><?='DOC'.$doctor['Id']?></span></div>
    <div class="collapsible-body"><p><b>Address</b>:<?=$doctor['address']?><br>
                                  <b>Gender</b>:<?=$doctor['sex']?><br>
                                  <b>Qualification</b>:<?=$doctor['qualification']?><br>
                                  <b>Specialixation</b>:<?=$doctor['specialization']?><br>
                                  <b>Contact</b>:<?=$doctor['contact']?><br>
                                  <b>e-mail</b> :<?=$doctor['email']?><br>
                                  <b>From</b> :<?=date('h:i',strtotime($doctor['s_from']))?><br>
                                  <b>To</b> :<?=date('h:i',strtotime($doctor['s_to']))?></p> 
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
