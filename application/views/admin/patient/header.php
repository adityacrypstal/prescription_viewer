<!DOCTYPE html>
<html>
<head>
	<title>Prescription Viewer</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[6];
      if($page==NULL){  $page='index';}?>
<nav class="nav-extended wavaes light-blue ">
    <div class="nav-wrapper container">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
     
      <li class="<?php echo ($page == "index" ? "active" : "")?>"><a href="<?=base_url('index.php/Patient/view/index')?>">Home</a></li>
      <li class="<?php echo ($page == "pharmacies" ? "active" :"")?>"><a href="<?=base_url('index.php/Patient/view/pharmacies')?>">Pharmacies</a></li>
      <li><a class="dropdown-button " href="#!"  data-activates="dropdown2">Notification
      <span class="new badge red"><?php echo count($notifications)?></span></a></li>
      <li class="<?php echo ($page == "profile" ? "active" : "")?>"><a href="<?=base_url('index.php/Patient/view/profile')?>">Profile</a></li>
      <li class="<?php echo ($page == "logout" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li>
      
      </ul>
      <ul class="side-nav flow-text" id="mobile-demo">

      <li class="<?php echo ($page == "index" ? "active" : "")?>"><a href="<?=base_url('index.php/Patient/view/index')?>">Home</a></li>
      <li class="<?php echo ($page == "pharmacies" ? "active" : "")?>"><a href="<?=base_url('index.php/Patient/view/pharmacies')?>">Pharmacies</a></li>
       <!-- <li><a class="dropdown-button " href="#!" data-activates="dropdown2">Notification
      <span class="new badge red">4</span></a></li> -->
      <li class="<?php echo ($page == "profile" ? "active" : "")?>"><a href="<?=base_url('index.php/Patient/view/profile')?>">Profile</a></li>
      <li class="<?php echo ($page == "logout" ? "active" : "")?>"><a href="<?=base_url('index.php/Admin/logout')?>">Logout</a></li>
  
      </ul>
    </div>
    
</nav><br><br>

<ul id="dropdown2" class="dropdown-content">
  <?php foreach($notifications as $i=>$notify):?>
    <li><a class="modal-trigger" href="#modal<?=$i?>"><?=$notify['message']?></a></li>
    
   
  <?php endforeach;?>

</ul>
<?php foreach($notifications as $i=>$notify):?>
          <div id="modal<?=$i?>" class="modal modal-fixed-footer">
          <div class="modal-content">
          <h1><?=$notify['message']?></h1> 
          
          </div>
          <div class="modal-footer">
              <a href="<?=base_url('index.php/Patient/remove_notification/'.$notify['Id'])?>" class="modal-close waves-effect waves-green btn-flat">Close</a>
          </div>
          </div>
   
  <?php endforeach;?>



</body>
<!-- <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script> -->
<!-- <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script> -->
<script>
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
(function($) {
   $(function() {

     $('.button-collapse').sideNav();
     $('select').material_select();
     $('.dropdown-button').dropdown();

   }); // end of document ready
 })(jQuery);


 $(document).ready(function(){
     $.ajax({
            
            url: "<?php echo base_url(); ?>/index.php/Patient/liveNotification",
            type: "GET",
            data:{view:view},
            dataType:"json",
            success: function(response){
              ;
             $('#dropdown2').html("");
              var obj = JSON.parse(response);
              
              if(obj.length>0){
                   try{
                    var notif=[];
                
                    $.each(obj, function(i,val){           
                      notif.push($('<li>').text(val.message));
                      console.log(notif);
                    $('#dropdown2').append.apply($('#dropdown2'),notif);
                       
                    });
                    
                   
                    }catch(e) {  
                    alert('Exception while request..');
                     }  
              }
               },
                error: function(){      
                     alert('Error while request..');
                }
              });
 });

  

     


</script>