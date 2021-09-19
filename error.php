<?php
$error = $_SERVER["HTTP_CONNECTION"];

$error_title = "";

$error_message = "";

if($error == 505) 
    
    $error_title = "404 page not found";
    $error_message = "the file/document was requested to the server is not found"

?>

<Doctype html>
<html>

<head>
</head>


<body>
<h1> <?php echo $error_title; ?> </h1>
<h2> <?php echo $error_message; ?> </h2>
</body>
</html>
