
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="org.apache.commons.lang.*" %>
<html ng-app>
<head>
<title>Client Side Template Injection</title>

  <script src="https://10.10.35.14:9443/angularjs/1.3.0/angular.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://10.10.32.121:8080/Client_Side_Injection_Angular/css/style.css">
</head>
<body>

<div>


<p>
<div id="main">
 <div><a href="checkdetails.jsp?q=test">Check Details -TP Page</a></div>
 <div><a href="info/checkService.jsp">Service Avaiable</a></div>
 <div><a href="./../styles/testStyle.html">Test Styles</a></div>
<div><a href="/testThirdPartyCookie/parentPage.jsp">Links to Test 3rd Party Cookie</a></div>


</div>
</p>
</div>

</body>
</html>