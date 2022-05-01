<?php
/**
 * This is basically the page to create an account
 */
if (isset($_POST['submit'])) {
    require "common.php";
    try {
        require_once '../src/DBconnect.php';
        require_once '../src/User.php';
        require_once '../src/Review.php';

        $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "email" => $_POST['email'],
            "age" => $_POST['age'],
            "password" => $_POST['password']
           );

           $user1 = new User($_POST['firstname'],$_POST['email'],$_POST['password']);
        //    $review_1 = new Review($_POST['firstname'], $_POST['email']); THIS NEEDS TO BE FIXED


           $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
           );
           $statement = $connection->prepare($sql);
           $statement->execute($new_user);

    }   catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    } 
}




?>
<?php require "templates/header.php"; ?>
<?php if (isset($_POST['submit']) && $statement) { ?>
 <?php echo escape($_POST['firstname']); ?> <?php echo ($user1); ?>  successfully registered <br> .
<?php } ?>
<h2>Please fill in your details below:</h2>
 <form method="post">
 <label for="firstname">First Name / Username</label>
 <input type="text" name="firstname" id="firstname">
 <label for="lastname">Last Name</label>
 <input type="text" name="lastname" id="lastname">
 <label for="email">Email Address</label>
 <input type="email" name="email" id="email">
 <label for="age">Age</label>
 <input type="text" name="age" id="age" maxlength="3"> 
 <label for="password">Password</label>
 <input type="text" name="password" id="password" >
 <input type="submit" name="submit" value="Submit">
 </form>
 <a href="../Products.php">Back to home</a>
<?php include "templates/footer.php"; ?>