<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
</head>
<body>
<div ng-app> Reflection inside ng-app
<?php
echo "{{" . htmlspecialchars($_GET["name"]) . "}}";
?>
</div>
</body>
</html>
