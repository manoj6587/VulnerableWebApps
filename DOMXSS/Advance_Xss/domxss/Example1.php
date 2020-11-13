<html>
<head>
</head>
<body>
<p>
1)Once the page is loaded, enter your name and press the Chat button.This example is limited in that you cannot communicate with other user.<br><br>
2)Notice that this AJAX application does not need a server to perform the desired functions. Remember, you are running it straight from your desktop. Everything is handled by your browser via JavaScript and jQuery.<br><br>
3)If you carefully examine the structure and logic of the JavaScript code, you will see that the “Awesome AJAX application” is vulnerable to XSS.The part responsible for this input sanitization failure is as follows:&lt;br&gt;$(this).html('&lt;p&gt;Welcome ' + name + '! You can type your message into the form below.&lt;/p&gt;&lt;textarea class="pane"&gt;' + name + ' &gt; &lt;/textarea&gt;');&lt;br&gt; <br><br>
4)As seen, the application composes a HTML string via JQuery’s HTML function.The html function modifies the content of the selected element.This string includes the data from the nickname input field. In our case, the input’s value is “Bob.” However, because the application fails to sanitize the name, we can virtually input any other type of HTML, even script elements,<br><br>
5)Finally gives string input which containd script. 
</p>
<br><a href="Ajaxexample.php">Ajaxexample.php</a><br>
</body>
</html>
