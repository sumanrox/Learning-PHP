<?php

session_start();

$name=$_SESSION['name'];
$email=$_SESSION['email'];


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sx</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h5>Thank You  <?php echo $name;?>, You have Subscribed with the email <?php echo $email;?> </h5>
</body>
</html>