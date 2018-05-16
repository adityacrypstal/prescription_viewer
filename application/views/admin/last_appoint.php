<?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri_segments = explode('/', $uri_path);
      $patient=$uri_segments[7];
      $doctor=$uri_segments[8];
      $slotted=$uri_segments[9];
      // $patient= $uri_segments[8];
    // $doctor=$uri_segments[9];
     ?>
 <div class="row"> 
 <p class="center-align flow-text ">Doctor Available <b><?=$slotted?></b></p>
  
    <div class="input-field col s2 offset-s5">
      
    
      <i class="material-icons prefix">event</i>
      <input type="date" id="search" name="id" class="autocomplete" >
      <button class="btn waves-effect waves-light" onclick="ajaxSearch()">Check</button>
      

      
      
    </div>
  </div>

<div class="row">

   
    <!-- <input type="button" value="Click Here" id="ajaxButton"/> -->
    <div class="container" style="font-size:40px;">
        <form action="<?=base_url('index.php/Admin/submitAppoint')?>" method="get" id="timeConfirm">
        <div id="wrapper" style="height:20px;" class="col s6 offset-s3"></div><br><br><br><br>
        <div class="row"> <button class="btn waves-effect waves-light" type="submit" id="submit">Submit
        <i class="material-icons right">send</i></button></div>
        <input type="text" value="<?=$patient?>" name="Patient" hidden>
        <input type="text" value="<?=$doctor?>" name="Doctor" hidden>
        <input type="date" name="date" id="inp" hidden>
       <br><br>
       
        </form>
       
        
    </div>
        
  </button>
  
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
  <!-- <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script> -->
<!-- <script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script> -->
  <script>
    function popout(url){
      newwindow=window.open(url,'Appoint','height=200','width=150');
      if (window.focus){newwindow.focus()}
      return false;
    }
  </script>
  <script>
  
    // $("#ajaxButton").click(function() {
      function ajaxSearch(){
        var input_data = $('#search').val();
        console.log(input_data);
        var post_data = {
        'date': input_data,
        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        };
        document.getElementById('inp').setAttribute('value',input_data);
        console.log(input_data);
        if (input_data.length === 0)
        {
            $('#wrapper').refresh();
        }
        else
        {
          
        $.ajax({
              type: "get",
              url: "<?php echo base_url(); ?>/index.php/Admin/trying?",
              async:false,
              data: post_data,
              success: function(data) {
                    var obj = JSON.parse(data);      
                    var result = [];
                   try{
                    $.each(obj, function() {
                      result.push(this.Time);
                    });
                   
                    var times=['08:00:00.0000','08:15:00.0000','08:30:00.0000','08:45:00.0000','09:00:00.0000',
                    '09:15:00.0000','09:30:00.0000','09:45:00.0000','10:00:00.0000','10:15:00.0000',
                    '10:30:00.0000','10:45:00.0000','11:00:00.0000','11:15:00.0000','11:30:00.0000','11:45:00.0000',
                    '12:00:00.0000','12:15:00.0000','12:30:00.0000','12:45:00.00000','13:00:00.0000','13:15:00.0000',
                    '13:30:00.0000','13:45:00.0000','14:00:00.0000','14:15:00.0000','14:30:00.0000','14:45:00.0000',
                    '15:00:00.0000','15:15:00.0000','15:30:00.0000','15:45:00.0000','16:00:00.0000','16:15:00.0000','16:30:00.0000','16:45:00.0000',
                    '17:00:00.0000','17:15:00.0000','17:30:00.0000','17:45:00.0000','18:00:00.0000','18:15:00.0000','18:30:00.0000','18:45:00.0000',
                    '19:00:00.0000','19:15:00.0000','19:30:00.0000','19:45:00.0000','20:00:00.0000','20:15:00.0000','20:30:00.0000','20:45:00.0000',
                    '21:00:00.0000','21:15:00.0000','21:30:00.0000','21:45:00.0000','21:00:00.0000','21:15:00.0000','21:30:00.0000','21:45:00.0000',
                    '22:00:00.0000','22:15:00.0000','22:30:00.0000','22:45:00.0000','23:00:00.0000','23:15:00.0000','23:30:00.0000','23:45:00.0000'];
                    result.forEach(function(element1) {
                      times.forEach(function(element2) {
                            if(element2==element1){
                            var index=times.indexOf(element2);
                              if(index > -1){
                                times.splice(index,1);
                              }
                              
                            }
                          });
                      
                      });
                      console.log(times);
                      
                      var wrapper = document.getElementById('wrapper');

                      var elementsToInsert = [];

// Creation of the input with radio type and the labels
                      for(var i = 0; i < times.length; i++) {
                      var radio = document.createElement('input');
                      var label = document.createElement('label');
                      
                      radio.type = 'radio';
                      
                      radio.name = 'Time';
                      radio.id=times[i];
                       radio.value = times[i];

                       label.setAttribute("for", times[i]);
                       label.innerHTML = times[i].slice(0,5);
                        var linebreak = document.createElement('br');
                       elementsToInsert.push({linebreak:linebreak, label: label, radio: radio});
                    }

// Insert the labels and input in a random order
                    while(elementsToInsert.length !== 0) {
                  // var randomIndex = Math.floor(Math.random() * elementsToInsert.length);
                      // console.log(randomIndex);
  // Array.prototype.splice removes items from the Array and return the an array containing the removed items (See https://www.w3schools.com/jsref/jsref_splice.asp)
                        var toInsert = elementsToInsert.splice(elementsToInsert, 1)[0];
                        
                      
                        wrapper.appendChild(toInsert.radio);
                        wrapper.appendChild(toInsert.label);   wrapper.appendChild(toInsert.linebreak);
                        
                      }

                  }catch(e) {  
                    alert('Exception while request..');
                   }
              }
        }); 
        }
      }
 



</script>
<script>
// Show sideNav
   $(".button-collapse").sideNav();
 $(document).ready(function() {
    Materialize.updateTextFields();
  });
	$(document).ready(function() {
    $('select').material_select();
  });
	$('select').material_select('destroy')
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  </script>
<script>
  $(document).ready(function() {
    Materialize.updateTextFields();
	});</script>
	<script>$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>
<script>
 $("#submit").click(function() {
  $("#timeConfirm").submit();
 });
 </script>

</html>
