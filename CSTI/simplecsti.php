<html ng-app>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
</head>
<body>
<p>
<?php
$q = $_GET['q'];
echo htmlspecialchars($q,ENT_QUOTES);?>
</p>   
</body>
</html>
