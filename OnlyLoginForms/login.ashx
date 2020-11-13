<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
                         <meta name="viewport" content="width=1024"><meta name="description" content="Stock screener for investors and traders, financial visualizations.">
<meta name="keywords" content="Stock Screener, Charts, Quotes, Maps, News, Financial Visualizations, Research, Trading Systems">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<link href="//fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css"><link rel="stylesheet" href="/css/finviz.css?rev=33" type="text/css">
<link rel="icon" type="image/png" href="/favicon_2x.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon.png" sizes="16x16">

            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]--><script type="text/javascript">FinvizSettings = {hasUserPremium: false, name: ""};</script><script src="/script/boxover.js?rev=2" type="text/javascript"></script>
<script src="/script/lightup.js?rev=1" type="text/javascript"></script>
<script type="text/javascript" src="/js/libs/shims.min.js?rev=1"></script><script type="text/javascript" src="/js/libs/d3-json.js"></script></head>
<body class="" style="margin:0" bgcolor="#ffffff"><div id="unsupported-browser">Your browser is no longer supported. Please, <a href="http://whatbrowser.org/" target="_blank">upgrade your browser.</a></div>
                <table class="header" width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width: 1000px">
                    <tr valign="top">
                        <td>
                            <script type="text/javascript">if(document.body.clientWidth>1500){document.write('<table align="center" width="1425px" cellpadding="0" cellspacing="0" border="0" style="table-layout: fixed; min-width: 1000px">')}else{document.write('<table align="center" width="95%" style="max-width: 1425px; min-width: 1000px; table-layout: fixed" cellpadding="0" cellspacing="0" border="0">')}</script>
                                <tr>
                                    <td width="30%">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td height="50" valign="middle">
                                                    <a href="/" class="logo"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="search" id="search" style="padding-top: 4px">
                                                    <form style="margin: 0">
                                                        <input placeholder="Search ticker, company or profile" type="text" value="">
                                                        <span class="fa fa-search"></span>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td valign="bottom" style="padding-bottom: 4px">
                                        <div id="microbar_position" style="height: 31px"></div>
                                    </td>
                                    <td width="728" align="right" style="position:relative;"><div id="banner_position" style="position:absolute;right:0;top:0;overflow:hidden;height:96px"></div></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="1000" style="font-size:0">
                            <img src="/gfx/nic2x2.gif" width="1000" height="1" border="0">
                        </td>
                    </tr>
                </table>
            <table class="navbar" width="100%" height="30" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td height="30">
                        <script type="text/javascript">if(document.body.clientWidth>1500){document.write('<table align="center" width="1425px" cellpadding="0" cellspacing="0" border="0" style="white-space: nowrap; min-width: 1000px">')}else{document.write('<table align="center" width="95%" style="max-width:1425px;white-space: nowrap;min-width: 1000px" cellpadding="0" cellspacing="0" border="0">')}</script>
                            <tr height="30"><td><a class="nav-link  is-first" href="/">Home</a></td><td><a class="nav-link " href="/news.ashx">News</a></td><td><a class="nav-link " href="/screener.ashx">Screener</a></td><td><a class="nav-link " href="/map.ashx">Maps</a></td><td><a class="nav-link " href="/groups.ashx">Groups</a></td><td><a class="nav-link " href="/portfolio.ashx">Portfolio</a></td><td><a class="nav-link " href="/insidertrading.ashx">Insider</a></td><td><a class="nav-link " href="/futures.ashx">Futures</a></td><td><a class="nav-link " href="/forex.ashx">Forex</a></td><td><a class="nav-link " href="/backtests.ashx">Backtests</a></td><td><a class="nav-link  is-elite" href="/elite.ashx">Elite</a></td><td style="width: 100%"></td>
                                <td class="time" id="time"></td>
                <td>
                    <a href="/help/screener.ashx" class="nav-link is-help">
                        <span class="fa fa-question-circle"></span>
                        Help
                    </a>
                </td>
                <td><a href="/login.ashx" class="nav-link sign-in">Login</a></td>
                <td><a href="/register.ashx" class="nav-link sign-up">Register</a></td>
            
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        <div class="content "><div class="container">
            <div class="fixed-width-small">
                <div class="content-header is-large">
                    <h1>Log in to Finviz</h1>
                    <p>
                        Don't have an account? <a href="/register.ashx">Register here, it's FREE</a>
                    </p>
                </div>

                <form class="form is-vertical is-large box-shadow" name="login" action="login_submit.ashx" onsubmit="return LoginSubmit(this);" method="post">
                    <label class="input">
                        <span>Your email</span>
                        <input type="text" name="email" value="">
                    </label>
                    <span id="email_error"></span>
                    
                    <label class="input">
                        <span>Your password</span>
                        <input type="password" name="password">
                    </label>
                    <span id="password_error" style="color:red;"></span>

                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="true" checked="checked">
                        Remember me on this computer
                    </label>

                    <input class="button is-primary is-large" type="submit" value="Log in">
                    <span id="error"></span>
                    
                    <div class="center-text" style="margin-bottom: -5px">
                        <a href="/forgot_password.ashx">I forgot my password</a>
                    </div>
                </form>
            </div>

            <script src="script/account.js?rev=2" type="text/javascript"></script>            
            <script>
                document.forms['login'].elements['email'].focus();
            </script>
        </div></div>
            <div class="footer" style="margin-top: 140px">
                <div class="footer_links">
                    <a class="tab-link" href="/affiliate.ashx">affiliate</a>
                    <span class="footer_dot"> • </span>
                    <a class="tab-link" href="/about.ashx">about us</a>
                    <span class="footer_dot"> • </span>
                    <a class="tab-link" href="/advertise.ashx">advertise</a>
                    <span class="footer_dot"> • </span>
                    <a class="tab-link" href="/contact.ashx">contact</a>
                    <span class="footer_dot"> • </span>
                    <a class="tab-link" href="/privacy.ashx">privacy</a>
                    <span class="footer_dot"> • </span>
                    <a class="tab-link" href="/help/screener.ashx">help</a>
                </div>
                <span class="copyright">Quotes delayed 15 minutes for NASDAQ, and 20 minutes for NYSE and AMEX.</span>
                <br>
                Copyright © 2007-2017 FINVIZ.com. All Rights Reserved.</span>
            </div>
            <script type="text/javascript" src="/js/libs/react-with-addons.min.js"></script>
            <script type="text/javascript" src="/js/dist/header.bundle.js?rev=18"></script>
        
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-3261808-1', 'auto');
                ga('set', 'dimension1', 'NotLoggedIn');
                
                ga('send', 'pageview');
            </script>
        <script type="text/javascript">
_qoptions={qacct:"p-c2W8esUZ6Q8oA"};
</script>
<script type="text/javascript" src="https://secure.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-c2W8esUZ6Q8oA.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<script src="/script/libs/bowser.min.js?rev=3" type="text/javascript"></script></body>
</html>
