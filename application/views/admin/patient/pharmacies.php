
<div class="col">

<ul class="collection ">
<?php foreach($pharmas as $pharma):?>
<li class="collection-item avatar">
  <img src="<?=base_url('assets/img/placeholder.png')?>" alt="" class="circle">
  <span class="title"><?=$pharma['name']?></span>
  <p><?=$pharma['area']?> <br>
  <?=$pharma['district']?><br>
  <?=$pharma['state']?><br>
  <?=$pharma['contact']?>
  </p>
  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
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
