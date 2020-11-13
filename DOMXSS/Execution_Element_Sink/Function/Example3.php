<!DOCTYPE html>
<html>
<body>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="demo"></p>

<script>
function myFunction(a) {
var x = "The page URL is:" + a;    
return x;
}
document.getElementById("demo").innerHTML = myFunction(document.URL);
</script>

</body>
</html>
