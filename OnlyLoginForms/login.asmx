

<html>

    <head><link rel="alternate" type="text/xml" href="/WebService/login.asmx?disco" />

    <style type="text/css">
    
		BODY { color: #000000; background-color: white; font-family: Verdana; margin-left: 0px; margin-top: 0px; }
		#content { margin-left: 30px; font-size: .70em; padding-bottom: 2em; }
		A:link { color: #336699; font-weight: bold; text-decoration: underline; }
		A:visited { color: #6699cc; font-weight: bold; text-decoration: underline; }
		A:active { color: #336699; font-weight: bold; text-decoration: underline; }
		A:hover { color: cc3300; font-weight: bold; text-decoration: underline; }
		P { color: #000000; margin-top: 0px; margin-bottom: 12px; font-family: Verdana; }
		pre { background-color: #e5e5cc; padding: 5px; font-family: Courier New; font-size: x-small; margin-top: -5px; border: 1px #f0f0e0 solid; }
		td { color: #000000; font-family: Verdana; font-size: .7em; }
		h2 { font-size: 1.5em; font-weight: bold; margin-top: 25px; margin-bottom: 10px; border-top: 1px solid #003366; margin-left: -15px; color: #003366; }
		h3 { font-size: 1.1em; color: #000000; margin-left: -15px; margin-top: 10px; margin-bottom: 10px; }
		ul { margin-top: 10px; margin-left: 20px; }
		ol { margin-top: 10px; margin-left: 20px; }
		li { margin-top: 10px; color: #000000; }
		font.value { color: darkblue; font: bold; }
		font.key { color: darkgreen; font: bold; }
		font.error { color: darkred; font: bold; }
		.heading1 { color: #ffffff; font-family: Tahoma; font-size: 26px; font-weight: normal; background-color: #003366; margin-top: 0px; margin-bottom: 0px; margin-left: -30px; padding-top: 10px; padding-bottom: 3px; padding-left: 15px; width: 105%; }
		.button { background-color: #dcdcdc; font-family: Verdana; font-size: 1em; border-top: #cccccc 1px solid; border-bottom: #666666 1px solid; border-left: #cccccc 1px solid; border-right: #666666 1px solid; }
		.frmheader { color: #000000; background: #dcdcdc; font-family: Verdana; font-size: .7em; font-weight: normal; border-bottom: 1px solid #dcdcdc; padding-top: 2px; padding-bottom: 2px; }
		.frmtext { font-family: Verdana; font-size: .7em; margin-top: 8px; margin-bottom: 0px; margin-left: 32px; }
		.frmInput { font-family: Verdana; font-size: 1em; }
		.intro { margin-left: -15px; }
           
    </style>

    <title>
	Login Web Service
</title></head>

  <body>

    <div id="content">

      <p class="heading1">Login</p><br>

      

      

      <span>
          <p class="intro">Click <a href="login.asmx">here</a> for a complete list of operations.</p>
          <h2>getSessionTokens</h2>
          <p class="intro"></p>

          <h3>Test</h3>
          
          To test the operation using the HTTP POST protocol, click the 'Invoke' button.



                      <form target="_blank" action='http://www.electre.com/WebService/login.asmx/getSessionTokens' method="POST">                      
                        
                          <table cellspacing="0" cellpadding="4" frame="box" bordercolor="#dcdcdc" rules="none" style="border-collapse: collapse;">
                          <tr>
	<td class="frmHeader" background="#dcdcdc" style="border-right: 2px solid white;">Parameter</td>
	<td class="frmHeader" background="#dcdcdc">Value</td>
</tr>

                        
                          <tr>
                            <td class="frmText" style="color: #000000; font-weight: normal;">login:</td>
                            <td><input class="frmInput" type="text" size="50" name="login"></td>
                          </tr>
                        
                          <tr>
                            <td class="frmText" style="color: #000000; font-weight: normal;">password:</td>
                            <td><input class="frmInput" type="text" size="50" name="password"></td>
                          </tr>
                        
                        <tr>
                          <td></td>
                          <td align="right"> <input type="submit" value="Invoke" class="button"></td>
                        </tr>
                        </table>
                      

                    </form>
                  <span>
              <h3>SOAP 1.1</h3>
              <p>The following is a sample SOAP 1.1 request and response.  The <font class=value>placeholders</font> shown need to be replaced with actual values.</p>

              <pre>POST /WebService/login.asmx HTTP/1.1
Host: www.electre.com
Content-Type: text/xml; charset=utf-8
Content-Length: <font class=value>length</font>
SOAPAction: "http://electre.com/ElectreNET/getSessionTokens"

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="http://electre.com/ElectreNET/" xmlns:types="http://electre.com/ElectreNET/encodedTypes" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"&gt;
  &lt;soap:Body soap:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"&gt;
    &lt;tns:getSessionTokens&gt;
      &lt;login xsi:type="xsd:string"&gt;<font class=value>string</font>&lt;/login&gt;
      &lt;password xsi:type="xsd:string"&gt;<font class=value>string</font>&lt;/password&gt;
    &lt;/tns:getSessionTokens&gt;
  &lt;/soap:Body&gt;
&lt;/soap:Envelope&gt;</pre>

              <pre>HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: <font class=value>length</font>

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="http://electre.com/ElectreNET/" xmlns:types="http://electre.com/ElectreNET/encodedTypes" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"&gt;
  &lt;soap:Body soap:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"&gt;
    &lt;tns:getSessionTokensResponse&gt;
      &lt;getSessionTokensResult href="#id1" /&gt;
    &lt;/tns:getSessionTokensResponse&gt;
    &lt;soapenc:Array id="id1" soapenc:arrayType="xsd:string[2]"&gt;
      &lt;Item&gt;<font class=value>string</font>&lt;/Item&gt;
      &lt;Item&gt;<font class=value>string</font>&lt;/Item&gt;
    &lt;/soapenc:Array&gt;
  &lt;/soap:Body&gt;
&lt;/soap:Envelope&gt;</pre>
          </span>

          <span>
              <h3>SOAP 1.2</h3>
              <p>The following is a sample SOAP 1.2 request and response.  The <font class=value>placeholders</font> shown need to be replaced with actual values.</p>

              <pre>POST /WebService/login.asmx HTTP/1.1
Host: www.electre.com
Content-Type: application/soap+xml; charset=utf-8
Content-Length: <font class=value>length</font>

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenc="http://www.w3.org/2003/05/soap-encoding" xmlns:tns="http://electre.com/ElectreNET/" xmlns:types="http://electre.com/ElectreNET/encodedTypes" xmlns:rpc="http://www.w3.org/2003/05/soap-rpc" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope"&gt;
  &lt;soap12:Body soap12:encodingStyle="http://www.w3.org/2003/05/soap-encoding"&gt;
    &lt;tns:getSessionTokens&gt;
      &lt;login xsi:type="xsd:string"&gt;<font class=value>string</font>&lt;/login&gt;
      &lt;password xsi:type="xsd:string"&gt;<font class=value>string</font>&lt;/password&gt;
    &lt;/tns:getSessionTokens&gt;
  &lt;/soap12:Body&gt;
&lt;/soap12:Envelope&gt;</pre>

              <pre>HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: <font class=value>length</font>

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenc="http://www.w3.org/2003/05/soap-encoding" xmlns:tns="http://electre.com/ElectreNET/" xmlns:types="http://electre.com/ElectreNET/encodedTypes" xmlns:rpc="http://www.w3.org/2003/05/soap-rpc" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope"&gt;
  &lt;soap12:Body soap12:encodingStyle="http://www.w3.org/2003/05/soap-encoding"&gt;
    &lt;tns:getSessionTokensResponse&gt;
      &lt;rpc:result xmlns=""&gt;getSessionTokensResult&lt;/rpc:result&gt;
      &lt;getSessionTokensResult soapenc:id="id0" soapenc:itemType="xsd:string" soapenc:arraySize="2"&gt;
        &lt;Item&gt;<font class=value>string</font>&lt;/Item&gt;
        &lt;Item&gt;<font class=value>string</font>&lt;/Item&gt;
      &lt;/getSessionTokensResult&gt;
    &lt;/tns:getSessionTokensResponse&gt;
  &lt;/soap12:Body&gt;
&lt;/soap12:Envelope&gt;</pre>
          </span>

          <span>
              <h3>HTTP GET</h3>
              <p>The following is a sample HTTP GET request and response.  The <font class=value>placeholders</font> shown need to be replaced with actual values.</p>

              <pre>GET /WebService/login.asmx/getSessionTokens?<font class=key>login</font>=<font class=value>string</font>&amp;<font class=key>password</font>=<font class=value>string</font> HTTP/1.1
Host: www.electre.com
</pre>

              <pre>HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: <font class=value>length</font>

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;ArrayOfString xmlns="http://electre.com/ElectreNET/literalTypes"&gt;
  &lt;string&gt;<font class=value>string</font>&lt;/string&gt;
  &lt;string&gt;<font class=value>string</font>&lt;/string&gt;
&lt;/ArrayOfString&gt;</pre>
          </span>

          <span>
              <h3>HTTP POST</h3>
              <p>The following is a sample HTTP POST request and response.  The <font class=value>placeholders</font> shown need to be replaced with actual values.</p>

              <pre>POST /WebService/login.asmx/getSessionTokens HTTP/1.1
Host: www.electre.com
Content-Type: application/x-www-form-urlencoded
Content-Length: <font class=value>length</font>

<font class=key>login</font>=<font class=value>string</font>&amp;<font class=key>password</font>=<font class=value>string</font></pre>

              <pre>HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: <font class=value>length</font>

&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;ArrayOfString xmlns="http://electre.com/ElectreNET/literalTypes"&gt;
  &lt;string&gt;<font class=value>string</font>&lt;/string&gt;
  &lt;string&gt;<font class=value>string</font>&lt;/string&gt;
&lt;/ArrayOfString&gt;</pre>
          </span>

      </span>
      

    
    
      

      

    
  </body>
</html>
