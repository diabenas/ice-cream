<?php
// Start the session
session_start();
if(($_SESSION["name"]!='sa'||  $_SESSION["password"]!='sa')&&($_SESSION["name"]!='user2'|| $_SESSION["password"]!='user2')&&($_SESSION["name"]!='user1'|| $_SESSION["password"]!='user1'))
{
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Gelato </title>
        <link rel="stylesheet" type="text/css" href="style.css">
	<form>
		<header id="hr">
			<p id="img"> <img src="./img/Gelato.logo.png" alt="logo"> </p>
		    <h1 id="top">Gelato</h1>
			<h2 id="top1"> <a href="Login.html"><img src="./img/login.logo.png" alt="logo"></a></h2>
      <h3 id="top2"> <a href="shoppigcart.php"><img src="./img/shopping cart.png"alt="shoppingcart"></a></h3>
	    </header>

         <body>   
             <nav id="navbar">
	      	    <ul class="navcontent">
			        <li><a href="pagehome.php">Home</a></li>
	     	        <li><a href="AboutUs.html">AboutUs</a></li>
			        <li><a href="Prices.php">Prices</a></li>
			        <li><a href="ContactUs.html">ContactUs</a></li>
		       </ul>
            </nav>
         </body>
    </form>
	<main id="main">
	  <form>
		<div class="container">
            <div class="card">
              <div class="card__header">
                <img src="./img/icloo_fff.png" alt="card__image">
              </div>
              <div class="card__body">
                <h4>Igloo Cotton Candy Ice Cream 120ml Cone</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5ly.d</h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/icloo_q.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>Igloo Balou Chocolate Ice Cream 120ml Cone</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5ly.d</h3>
              </div>
            </div>
            <div class="card">
              <div class="card__header">
                <img src="./img/icloo_fffffffff.jpg" alt="card__image">
              </div>
              <div class="card__body">
                <h4>Igloo Balou Vanilla Ice Cream 120ml Cone</h4>
              </div>
              <div class="card__footer">
                    <h3>Price: 2.5ly.d</h3>
              </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/icloo-cookies.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>Igloo Cookies Cream Ice Cream 100ml</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 4ly.d</h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/icloo_icecream.jpg" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>Igloo Evens Vanilla Ice Cream 90ml</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 3ly.d</h3>
                </div>
            </div>
            <div class="card">
                <div class="card__header">
                  <img src="./img/ice_choo.jpg" alt="card__image">
                </div>
                <div class="card__body">
                  <h4>Igloo Evens Chocolate Ice Cream 90ml</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 3ly.d</h3>
                </div>
            </div>
			<div class="card">
                <div class="card__header">
                  <img src="./img/igloo-choo.png" alt="card__image">
                </div>
                <div class="card__body">
                  <h4>Igloo Chocolate Ice Cream 1 Ltr</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 13ly.d</h3>
                </div>
            </div>
			<div class="card">
                <div class="card__header">
                  <img src="./img/icloof.png" alt="card__image" >
                </div>
                <div class="card__body">
                  <h4>Igloo Vanilla Ice Cream 1 Ltr</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 13ly.d</h3>
                </div>
            </div>
			<div class="card">
                <div class="card__header">
                  <img src="./img/icloo_f.png" alt="card__image">
                </div>
                <div class="card__body">
                  <h4>Igloo Strawberry Ice Cream 1 Ltr</h4>
                </div>
                <div class="card__footer">
                      <h3>Price: 13ly.d</h3>
                </div>
            </div>
        </div>
	</form>
   </main>
   <footer>
    <div id="footer">
		  <h4>© 2022-2023 GELATO </h4>
	    </div>
   </footer>
</html>