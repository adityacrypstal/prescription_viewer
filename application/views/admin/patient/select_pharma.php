
<div class="col">
<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[7];
     ?>
<ul class="collection ">
<?php foreach($pharmas as $pharma):?>
<li class="collection-item avatar">
  <img src="<?=base_url('assets/img/placeholder.png')?>" alt="" class="circle">
  <span class="title"><?=$pharma['name']?></span>
  <p><?=$pharma['area']?> <br>
  
  </p>
  <a class="secondary-content" href="<?=base_url('index.php/Patient/Order/'.$page.'/'.$pharma['Id'].'')?>"><button class="btn waves-effect waves-light"><i class="material-icons">send</i></button></a>
</li>
<?php endforeach;?>
  </ul>

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
  