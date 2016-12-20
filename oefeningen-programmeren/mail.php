<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
// the message
$msg = "Thanks for contacting us!";

// send email
mail($_POST["email"],"My first contactform",$msg);
?>

</body>
</html>
