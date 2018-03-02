<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[7];
     ?>
<h5 class="center-align">Select Doctor</h5><br><p class="center-align">Patient Name:<?=$page?></p >
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
 <ul class="collection with-header">
 <?php foreach($doctors as $doctor):?>
        <li class="collection-item"><div><?=$doctor['fname']?><a href="<?=base_url('index.php/Admin/appoint/'.$page.'/'.$doctor['fname'].'')?>" class="secondary-content"><i class="material-icons">add</i></a></div></li>
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
