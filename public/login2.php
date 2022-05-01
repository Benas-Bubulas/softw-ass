<?php
require_once ('db/config.php'); 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../css/signin.css">
   <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Sign in</title>
</head>



<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    

    </form>

    <?php






/* Check if login form has been submitted */
/* isset — Determine if a variable is declared and is different than NULL*/
if(isset($_POST['Submit']))
{

    try {
        require "db/common.php";
        require_once 'src/DBconnect.php';
    
        $user = $_POST['Username'];
        $passowrd = $_POST['Password'];
        $sql = "SELECT firstname,password FROM users WHERE firstname = '$user' AND password = '$password'";
    
        $result = $connection->query($sql);
        if($result > 0) {
            $_SESSION['Username'] = $Username1;
            $_SESSION['Active'] = true;
            header("location:../Products.php");
        }
        else $message = 'user does not exist';
    
    
    
    
        // $statement = $connection->prepare($sql);
    
        // $statement->execute();
        // $result = $statement->fetchAll();


















        



        if( ($_POST['Username'] == $Username1) && ($_POST['Password'] == $Password1) )
        {
            $_SESSION['Username'] = $Username1;
            $_SESSION['Active'] = true;
            header("location:../Products.php"); /* 'header() is used to redirect the browser */
            exit; //we’ve just used header() to redirect to another page but we must terminate all current code so that it doesn’t run when we redirect
    
        }
        else
            echo 'Incorrect Username or Password';
    





       
     } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
     }






    /* Check if the form's username and password matches */
    /* these currently check against variable values stored in config.php but later we will see how these can be checked against information in a database*/
    }
?>

</div>
</body>
</html>
