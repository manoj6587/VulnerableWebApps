<!DOCTYPE html>
<html>
<body>
<p>In comment box user will add new url which will assign to window.location.pathname object. In comment box please provide following vulnerable link for exploid. "http://www.google.com/name=&lt;script&gt;alert('qxss')&lt;/script&gt;"</p><br>
 <textarea id="idconmsg" name="conmsg" cols="20" rows="10" wrap="physical" title="Please type your message"></textarea>
        <br />
<p id="fruitdemo"></p>
<br>
<script id="myScript">

function fruitFunction() {
     var jtext = document.getElementById('idconmsg').value;
     window.location.pathname = jtext;
     document.write(jtext);
}
</script>

<button onclick="fruitFunction()">Change document location!!</button> <br>
</body>
</html>
