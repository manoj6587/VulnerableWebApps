<!DOCTYPE html>
<html>
<body>

<p>Click the button to change the default src of external script!!<br>Default source file location is:<p id="delocation"></p><script>document.getElementById("delocation").innerHTML = document.URL;</script></p>

 <textarea id="idconmsg" name="conmsg" cols="50" rows="1" wrap="physical" title="Please type new src location:"></textarea>
        <br />
<button onclick="changeSource()">changeSource!!</button>
<br><br><br>
<p><strong>While changing the src, you can inject the vulnerability. <br>E.g:- Add &lt;b&gt;Display content&lt;/b&gt; at the end of src path. Browser will execute display content enclose inside &lt;b&gt; tag.</strong></p>
<script id="myScript" src="demo_script_src.js"></script>

<script>
var jtext = document.getElementById("myScript").innerText;
function changeSource() {
    jtext = document.getElementById("idconmsg").value;
    document.getElementById("myScript").innerText = jtext;
    document.getElementById("delocation").innerHTML = "New src set to:" + jtext;

}
</script>
</body>
</html>
