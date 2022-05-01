<?php require_once 'db/templates/header.php';?>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "website/js/calculate.js" type = "text/javascript"></script>
	<title>Home Page</title>
    <link href="website/css/styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul>
            <li><a href="Products.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contacts.php">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP Login exercise - About page</h3>
      </div>

        <div class="mainarea">
        <h1>Status: You are logged in  <?php echo $_SESSION['Username'];?> </h1>
            <p class="lead">This is where we will put the logout button</p>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>

      <div class="row marketing">
        <div>
          <h4>About page</h4>
          <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

       </div>

          <?php require_once 'db/templates/footer.php';?>
