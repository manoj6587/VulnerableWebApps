<!DOCTYPE html>
<html>
<body>

<p>Click the button to create a VIDEO element with controls that will play a movie in a .mp4 format only.<br>
For demo purpose give "http://techslides.com/demos/sample-videos/small.mp4" this link.<br>
To exploid this give ""http://techslides.com/demos/sample-videos/small.mp4" this link.&lt;b&gt;Exploided string&lt;b&gt;"</p>

<textarea id="idconmsg" name="conmsg" cols="70" rows="1" wrap="physical" title="Please type your message"></textarea>

<p id="demo"></p>
<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var x = document.createElement("VIDEO");

    if (x.canPlayType("video/mp4")) {
        x.setAttribute("src",document.getElementById('idconmsg').value);
    } else {
	document.write("<h2>Video file not in MP$ format!!!</h2>");
        //x.setAttribute("src",document.getElementById('idconmsg').value);
    }

    x.setAttribute("width", "320");
    x.setAttribute("height", "240");
    x.setAttribute("controls", "controls");
    document.body.appendChild(x);
document.getElementById("demo").innerHTML = document.getElementById('idconmsg').value;
}
</script>

</body>
</html>

