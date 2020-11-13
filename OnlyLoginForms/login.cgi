





<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Web Single Login</title>
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/css/styles-wslx.css">
	<script type="text/javascript" src="/jscript/shared.js"></script>
	<script>
		<!-- to hide script contents from old browsers  
		 function validateForm(form) 
			{
			    if (document.forms[0].userid.value.length == 0 || document.forms[0].userid.value.length < 3) {
	       		 alert( "\nInvalid USER ID entry.\nEnter end user's USER ID in the box."); 
	       		 return false;
	       	    }
			    if (document.forms[0].b64Pwd.value.length == 0) { 
	       		 alert("You must enter a password.");
	       		 return false;
	       		} 
				else
		       	{
		       		var formPassword = document.forms[0].b64Pwd.value;
		       		var base64Password = base64Encode(formPassword);
		       		
		       		if(base64Password.length > 0)
		       		{
		       			document.forms[0].b64Pwd.value = base64Password;
		       		}
		       	}
				return true;			
			}

			function secureRedirect()
			{
				// if so then get args for WslIP and back and issue them as cookies
				var wslIp = false;
				var url = "https://www.secureauthx.dealerconnection.com/login.cgi";
				
				var argx = getArgs();
				url = url + "?WslIp=114.143.178.26";

				if (argx.back) 
				{
					var x = String(argx.back);
					url = url + "&back="+ escape (x);
				}
		        location.href =  url;
			}
			
			function validateUserID(form) 
			{
				//determine if userid is internal or external

  				var reUser = /^\w-\w{1,8}$/;
  				if (reUser.test(document.forms[0].userid.value)) {
					return true;
				}
  				return false;
			}

			function validatePasscode(form) 
			{
				//determine if passcode is valid SecurID format

  				var rePasscode = /^\d{8,16}$/;
  				if (rePasscode.test(document.forms[0].b64Pwd.value)) {
					return true;
				}
  				return false;
			}
		 
		 function getArgs()
			{
				//get variables from query string
				var args = new Object();
				var query = location.search.substring(1); //Get query string
				
				
				var regExp = /(WslIP=\d+\.\d+\.\d+\.\d+)&(back=.+)/;
				var result = query.match(regExp);
				
				if (result != null){
					var pairs = new Array();
					pairs[0] = (result[1]);
					pairs[1] = (result[2]);
				}
				
				else {
					var regExp2 = /(back=.+)/;
					var result2 = query.match(regExp2);
					
					if (result2 != null){
						var pairs = new Array();
						pairs[0] = (result2[1]);
						//alert (pairs[0]);
					}
					
					else {
						return false;
					}

				}

				//var pairs = query.split("&");	//Break at ampersand
				for (var i=0; i<pairs.length; i++) {
					var pos = pairs[i].indexOf("="); //look for name=value
					if (pos == -1) continue;  //if not found skip
					var argname = pairs[i].substring(0,pos); //get name
					var value = pairs[i].substring(pos+1); //get value
					args[argname] = unescape(value); //store as property
					//alert (value);

				}
				return args;
			}
			
	
		 function checkCookieId () {
		 
		 	//Temporary alert message used when accessing old Web Servers
			if(false) {
				alert("null");
			}
			
		 	// This section is temporary and will be removed after version 3 WSLX Migration
		 	if(false){
		 		var url = "null";
		 		location.href = url;
		 		return;
		 	} //Again remove when Migration is completed
		 	
		 	// only execute if the login form is displayed on the page
			if (document.forms[0]) {
				if (getCookie("CDSID") != "")  {
					if (document.forms[0].userid.value == "") {
	                	document.forms[0].userid.value = getCookie("CDSID");
					 }
					document.forms[0].b64Pwd.focus();
				} else if(false) {
					document.forms[0].b64Pwd.focus(); 	        
				} else { 
			 		document.forms[0].userid.focus();
				}	
			}
		}
	 
		 function getCookie (Name) {
			 var search = Name + "="
			 if (document.cookie.length > 0) {
				 offset = document.cookie.indexOf(search)
				 if (offset != -1) {
					 offset += search.length
					 end = document.cookie.indexOf(";", offset)
					 if (end == -1)
						 end = document.cookie.length
					 return unescape(document.cookie.substring(offset, end))
				 }
			 }
			 return ""
		 }
	 
		 function checkUserId() {
			 if( document.forms[0].userid.value.length < 3 ) {
				 alert( "\nInvalid USER ID entry.\nEnter end user's USER ID in the box.");
				 document.forms[0].userid.focus();
				 return false;
			 }
			 return true;
		 }

        function mypopup(URL)
        {
          //set the name of the Window
          window.name="base";
          
          //open a new window to display URL
          window.open(URL,"myhelp","toolbar=no,location=no,directories=no,status=no, scrollbars=yes,resizable=yes,copyhistory=no");
        }
        
        function spsLink()
        {
        	var argx = getArgs();
        	var url = "http://www.dsps.dealerconnection.com/Sps/jsp/UserSearchPwdReset.jsp";
        	
        	if (argx.back) 
			{
				var x = String(argx.back);
				url = url + "?back="+ escape (x);
			} else {
				url = url + "?back="+"https://www.wslx.dealerconnection.com/";
			}
				
			location.href = url; 
        }
        
	// end hiding contents from old browsers -->
	</script>
</head>


<body onload="checkCookieId()" id="DEALER-WSLXloginBody" MARGINWIDTH=0 MARGINHEIGHT=0 TOPMARGIN=0 LEFTMARGIN=0 >
<table BORDER="0" WIDTH="100%" CELLSPACING="0" CELLPADDING="0"><tr BGCOLOR="#0066FF"><td align=right>&nbsp;<A HREF="JavaScript:mypopup('/wslx_help.jsp')"><img src="/img/helpoff.gif"></A></td></tr></table>
<table cellSpacing="0" cellPadding="0" border="0" width="100%">
	<tr>	
		<td width="100%">
		    <CENTER>
			<table id="DEALER-WSLXHeaderBodyFooter" border="0" width="100%">
				<tr id="DEALER-WSLXHeader">
					<td>
						<br>
						<div id="DEALER-WSLXloginHeaderText1">
							<br><h1 align="center">Secure Web Logon</h1><hr>
						</div>
						<!--<div id="DEALER-WSLXloginHeaderText2">
							<br><TABLE BORDER=3 WIDTH="60%" CELLPADDING=10 align=center><TR><TD><B>
								By logging into this site, I agree to the following terms and conditions: <br>Ford Motor Company owns all rights to this work and intends to maintain it in confidence to preserve its trade secret status.  Those having access to this work may not copy or print it, except for use within their own dealerships, or disclose the information contained in it without the written authorization of Ford Motor Company.
								</B></TD></TR></TABLE>
						</div>-->
						<div id="DEALER-WSLXloginHeaderText2">
							<br><TABLE BORDER=3 WIDTH="80%" CELLPADDING=10 align="center"><TR><TD>
								<b>
								<span id="DEALER-WSLXloginHeaderText2">WARNING!</span>
								<br/>
								<span id="DEALER-WSLXloginHeaderText2">THIS IS A FORD MOTOR COMPANY PRIVATE COMPUTER SYSTEM. USAGE MAY BE MONITORED. UNAUTHORIZED ACCESS OR USE MAY RESULT IN CRIMINAL OR CIVIL PROSECUTION, DISCIPLINE UP TO AND INCLUDING TERMINATION OF EMPLOYMENT, TERMINATION OF ASSIGNMENT, OR LOSS OF ACCESS.</span>
								</b>
								<br/><br/>
								<span id="DEALER-WSLXloginHeaderText2">By signing on to the system I agree that, where consistent with applicable law: 1) I do not have any expectation of privacy in my use of the system, 2) My name and business contact information may be collected, processed, and stored by Ford in databases located in the U.S.A., and transferred among Ford and Ford's global affiliates (including the affiliates identified in Ford's most recent annual report on SEC Form 10-K available at the Ford corporate website) and their service providers for the purposes of my business relationship or arrangement with Ford, and 3) Ford actively monitors its information, systems, and data to identify and respond to security threats and losses, and any information or data identified through this monitoring may be shared among Ford and Ford's global affiliates and service providers, and provided to government authorities (including law enforcement).</span>
								<br/><br/>
								<span id="DEALER-WSLXloginHeaderText2">Ford recognizes that in certain jurisdictions there are specific laws, regulations, and labor agreements that may apply, and Ford will comply with such requirements.
								<a href="#" onclick="displayTerms()">Click here for additional important terms and conditions.</a></span>
								<br/><br/>
								<div id="hiddenTerms" style="display: none;">
									<span id="DEALER-WSLXloginHeaderText2">By accessing this system, I acknowledge that it contains information that is Confidential and Proprietary to Ford, its affiliates, dealers, and suppliers, and that I am responsible for maintaining the security and confidentiality of the information and shall use it only for purposes authorized by Ford.  Such information shall not be disclosed or caused to be disclosed without proper authorization from Ford.</span>
									<br/><br/>
									<span id="DEALER-WSLXloginHeaderText2">Ford owns all rights to unpublished work created by or developed for Ford and reserves the right to protect these works as unpublished copyrighted works in the event of an inadvertent or deliberate unauthorized publication.  Ford also reserves its rights under the copyright laws to protect these works as published works.</span>
								</div>
							</TD></TR></TABLE>
						</div>
						<div id="DEALER-WSLXloginHeaderText3">
							<H4 ALIGN="center">Enter your userid and password to login<br/><br/>Salaried Employees can login using their CDS ID and Password</H4>
						</div>
					</td>
				</tr>
				
				
				
				<tr id="DEALER-WSLXBody">
					<td>
						<FORM name="logonForm" action="auth.cgi" method="post" onSubmit="return validateForm(this.form);"> 
						<table align="center">
						  <tr>
						    <th id="DEALER-WSLXloginUserIdLabel" width="30%">USERID:</th>
						    <td>
						    	<input id="DEALER-WSLXloginUserIdInput" name="userid" size="10" maxlength="8" 
						    		value="" onchange="checkUserId()">
						    </td>
						  </tr>
						  <tr>
						    <th id=DEALER-WSLXloginPasswordLabel width="30%">PASSWORD:</th>
						    <td><input id=DEALER-WSLXloginPasswordInput name="b64Pwd" size="10" type="password"></td></tr>
						  <tr>
						    <td>
						    </td>
						    <td>
						      <div id="DEALER-WSLXloginWSLSubmitButton">
						    	  <input type="submit" value="Login" > 
							  </div>
						    </td>
						  </tr>
							<!--Extra hidden parameters-->							  
			               <input type="hidden" name="WslIP" value="114.143.178.26">
			              
						</table>
						</FORM>
					</td>
				</tr>
							
				<tr id="DEALER-WSLXFooter">
					<td> <br>
						<div id="DEALER-WSLXloginFooterText1">
							<center><b>NOTE: PLEASE DO NOT SHARE YOUR USER ID OR PASSWORD WITH ANYONE</b></center>
						</div>
						<br>
						 <!-- Temp keep as Admin toggle till SPS released -->
						<div id="DEALER-WSLXloginFooterText1">
							<center><b>Dealers: To reset your password using your Q&A Profile, <A HREF="Javascript:spsLink()">click here</A>.</b></center>
						</div>
						<br>
						
						<!-- <div id="DEALER-WSLXloginFooterText1">
							<center><b>NOTE: If you need to login with a securid PASSCODE&nbsp;<a id="DEALER-WSLXSecuridLinkRef" href="#" onClick="secureRedirect()">click here</a></b></center>
						</div> -->
						<br>		
					</td>
				</tr>
			</table>
			</CENTER>
		</td>
	</tr>
</table>

</body>

</html>