<!DOCTYPE html>
<html>
<body>

<p>In comment box user will add some input and it is submitting. Here for demonstration purpose we don't processing anything actually!! .</p>

 <textarea id="idconmsg" name="conmsg" cols="20" rows="10" wrap="physical" title="Please type your message"></textarea>
        <br />
<p id="fruitdemo"></p>
<br>
<script id="myScript">

function fruitFunction() {
     var jtext = document.getElementById('idconmsg').value;
	document.getElementById("fruitdemo").innerHTML = "<b>"+jtext+"</b>";
}
</script>

<button onclick="fruitFunction()">Display entered comment in bold font</button> <br>

<p id="contentsdemo"></p>
<script>
function textFunction() {
    var x = document.getElementById("myScript").textContent;
    document.getElementById("contentsdemo").innerHTML = x;
}
function textDisplay() {
document.getElementById('contentsdemo').innerHTML = "<p>" + `function fruitFunction() {
     var jtext = document.getElementById('idconmsg').value;
	document.getElementById("fruitdemo").innerHTML = &lt;b&gt;+jtext+&lt;b&gt;`+"</p>"
}
</script>
<button onclick="textDisplay()">Return script contents</button>
<button onclick="textFunction()"> Display vulnerable contents</button>
</body>
</html>
