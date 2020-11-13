<html>
<head>
</head>
<body>
  <a href="documenturl.php?name=<script>alert('XSS')</script>"> DocumentURL.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.URL);&lt;/script&gt; "
<br><br>

  <a href="documenturi.php?name=<script>alert('XSS')</script>">DocumentURI.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.URI);&lt;/script&gt; "
<br><br>

<a href="documenturlunencoded.php?name=<script>alert('XSS')</script>">DocumentURLUnencoded.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.URLUnencoded);&lt;/script&gt; "
<br><br>

<a href="documentbaseuri.php?name=<script>alert('XSS')</script>">DocumentbaseURI.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.baseURI);&lt;/script&gt; "
<br><br>

<a href="location.php?name=<script>alert('XSS')</script>">Location.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(location);&lt;/script&gt; "
<br><br>

<a href="locationhref.php?name=<script>alert('XSS')</script>">LocationHref.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(location.href);&lt;/script&gt; "
<br><br>

<a href="locationsearch.php?name=<script>alert('XSS')</script>">LocationSearch.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(location.search);&lt;/script&gt; "
<br><br>

<a href="locationhash.php?name=<script>alert('XSS')</script>">LocationHash.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(location.hash);&lt;/script&gt; "
<br><br>

<a href="locationpathname.php?name=<script>alert('XSS')</script>">LocationPathname.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(location.pathname);&lt;/script&gt; "
<br><br>

<a href="documentcookie.php?name=<script>alert('XSS')</script>">DocumentCookie.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.cookie);&lt;/script&gt; "
<br><br>

<a href="documentreferrer.php?name=<script>alert('XSS')</script>">DocumentReferrer.php</a>   -------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(document.referrer);&lt;/script&gt; "
<br><br>

<a href="windowname.php?name=<script>alert('XSS')</script>">WindowName.php</a>-------------- There is a DOM-based XSS, which can be exploited for IE. the webpage contains " &lt;script&gt;document.write(window.name);&lt;/script&gt; "
<br><br>

</body>
</html>

