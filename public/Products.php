<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta content="width=device-width, initial-scale=1" name="viewport">
    
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
    <div class="container1">
    <header>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><img src="website/images/unknown.png" alt="K.A logo" width="60px" height="auto"></a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="products.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="db/index.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="slideshow.php">Cinemas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="findus.php">Reviews</a>
    </li>
  </ul>
</nav>
        </header>
        
        <main id="main-content"><br>
        <h1 class="abootus">Cinemas</h1>
        <p class="about-us">Below you will find the Cinemas!</p>
        </main>
        

        

        
        <div class="cth">
            
            <p id="GrandTotal">Grand total: €0</p><a href="details.html" class="button">Checkout</a><br>



        <div class="products"> <!-- the products -->
            
            <div class="productschild"><p>Odeon Blanchardstown Cinema</p> </div>
            <div class="productschild"><img src="website/images/cBlanch.jpg" alt="Blanchardstown Cinema" width="300" height="auto"></div>
            
            <form>
            <p>Price: €10</p>
            <label id="number1">Quantity:</label>
            <p id="total">Total: €0</p>
            <input type="number" min="0" id="firstNumber"  name="firstNumber">
            <input type="button" onClick="Multiply()" value="Add to Cart">
            </form>
            
            <div class="productschild"><p>Cineworld </p></div>
            <div class="productschild"><img src="website/images/cCineworld.jpg" alt="Cineworld Cinema" width="300" height="auto"></div>
            
            <form>
            <p>Price: €15</p>
            <label id="number2">Quantity:</label>
            <p id="total2">Total: €0</p>
            <input type="number" min="0" id="firstNumber2"  name="firstNumber2">
            <input type="button" onClick="Multiply()" value="Add to Cart">
            </form>
            
            <div class="productschild"><p>Vue cinema</p></div>
            <div class="productschild"><img src="website/images/cVue1.jpg" alt="Vue Cinema" width="300" height="auto"></div>
            
            <form>
            <p>Price: €10</p>
            <label id="number3">Quantity:</label>
            <p id="total3">Total: €0</p>
            <input type="number" min="0" id="firstNumber3"  name="firstNumber3">
            <input type="button" onClick="Multiply()" value="Add to Cart">
            </form>
            
            <div class="productschild"><p>Omniplex Cinema </p></div>
            <div class="productschild"><img src="website/images/cOmniplex.jpg" alt="cOmniplex Cinema" width="300" height="auto"></div>
            
            <form>
            <p>Price: €12</p>
            <label id="number4">Quantity:</label>
            <p id="total4">Total: €0</p>
            <input type="number" min="0" id="firstNumber4"  name="firstNumber4">
            <input type="button" onClick="Multiply()" value="Add to Cart">
            </form>
            
            <div class="productschild"><p>Tipperary Excel Heritage Co Ltd<br>AAAAAAAAAOOOOOOOOOOOOOOOOOOAAAAAAAAAAAAAAAAAAOOOOOOOOOOOOOAAAAAAA</p></div>
            <div class="productschild"><img src="website/images/cTipperary.webp" alt="Tipperary Excel Heritage Co Ltd" width="300" height="auto"></div>
            
            <form>
            <p>Price: €5</p>
            <label id="number5">Quantity:</label>
            <p id="total5">Total: €0</p>
            <input type="number" min="0" id="firstNumber5"  name="firstNumber5">
            <input type="button" onClick="Multiply()" value="Add to Cart">
            </form>
            
            <br>
            </div>
        </div>

         
    </div>

</body>
</html>