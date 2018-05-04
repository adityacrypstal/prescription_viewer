
<div class="col">
<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[7];
     ?>
<div class="col m6 push-m3  s12 ">
<div class="row">
<div class="col m6 push-m3  s12 ">
<div class="row">
  <div class="input-field col s12">
    
    
    <i class="material-icons prefix">search</i>
    <input type="text" id="search" name="id" class="autocomplete" onkeyup="ajaxSearch();">
    

    <label for="search">Search using place</label>
    
  </div>
</div></div></div>
</div>
<div class="col">

<ul class="collection " id="suggestions">
<div class="col m8 push-m3  s1lp2 "  id="autoSuggestionsList">




</div>
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

<script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
<script>
function ajaxSearch()
{
var input_data = $('#search').val();

if (input_data.length === 0)
{
  $('#suggestions').refresh();
  
}
else
{

  var post_data = {
      'id': input_data,
      '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
      };

  $.ajax({
      type: "get",
      url: "<?php echo base_url(); ?>/index.php/Admin/pharmaSearch?",
      async:false,
      data: post_data,
      success: function(response){
       $('#autoSuggestionsList').html("");
        var obj = JSON.parse(response);
        if(obj.length>0){
             try{
              var items=[];   
              var item2=[];
              var item21=[];
              var item22=[];
              var item3=[];
              var item4=[];
              $.each(obj, function(i,val){                                                                                    
                  items.push($('<li class="collection-item avatar" id="kilo">').text(val.name + " " + val.area));
                  item21.push($('<p>').text(val.area ));
                  item22.push($('<p>').text(val.district + " " + val.contact));
                  item2.push($('<p>').text(val.state + " " + val.pin));
                  item3.push($('<span class="title"><b>').text(val.name));
                  item4.push($('<a href="<?php echo base_url(); ?>index.php/Patient/Order/<?php echo $page;?>/'+val.Id+'" class="secondary-content">').html('<i class="material-icons">grade</i>'));                   
                   });     
              $('#kilo').append.apply($('#kilo'), item3);
              $('#autoSuggestionsList').append.apply($('#autoSuggestionsList'), items);
              $("#kilo").append('<img src="<?=base_url('assets/img/placeholder.png')?>" alt="" class="circle">');
             
              $("#kilo").append.apply($('#kilo'), item4);
              $('#kilo').append.apply($('#kilo'), item2);
              $('#kilo').append.apply($('#kilo'), item21);
              $('#kilo').append.apply($('#kilo'), item22);
             
              
             
              }catch(e) {  
              alert('Exception while request..');
               }  
        }else{
               $('#autoSuggestionsList').html($('<li/>').text("No Data Found"));  
         }  

         },
          error: function(){      
               alert('Error while request..');
          }
        });
}



}

</script>


</html>

  