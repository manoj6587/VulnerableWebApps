<html>
<head>
</head>
<body>
  <p id="demo"> Welcome to Qualys's Bank </p><br>
  <hr><br>

        <script>
                var x = location.hash;
                document.getElementById("demo").outerHTML = x;
        </script>

  </body>
</html>
