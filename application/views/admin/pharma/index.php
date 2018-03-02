
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
              <td>      <a  class="modal-trigger" href="#modal1"><?=$list['Patient']?></a></td>
              <td><?=$list['Doctor']?></td>
              <td><?=$list['Time']?></td>
              <td>
                      <a class="btn btn-floating btn-small cyan pulse" href="#" target="_blank"><i class="material-icons">edit</i></a>
                      <a class="btn btn-floating btn-small cyan pulse" href="<?=base_url('index.php/Pharma/not_available/'.$list['Id'].'')?>" ><i class="material-icons">mail</i></a>

              </td>
              <form action="<?=base_url('index.php/Pharma/Remove_med/')?>"  method="post">
              <td><button class="btn btn-floating btn-small cyan pulse"  name="med_id" value="<?=$list['Id'];?>"><i class="material-icons">close</i></a></td>
              </form>
            </tr>
            
            <div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4><?=$list['Patient']?></h4><hr>
    <h5>Medicine</h5>
    <p><?=$list['Medicine']?></p>
    <p><?=$list['Dosage']?></p>
    <p><?=$list['Volume']?></p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Not Available</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Shipped</a>
  </div>
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
  </script>


</html>
