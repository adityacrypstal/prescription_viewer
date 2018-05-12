
<h5 class="center-align">Appointments</h5><br>
<div class="row">

    
	<div class="col m6 push-m3  s12 ">
 <table>
    <tr><th>Patient</th><th>Doctor</th><th>Time</th><th>Date</th><th>Action</th></tr>  
        
        <?php foreach($appoints as $appoint):?>
        <tr><td><?=$appoint['ptname'].'('.$appoint['pid'].')'?></td><td><?=$appoint['drname'].'('.$appoint['did'].')'?></td><td><?=date('h:i',strtotime($appoint['Time']))?></td><td><?=date('d/m/Y',strtotime($appoint['date']))?></td><td><a href="<?=base_url('/index.php/Admin/remove_appoints/'.$appoint['Id'].'')?>">REMOVE</a></td></tr>

        <?php endforeach;?>

  </table>
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
