$username = "root"; //your phpmyadmin account username
$host = "127.0.0.1"; //add your phpmyadmin host
$password = ""; //your phpmyadmin password
$db = mysqli_connect($host, $username, $password, "login") 
   or die("couldn't connect");
