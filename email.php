<!DOCTYPE html>
<html>
<body>
<?php
if (isset($_REQUEST['email'])) {
$to = "eocservis@gmail.com";
$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$message = $_REQUEST['message'];
$service = $_REQUEST['service'];
$phone = $_REQUEST['phone'];
mail($to, $service, $message, "From:" . $email,  $phone);
}
?>
</body>
</html>
