<!DOCTYPE html>
<html>
<body>

<video id="myVideo" width="320" height="240" controls src="mov_bbb.ogg">
  Your browser does not support the video tag.
</video>

<p>Click the button to get the URL of the video.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myVideo").src;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>
