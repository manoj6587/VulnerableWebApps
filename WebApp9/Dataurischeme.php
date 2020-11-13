<!DOCTYPE html>
<html>
	<head>
		<title>DATA URI Scheme</title>
		<style>
		ul {list-style:none;}
ul > li {
	margin:0 0 .1em;
	background:url(data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub/
/ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExK
cppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7) 
top left no-repeat; )
	height:14px;
	text-indent:1.5em;
}
		</style>
	</head>
	<body>

		<h1>Examples of Data URI scheme</h1>
		<ol>
			<li><p>HTML Example. FOllowing uri should not get reported.</p></li>
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUA
AAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO
9TXL0Y4OHwAAAABJRU5ErkJggg==" alt="Red dot" />
<br>
<iframe width="600" height="200" src="data:text/html;charset=utf-8;base64,PCFET0...C9odG1sPg==" ></iframe>





	<li><p>CSS Example. FOllowing uri should not get reported.</p></li>
	<ul>
     <li>Testing inline images, one</li>
     <li>Two</li>
     <li>Three</li>
    </ul>

	<li><p>JAVASCRIPT Example. New window will open.</p></li>
			<script>
		window.open('data:text/html;charset=utf-8,' +
    encodeURIComponent( // Escape for URL formatting
        '<!DOCTYPE html>'+
        '<html lang="en">'+
        '<head><title>Embedded Window</title></head>'+
        '<body><h1>42</h1></body>'+
        '</html>'
		)
		);
		</script>
<li> Php Example</li>
</ol>

<?php
echo "My first PHP script!";
echo base64_encode(file_get_contents("./face.jpg"))
?>

</body>
</html> 
