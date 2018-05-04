
<div class="row">

    
<ul class="collapsible popout" data-collapsible="accordion">
    <?php foreach($presc as $prescription):?>
    <li>
      <div class="collapsible-header"><i class="material-icons">local_pharmacy</i><?=$prescription['Medicine']?></div>
      <div class="collapsible-body"><span><p ><b>Doctor</b>: <span style="text-transform:uppercase"><?=$prescription['Doctor']?></span></p>
                                             <p><b>Dosage</b>: <?=$prescription['Dosage']?></p>
                                             <p><b>Qty</b>: <?=$prescription['Volume']?></p>
                                            <p><a href="<?=base_url('index.php/Patient/Select/'.$prescription['Id'])?>"><button class="btn waves-effect waves-light" <?=($prescription['Pharma']== Null ? "" : "disabled")?> >Order</button></a></p></span></div>
    </li>
    <?php endforeach;?>
  
  </ul>


    
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
  
  <script>
$(document).ready(function(){
  $('.dropdown-trigger').dropdown();
});
</script>

</html>
