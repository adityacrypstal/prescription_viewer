
<h5 class="center-align">Select Patient</h5><br>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
 <ul class="collection with-header">
 <?php foreach($patients as $patient):?>
        <li class="collection-item"><div><?=$patient['Id'].'<b> : '.$patient['fname']?></b><a href="<?=base_url('index.php/Admin/view/appoint/'.$patient['fname'].'')?>"  class="secondary-content"><i class="material-icons">add</i></a></div></li>
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
  <script>
    function popout(url){
      newwindow=window.open(url,'Appoint','height=200','width=150');
      if (window.focus){newwindow.focus()}
      return false;
    }
  </script>


</html>
