<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>Apna dhaba</title>
</head>
<body class="">
    
    <div class="container">
        <header>
            <div class="title">APNA DHABA</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                </svg>
                <span>0</span>
            </div>
        </header>
        <div class="listProduct">

        </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>
    <footer>
      <div class="footer-content">
         
        <h3>We Serve The Best</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid fuga, ad iste dolor vel sint consequatur consectetur ea dolorum, voluptate id accusantium debitis quasi vitae pariatur veniam ab libero ex nam ullam omnis, alias ut nostrum! Delectus enim veritatis soluta perferendis reiciendis, quod quam. Voluptates doloremque esse veniam? Quis, omnis!</p>
        
      </div>
  </footer>
    <script src="app.js"></script>
</body>
</html>