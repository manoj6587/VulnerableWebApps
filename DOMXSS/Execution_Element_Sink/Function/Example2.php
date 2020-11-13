<html>
<head>
<title>JavaScript: Function example set-1 <br> Html tag input send through URL and it is executing on browser</title>
</head>
<body>
<h1 style="color: red">JavaScript function example-1</h1>
<hr />

<button type="button" onclick="case1(document.URL)">Document_URL</button>
<button type="button" onclick="case2(document.URI)">Document_URI</button>
<button type="button" onclick="case3(document.URLUnencoded)">Document_URLUnencoded</button>
<button type="button" onclick="case4(document.baseURI)">Document_baseURI</button>
<button type="button" onclick="case5(location)">location</button>
<button type="button" onclick="case6(location.href)">location_href</button>
<button type="button" onclick="case7(location.search)">location_search</button>
<button type="button" onclick="case8(location.hash)">location_hash</button>
<button type="button" onclick="case9(location.pathname)">location_pathname</button>
<button type="button" onclick="case10(document.cookie)">document_cookie</button>
<button type="button" onclick="case11(document.referrer)">document_referrer</button>
<button type="button" onclick="case12(window.name)">window_name</button>
<br>
<br>
<p id="demo"></p>

<script>
//Document.URL is send to eval
function case1(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Document.URI is send to eval
function case2(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Document.URLUnencoded is send to eval
function case3(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Document.baseURI is send to eval
function case4(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Location is send to eval
function case5(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Location.HREF is send to eval
function case6(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Location.Search is send to eval
function case7(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Location.HASH is send to eval
function case8(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Location.PathName is send to eval
function case9(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//document.cookie is send to eval
function case10(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//document.referrer is send to eval
function case11(a){
var x = "The page URL is:" + a;    
document.write(x);
}
//Window.name is send to eval
function case12(a){
var x = "The page URL is:" + a;    
document.write(x);
}

</script>
</body>
</html>

