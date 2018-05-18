
<div class="row" >
<?php foreach($app_det as $app):?>
        <div class="col s12 m3"  id="profile">
          <div class="card" >
            <div class="card-image">
              <img src="<?=base_url('assets/placeholder.png')?>">
              <span class="card-title"><?=$app['fname']?></span>
            </div>
            <div class="card-content">
              <p><b>Address:</b><?=$app['address']?></p>
              <p><b>Age:</b><?=$app['age']?></p>
              <p><b>Contact:</b><?=$app['contact']?></p>
              <p><b>Email:</b><?=$app['email']?></p>
              <p><b>Age:</b><?=$app['age']?></p>
              <p><b>Blood Group:</b><?=$app['blood']?></p>
            </div>
            <div class="card-action">
              <a href="#">Edit Profile</a>
            </div>
          </div>
        </div>
        <div class="hide-on-large-only"><hr><p class="center-align" style="padding-top:10px;">Prescribe here</p></div>
        <?php $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);?>
        <div class="col s12 m5 " id="hide">
           <form action="<?=base_url('index.php/Doctor/prescribe')?>" method="post">
           <textarea name="Medicine" id="Medicine" cols="10" rows="40" required></textarea>
           <input type="time" name="Time" value="20" hidden>
           <input type="text" name="Dosage" placeholder="Dosage in Days">
           <input type="text" name="Volume" placeholder="Quantity">
           <input type="text" name="Patient" value="<?=$app['Id']?>" hidden>
         
           <input type="text" name="Time" value="<?=date('m/d/Y').date('H:i');?>" hidden>
           <input type="text" name="Doctor" value="<?=$_SESSION['username']?>" hidden>
           
          
           <button class="btn waves-effect  purple darken-3" type="submit" action="submit" name="submit" value="submit">Submit
             <i class="material-icons right">send</i>
            </button>
            <button class="btn waves-effect  purple darken-3" type="submit" action="submit" name="action" value="action">Add another
             <i class="material-icons right">send</i>
            </button>
           </form>
        </div>
        <div class="col s12 m4 " id="hide">
        <div class="hide-on-large-only"><hr><p class="center-align" style="padding-top:10px;">History</p></div>
            <ul class="collapsible" data-collapsible="accordion" >
           <?php foreach($history as $medicine):?>
           <li>
                <div class="collapsible-header">
                <i class="material-icons">account_circle</i>
                <?=$medicine['Medicine']?>
                <span class=" badge"><?=date('m/d/Y h:i:s',strtotime($medicine['Time']))?></span></div>
                <div class="collapsible-body">
                <p style="text-transform:uppercase;"><b>Doctor :- </b><?=$medicine['Doctor']?></p>
                <p style="text-transform:uppercase;"><b>Dosage :- </b><?=$medicine['Dosage']?>Days</p>
                <p style="text-transform:uppercase;"><b>Quatity :- </b><?=$medicine['Volume']?></p></div>
            </li>
            <?php endforeach;?>
         

            </ul>
        </div>
      </div>
    </div>
      
            
</div>



<div class="fixed-action-btn toolbar ">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="tel:<?=$app['contact']?>"><i class="material-icons">call</i></a></li>
      <li class="waves-effect waves-light"><a href="sms:<?=$app['contact']?>"><i class="material-icons">sms</i></a></li>
      <li class="waves-effect waves-light active"><a href="mailto:<?=$app['email']?>"><i class="material-icons ">email</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>   
<?php endforeach;?>
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
    $('ul.tabs').tabs();
  });
  
  </script>


</html>
