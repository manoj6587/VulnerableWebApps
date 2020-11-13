<!DOCTYPE html>
<html>
<body>
<p id="demo">Text is displayed when first time page is loaded!!!</p>
<p id="urldisplay">
<script>
//var x = location.assign(document.URL);
//document.getElementById("urldisplay").innerHTML = "Page URL is:" + x;

function myFunction() {
 location.reload();
document.write(document.URL);
}
</script>

<button onclick="myFunction()">Reload page</button>

</body>
</html>
