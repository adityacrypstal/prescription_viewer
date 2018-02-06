
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

        <tbody>
          
            <tr>
              <td>0043</td>
              <td>Aditya</td>
              <td>Samuel</td>
              <td>31-1-18</td>
              <td>
                      <a class="btn btn-floating btn-small cyan pulse" href="#" target="_blank"><i class="material-icons">edit</i></a>

              </td>
              <form action="#"  method="post">
              <td><button class="btn btn-floating btn-small cyan pulse"  name="qstnId" value=""><i class="material-icons">close</i></a></td>
              </form>
            </tr>
           
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
