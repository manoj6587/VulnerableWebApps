<!DOCTYPE html>
<html>
<body>

<p>Click the button to return the value of its value attribute.<br> On first click it will show "myValue" and on second click it will show page URL</p>

<button id="myBtn" value="myValue" onclick="myFunction()">OnClick Event</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myBtn").value;
    document.getElementById("demo").innerHTML = x;
        document.getElementById("myBtn").value = document.URL;
        document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>
