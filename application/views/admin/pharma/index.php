
<div class="row container">

    
<table>
        <thead>
            <tr>
              <th>Id</th>
              <th>Patient</th>
              <th>Doctor</th>
              <th>Date</th>
              <th></th>
              <th></th>
          </tr>

        </thead>
        

<!-- Modal Structure -->

        <tbody>
          
           <?php foreach($list_medic as $list):?>
      
           <tr>
              <td><?=$list['Id']?></td>
              <td>      <a  class="modal-trigger" href="#modal1"><?=$list['Fname']?></a></td>
              <td><?=$list['Dname']?></td>
              <td><?=date('m/d/Y h:i:s',strtotime($list['Time']))?></td>
              <td>
                      <a class="btn btn-floating btn-small cyan pulse modal-trigger" href="#modal_2" ><i class="material-icons">edit</i></a>
                      

              </td>
              
            </tr>
            
          <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content">
               <h4><?=$list['Patient']?></h4><hr>
               <h5>Medicine</h5>
               <p><?=$list['Medicine']?></p>
               <p>Dosage:<?=$list['Dosage']?></p>
               <p>Volume:<?=$list['Volume']?></p>
            </div>
            
           </div>
           <div id="modal_2" class="modal modal-fixed-footer">
           <form action="<?=base_url('index.php/Pharma/not_available')?>" method="post" id="form_id">
              <div class="modal-content">
                
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                    <label for="textarea1">Enter your message here</label>
                 </div>
                 <input type="text" value="<?=$list['Patient']?>" name="patient_id" hidden> 
                 <input type="text" value="<?=$list['Id']?>" name="id_no" hidden>
                 <select name="current" id="status" class="browser-default" >
                  
                  <option value="not_available">Not Available</option>
                  <option value="available">Available</option>
                  <option value="message">Message</option>
                </select><label>Select status</label>                
            </div>
            <div class="modal-footer">
                 
                  <button onClick="document.getElementById("form_id").submit();" class="modal-action modal-close waves-effect waves-green btn-flat ">SEND</button>
            </div></form>
           </div>
<?php endforeach;?>
        </tbody>
      </table>


    
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
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
  

  // Or with jQuery

  $(document).ready(function() {
    $('select').material_select();
  });
	$('select').material_select('destroy');
  </script>


</html>
