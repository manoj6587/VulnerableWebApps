<script type="text/javascript">

var alertTimerId = 0;

function alertTimerClickHandler ( )
{
  if ( document.getElementById("alertTimerButton").value == "Click me and wait!" )
  {
    // Start the timer
    #document.getElementById("alertTimerButton").value = "Click me to stop the timer!";
    alertTimerId = setTimeout ( "showAlert()", 5000 );
  }
  else
  {
    document.getElementById("alertTimerButton").value = "Click me and wait!";
    clearTimeout ( alertTimerId );
  }
}

function showAlert ( )
{
  alert ( "Too late! You didn't stop the timer." );
  document.getElementById("alertTimerButton").value = "Click me and wait!";
}

</script>

<input type="button" name="clickMe" id="alertTimerButton" value="Click me and wait!" onclick="alertTimerClickHandler()"/>
