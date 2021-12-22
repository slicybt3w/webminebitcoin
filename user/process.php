<?php
include "config.php";
?>
<?php

error_reporting(0);
$username = $_POST['name'];
$password = $_POST['pass'];                                                                                                                                                     //prevent mysql injection                                                               $username = stripslashes($username);                                                    $password = stripslashes($password);
$con = mysqli_connect($host, $username, $password, "login");                            
$result = mysqli_query($con,"select * from login where  username= '$username' and passwo
rd = '$password'")
        or die("couldnt query database".mysql_error());

$row = mysqli_fetch_array($result);
if($row["username"] == $username && $row['password'] == $password) {
            echo "welcome ".$row['username'];

} else {
echo "failed to login to $username";
}
?>
