<html>
<head>
    <script type="text/javascript">
        var htmlTxt = document.cookie;
		
		function InsertHtmlTxt () {
        
            var div = document.getElementById ("myDiv");

            if (document.createRange) {     // all browsers, except IE before version 9
                var rangeObj = document.createRange ();
                if (rangeObj.createContextualFragment) {        // all browsers, except IE
                    var documentFragment = rangeObj.createContextualFragment (htmlTxt);
                    div.insertBefore (documentFragment, div.firstChild);
                }
                else {      // Internet Explorer from version 9
                    div.insertAdjacentHTML ("afterBegin", htmlTxt);
                }
            }
            else {      // Internet Explorer before version 9
                div.insertAdjacentHTML ("afterBegin", htmlTxt);
            }
        }
    </script>
</head>
<body>
    <div id="myDiv" style="background:yellow;">
        Some content.
    </div>
    <button onclick="InsertHtmlTxt ();">Insert a document.cookie at the beginning of the yellow field!</button>
</body>
</html>
