
<h5 class="center-align">Appointments</h5><br>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
 <ul class="collection with-header">
       
        
        <?php foreach($appoints as $appoint):?>
        <li class="collection-item"><div><?=$appoint['Patient']?><a href="#" class="secondary-content"><i class="material-icons">add</i></a></div></li>
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
