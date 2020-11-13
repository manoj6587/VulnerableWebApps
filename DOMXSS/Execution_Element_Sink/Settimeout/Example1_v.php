<html>
<head>
<title>JavaScript: Function example set-1!!!</title>
</head>
<body>
<h1 style="color: red">JavaScript function example-1</h1>
<hr />
<!--
<button type="button" onclick="case1(document.URL)">Document_URL</button>
<button type="button" onclick="case1(document.URI)">Document_URI</button>
<button type="button" onclick="case1(document.URLUnencoded)">Document_URLUnencoded</button>
<button type="button" onclick="case1(document.baseURI)">Document_baseURI</button>
<button type="button" onclick="case1(location)">location</button>
<button type="button" onclick="case1(location.href)">location_href</button>
<button type="button" onclick="case1(location.search)">location_search</button>
<button type="button" onclick="case1(location.hash)">location_hash</button>
<button type="button" onclick="case1(location.pathname)">location_pathname</button>
<button type="button" onclick="case1(document.cookie)">document_cookie</button>
<button type="button" onclick="case1(document.referrer)">document_referrer</button>
<button type="button" onclick="case1(window.name)">window_name</button>
-->
<br>
<br>
<h3>Clicking on button page url will get display after 3 second....****Please have some patience****</h3>
<p id="demo"></p>

<script>

var y;

//Document.URL is send to eval
function case1(a){
var x = "After 2 second page URl will display:" + a;    
setTimeout(displayFunc, 3000); y = x;
}

function displayFunc(){
document.write(y);
}

code = "tmp = document.URL; ";
setTimeout(code, 1000);

</script>
</body>
</html>

