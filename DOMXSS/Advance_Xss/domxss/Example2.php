<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
<script>
    document.write("<form><select>"); 

    document.write("<option value=1>" + 
    decodeURIComponent(
        document.location.href.substring(
            document.location.href.indexOf("default=") + 8)) 
    + "</option>");

    document.write("<option value=2> French </option>");

    document.write("</select> </form>");
    document.write(document.location.href);
</script>
  <body>
<p>It supposed to get default language from ../index.html?default=English which will set the default language into English.<br>
I'm trying to use ../index.html?default=;&lt;script&gt;alert(document.cookie)&lt;/script&gt; to show the cookie on the screen.<br>
The following code is vulnerable:-<br>
document.write("&lt;option value=1&gt;" +<br>
    decodeURIComponent(<br>
        document.location.href.substring(<br>
            document.location.href.indexOf("default=") + 8))<br>
    + "&lt;/option&gt;");
</p>
  </body>

</html>
