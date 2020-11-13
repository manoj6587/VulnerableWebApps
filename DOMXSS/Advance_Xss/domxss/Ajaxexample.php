<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet"
href="http://www.gnucitizen.org/styles/screen.css" type="text/css"/>
<link rel="stylesheet"
href="http://www.gnucitizen.org/styles/content.css" type="text/css"/>
<script src="http://jquery.com/src/jquery-latest.pack.js"
type="text/javascript"></script>
<title>Awesome</title>
</head>
<body>
<div id="header">
<h1>Awesome</h1>
<p>awesome ajax application</p>
</div>
<div id="content">
<div>
<p>Please, enter your nick and press
<strong>chat</strong>!</p>
<input name="name" type="text" size="50"/><br/><input
name="chat" value="Chat" type="button"/>
</div>
</div>
<script>
$('[@name="chat"]').click(function () {
var name = $('[@name="name"]').val();
$('#content > div').fadeOut(null, function () {
$(this).html('<p>Welcome ' + name + '! You can
type your message into the form below.</p><textarea class="pane">' + name + ' &gt;
</textarea>');
$(this).fadeIn();

});
});
</script>
<div id="footer">
<p>Awesome AJAX Application</p>
</div>
</body>
</html>
