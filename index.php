<html><body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    var myVar = setInterval(myTimer, 3000);
var dato=0;
function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
 dato=$( "#result" ).load( "dato.txt" );
  
 var dd=Math.random();
 //var xx = (new Date()).getTime();
 // $('#resultado').html('<img src="https://ticketserver-xmaop.c9users.io/imagen.php?v="' + dd +'>');
  document.getElementById("resultado").innerHTML = '<img src="https://ticketserver-xmaop.c9users.io/imagen.php?v=' + dd + '">';

}

</script>
<p id="demo"></p>
<div id="result"></div><div id="resultado"></div>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Inicio';

?>
</body>
</html>