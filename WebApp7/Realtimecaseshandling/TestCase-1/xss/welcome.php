<html>
<body>

Welcome <?php echo htmlentities($_POST["name"]); ?><br>
Your email address is: <?php echo htmlentities($_POST["email"]); ?> <br>
Your Zipcode is: <?php echo $_POST["zipcode"]; ?><br>
Phone number is: <?php echo $_POST["phonenumber"]; ?><br>
Country: <?php echo htmlentities($_POST["country"]); ?><br>
Timezone: <?php echo htmlentities($_POST["timezone"]); ?>

</body>
</html>
