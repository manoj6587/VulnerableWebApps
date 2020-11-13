<html>
<head>
<title>JavaScript: Function example set-1!!!</title>
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
<h3>Clicking on button will execute javascript function. ******Page URL value is provide to this function for displaying on page only******This code is getting execute on page:---> window.execScript(document.write(a), "JavaScript")"</h3>
<p id="demo"></p>

<script>

var y;

//Document.URL is send to eval
function case1(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}
}

//Document.URI is send to eval
function case2(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Document.URLUnencoded is send to eval
function case3(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Document.baseURI is send to eval
function case4(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Location is send to eval
function case5(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Location.HREF is send to eval
function case6(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Location.Search is send to eval
function case7(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Location.HASH is send to eval
function case8(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Location.PathName is send to eval
function case9(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//document.cookie is send to eval
function case10(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//document.referrer is send to eval
function case11(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}

//Window.name is send to eval
function case12(a){
if (window.execScript) {
				window.execScript(document.write(a), "JavaScript");
}else{
alert('window.execScript does not support on current browser!!!!');}}


</script>
</body>
</html>
