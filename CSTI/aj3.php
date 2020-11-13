<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
</head>
<body>
<div > Reflection outside ng-app
<?php
echo htmlspecialchars($_GET["name"]);
?>
</div>
<div ng-app> This is inside ng-app
<span>span inside div with ng-app
</span>
</div>
<div>Outside ng-app
<?php
echo htmlspecialchars($_GET["name"]);
?>
</div>
</body>
</html>
