<?php
include_once 'index.php';
//Message Vars

$msg='';
$msgClass='';
//Check for Submit

if(filter_has_var(INPUT_POST, 'submit')){
    //Get Form Data
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    //Check for required Fields

    if(!empty($email)&& !empty($name)&& !empty($message)){
        //Passed
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
    {
        //Failed
        $msg='Please use a valid email';
        $msgClass='alert-danger';
    }
    else{
        //passed
        $toEmail='sumanrox.official@gmail.com';
        $subject='Contact Request From '.$name;
        $body='<h2>Contact Request</h2>
        <h4>Name</h4></p>'.$name.'</p>
        <h4>Email</h4></p>'.$email.'</p>
        <h4>Message</h4></p>'.$message.'</p>';

        //Email Headers

        $headers="MIME-Version: 1.0"."\r\n";
        $headers .="Content-Type:Tetx/html;Charset=UTF-8" . "\r\n";

        // Additional Headers
        // From Whom
        $headers .="From: " .$name. "<".$email.">"."\r\n"; 

        if(mail($toEmail,$subject,$body,$headers)){
            //Email Sent
            $msg='Your Email has been Sent';
            $msgClass='alert-success';
        }
        else{
                        //Email Not Sent
                        $msg='Your Email was not been Sent';
                        $msgClass='alert-danger';
        }

    }
    }
    else{
        //Failed
        $msg='Please fill in all fields';
        $msgClass='alert-danger';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-default" style="background-color:#333;color:white;">
    <div class="container">
    <div class="navbar-header">
    <a style="color:white;"class="navbar-brand" href="index.php">My WebApp</a>
    </div>
    </div>
    </nav>

    <div class="container">
    <?php 
    if($msg!=''):?>
        <div class="alert <?php echo $msgClass;?>"> <?php echo $msg;?>
<?php endif;?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    </div>
    <div class="form-group">
    <label>Message</label>
    <textarea type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
    </div>
    <br>
    <button type="submit" name="submit" class="btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>