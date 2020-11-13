<!DOCTYPE html>
<html>
<head>
<title>JavaScript: Eval function example set-1 <br> Html tag inpput send through URL run on browser</title>
</head>
<body>
<h1 style="color: red">JavaScript  eval() function example-1</h1>
<hr />

<button type="button" onclick="case1()">Document_URL</button>
<button type="button" onclick="case2()">Document_URI</button>
<button type="button" onclick="case3()">Document_URLUnencoded</button>
<button type="button" onclick="case4()">Document_baseURI</button>
<button type="button" onclick="case5()">location</button>
<button type="button" onclick="case6()">location_href</button>
<button type="button" onclick="case7()">location_search</button>
<button type="button" onclick="case8()">location_hash</button>
<button type="button" onclick="case9()">location_pathname</button>
<button type="button" onclick="case10()">document_cookie</button>
<button type="button" onclick="case11()">document_referrer</button>
<button type="button" onclick="case12()">window_name</button>

<script>
//Document.URL is send to eval
function case1(){
var x = "document.write(document.URL)";
eval (x);
}
//Document.URI is send to eval
function case2(){
var x = "document.write(document.URI)";
eval (x);
}
//Document.URLUnencoded is send to eval
function case3(){
var x = "document.write(document.URLUnencoded)";
eval (x);
}
//Document.baseURI is send to eval
function case4(){
var x = "document.write(document.aseURI)";
eval (x);
}
//Location is send to eval
function case5(){
var x = "document.write(location)";
eval (x);
}
//Location.HREF is send to eval
function case6(){
var x = "document.write(location.href)";
eval (x);
}
//Location.Search is send to eval
function case7(){
var x = "document.write(location.search)";
eval (x);
}
//Location.HASH is send to eval
function case8(){
var x = "document.write(location.hash)";
eval (x);
}
//Location.PathName is send to eval
function case9(){
var x = "document.write(location.pathname)";
eval (x);
}
//document.cookie is send to eval
function case10(){
var x = "document.write(document.cookie)";
eval (x);
}
//document.referrer is send to eval
function case11(){
var x = "document.write(document.referrer)";
eval (x);
}
//Window.name is send to eval
function case12(){
var x = "document.write(window.name)";
eval (x);
}
</script>
</body>
</html>

