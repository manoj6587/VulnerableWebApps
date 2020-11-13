<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.js"></script>
</head>
<body>
<div > Reflection outside ng-app
<?php
echo htmlspecialchars($_GET["name"]);
?>
</div>
<div ng-app> Reflection inside ng-app
<?php
echo htmlspecialchars($_GET["name"]);
?>
===<span>reflection in span inside div with ng-app
<?php
echo htmlspecialchars($_GET["name"]);
?>
</span>===
<?php
echo '<a alt= ' . htmlspecialchars($_GET["name"]) .' href="./index.html">Link</a>';
?>
</div>
</body>
</html>
