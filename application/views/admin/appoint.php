<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $page= $uri_segments[7];
     ?>

<div class="row">
<div class="col m6 push-m3  s12 ">
  <div class="row">
    <div class="input-field col s12">
      
      
      <i class="material-icons prefix">search</i>
      <input type="text" id="search" name="id" class="autocomplete" onkeyup="ajaxSearch();">
      

      <label for="search">Search using Id</label>
      
    </div>
  </div>
</div>
</div>
<div class="row">


<div class="col m12 push-m1  s1lp2 " id="suggestions">
<!-- <table><tr style="text-align:right;"><th>First Name</th><th>Last Name</th><th>Age</th><th>Blood</th><th>Id</th><th>Contact</th></tr></table> -->
<table id="autoSuggestionsList" style="text-align:right;">


</table>
</div>
</div>


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
        url: "<?php echo base_url(); ?>/index.php/Admin/liveSearch_doctor?",
        async:false,
        data: post_data,
        success: function(response){
         $('#autoSuggestionsList').html("");
          var obj = JSON.parse(response);
          if(obj.length>0){
               try{
                var trHTML = '';
                var trHTML2 = '';
                $.each(obj, function(i,val){  
                  // var time=val.s_from;
                  // time.setMilliseconds(0);        
                  trHTML += '<tr><td>' + val.fname + '</td><td>' + val.lname + '</td>><td>' + val.Id +'</td><td>' + val.specialization+'</td><td>' + val.qualification+'</td><td>' + val.s_from.slice(0,5)+' to'+val.s_to.slice(0,5)+'</td><td><a href="<?=base_url('/index.php/Admin/view/last_appoint/'.$page)?>/'+val.Id+'/'+val.s_from.slice(0,5)+'-'+val.s_to.slice(0,5)+'">'+'SELECT'+'</a></td></tr>';
                   });
                   trHTML2 += '<tr><th>' + 'First Name' + '</th><th>' + 'Second Name' + '</th><th>' + 'Id' +'</th><th>' + 'Specialization'+'</th><th>' + 'Qualification'+'</th><th>' + 'Shift'+'</th><th>'+'ACTION'+'</th></th>';
                   $('#autoSuggestionsList').append(trHTML2);
                $('#autoSuggestionsList').append(trHTML);
                   
               
                
               
                }catch(e) {  
                alert('Exception while request..');
                 }  
          }else{
                 $('#autoSuggestionsList').html($('<th>').text("No Data Found"));  
           }  

           },
            error: function(){      
                 alert('Error while request..');
            }
          });
}



 }

</script>

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
