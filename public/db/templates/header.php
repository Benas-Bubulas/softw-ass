
<?php 
session_start();
if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login.php");
    exit;
}
/*the code inside these php tags (i.e. the 5 lines of code above) are required for every page you wish to be accessible only after login*/
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Simple Database App</title>

        <link rel="stylesheet" href="css/style.css" />
    </head>
    
    <body>
    <h1>K.A Cinemas</h1>