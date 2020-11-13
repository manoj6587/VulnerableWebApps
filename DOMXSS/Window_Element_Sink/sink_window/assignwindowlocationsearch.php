<!DOCTYPE html>
<html>
<body>
<p>In comment box user will add new url which will assign to window.location.search object. In comment box please provide following vulnerable link for exploid. "http://www.google.com?name=&lt;script&gt;alert('qxss')&lt;/script&gt;"</p><br>
 <textarea id="idconmsg" name="conmsg" cols="20" rows="10" wrap="physical" title="Please type your message"></textarea>
        <br />
<p id="fruitdemo"></p>
<br>
<script id="myScript">

function fruitFunction() {
     var jtext = document.getElementById('idconmsg').value;
     window.location.search = decodeURIComponent(jtext);
     document.write(window.location.search);
}
</script>
<button onclick="fruitFunction()">Change window location!!</button> <br>
</body>
</html>

