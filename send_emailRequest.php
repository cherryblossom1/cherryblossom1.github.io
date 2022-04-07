<html>
<body>
<?PHP
$email = $_POST["email"];
$from = $_POST["fname"];
$mtime = $_POST["mtime"];
$purpose = $_POST["purpose"];

$to = "lalapple395@gmail.com";
$subject = "Meeting requested";
$headers = "From: $email\n";
$message = "Dear Parth \n Name: $from \n Email: $email \n Requested Time: $mtime \n Meeting Agenda: $purpose";
mail($to,$subject,$message,$headers);
?>
</body>
</html>