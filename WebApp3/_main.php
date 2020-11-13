<!DOCTYPE html>
<html>
<body>
<input type="button" name="Release" onclick="document.write('<?php setHeight(350) ?>');" value="Click to Release">
<input type="button" name="Release" onclick="document.write('<?php setHeight() ?>');" value="Click to Release">
<input type="button" name="Release" onclick="document.write('<?php setHeight(130) ?>');" value="Click to Release">
<input type="button" name="Release" onclick="document.write('<?php setHeight(80) ?>');" value="Click to Release">
<?php
sleep(500);

/*if (isset($_GET['timeout']))
     sleep($_GET['timeout']);
 else
     sleep(500);
*/

function setHeight($minheight = 50) {
     echo "The height is : $minheight <br>";
}

#setHeight(350);
#setHeight();
#setHeight(135);
#setHeight(80);

?>

</body>
</html>
