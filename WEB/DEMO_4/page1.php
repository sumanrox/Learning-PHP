<?php

if(isset($_POST['subimt'])){
    session_start();//Starts the session

    $_SESSION['name']=htmlentities($_POST['name']);
    $_SESSION['email']=htmlentities($_POST['email']);

    //Headers
    header('Location: page2.php');

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SESSION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="<?php $_SERVER['page2.php'];?>">
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>