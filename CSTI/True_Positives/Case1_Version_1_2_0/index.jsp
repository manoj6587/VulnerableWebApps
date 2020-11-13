<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="org.apache.commons.lang.*" %>
<html>
<head>
<title>Client Side Template Injection</title>
  <script src="./angularjs/1.2.0/angular.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://10.113.195.231/CSTI/css/style.css">
</head>
<body>

<div ng-app>
     <nav class="navbar navbar-default">
     </nav>
     <div class="wrapper">
       <h4 align="center">Test Case</h4>
       <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-3">
             <h5><strong>   </strong></h5>
            </div>
          </div>
          <div class="form-group" >
            <label fro="Search" class="col-sm-offset-1 col-sm-2 control-label" style="text-align:left"> Search </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="q" id="q" ng-model="username" placeholder="" ng-change="">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
              <input type="submit" value="Submit">
            </div>
          </div>
 

          <div>
           <div class="col-sm-offset-3 col-sm-8">
            <span style="font-size:bold" id="info"> 
            <%
             String search = request.getParameter("q");
             if(search!=null){
                 String results = search.replaceAll("<","");
                 results = results.replaceAll("> ","");
                 out.println("You are search: "+results);

              }
            %>
           </span>
          </div>
         </div>
     </form>
   </div>
  </div>  
</body>
</html>
