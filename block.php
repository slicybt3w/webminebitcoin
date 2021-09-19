<?php
//ip array
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 

$ip = $_SERVER['HTTP_CLIENT_IP']."\r\n"; 

}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
$ip = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n"; 

}

else 

{
    
$ip = $_SERVER['REMOTE_ADDR']."\r\n"; 

}
$port = $_SERVER["REMOTE_PORT"];
$ips = array();


$lock = file("IPS.txt");

foreach($lock as $line) 
{
    
array_push($ips, $line);

}

if(in_array($ip, $ips))
{
    echo "you are banned for some reasons bec your country is not supported in this app $ip:$port";
}
 else 
 {
echo "you are unblocked $ip:$port";
    header("location: ./index.php");
 }



?>

<style>
body {
    
}
</style>