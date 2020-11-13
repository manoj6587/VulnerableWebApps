<!DOCTYPE html>
<html>
<body>
<p>Once page is loaded below Click me will be disolayed in blue color. The color option is passed through URL.</p>
<a id="a1">Click me</a> 
<script> 
  if (location.hash.slice(1)) { 
    document.getElementById("a1").style.cssText = "color: " + location.hash.slice(1); 
  } 
</script>
<br>
<textarea rows="20" cols="150" readonly>The following JavaScript code shows a possible vulnerable script in which the attacker is able to control the "location.hash" (source) which reaches the "cssText" function (sink). This particular case may lead to DOMXSS in older browser versions, such as Opera, Internet Explorer and Firefox; for reference see DOM XSS Wiki, section "Style Sinks".<br><br>

&lt;a id="a1"&gt;Click me&lt;/a&gt; <br>
&lt;script&gt; <br>
  if (location.hash.slice(1)) { <br>
    document.getElementById("a1").style.cssText = "color: " + location.hash.slice(1);<br> 
  }<br>
&lt;/script&gt;<br><br>


Specifically the attacker could target the victim by asking her to visit the following URLs:<br>

    Page link/#red;-o-link:'javascript:alert(1)';-o-link-source:current; (Opera [8,12]) <br>
    Page link/#red;-:expression(alert(URL=1)); (IE 7/8)
</textarea>
 
</body>
</html>
