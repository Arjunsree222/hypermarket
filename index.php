<?php
include_once('connection.php');
$query = "select * from products";
$result = mysqli_query($conn, $query);

?>
<?php

?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>online hypermarket</title>
        <link rel="stylesheet" href="style.css">
        <link rel="https://fonts.googleap.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    </head>
    <body>
        <div class="header">
        
        <div class="container">
            <div class="navbar">
            <div class="logo">
               <a href="index.html"> <img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.html">products</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">contact</a></li>
                    <li><a href="account.html">account</a></li>
                
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        <div class="row">
            
            <div class="col-2">
                <h1>SHOP WITHOUT GOING OUT!<br>BREAK THE CHAIN</h1>
                <p>shop wiith discounts</p>
                <a href="" class="btn">Explore Now &#8594;</a>
                
            </div>
            <div class="col-2">
                <img src="images/image1.png">
            </div>
        </div>
        </div>
        </div>
        
        
        <!-------cateogory------>
        
        <div class="categories">
            <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                
                </div>
            </div>
            </div>
            
        </div>
        
         <!-------products------>
        
        <div class="small-container">
            <h2 class="title">Featured products</h2>
    
            
            <div class="row">
    <?php 
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
                <div class="col-4">
                    <?php 
                    ?>
                    <a href='productdetails.php?var=<?php echo $row['image']; ?>'><img src="<?php echo $row['image']; ?>"></a>
                    
                    <h4><?php echo $row['name']; ?></h4>
                    <p><?php echo $row['price']; ?></p>
                    
                
                </div>
                <?php   
        
    }
      ?> 
            
            </div>
            
            <h2 class="title">Latest products</h2>
                <div class="row">
                <div class="col-4">
                    <img src="images/product-5.jpg">
                    <h4>shoe</h4>
                    <p>1500 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-6.jpg">
                    <h4>puma tshirt</h4>
                    <p>2500 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-7.jpg">
                    <h4>soaks</h4>
                    <p>200 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-8.jpg">
                    <h4>watch</h4>
                    <p>1500 RS</p>
                
                </div>
            
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4>wrist watch</h4>
                    <p>5500 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-10.jpg">
                    <h4>sports shoe</h4>
                    <p>1300 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-11.jpg">
                    <h4>white shoe</h4>
                    <p>3000 RS</p>
                
                </div>
                <div class="col-4">
                    <img src="images/product-12.jpg">
                    <h4>gene</h4>
                    <p>1200 RS</p>
                
                </div>
            
            </div>
        </div>
        <!-------offer------>
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively Available on Ehypermarket</p>
                        <h1>Smart band 5</h1>
                        <small>you can buy now an exclusive Mi smart band with featured 39.0l larger AMOLED color full touch display whithadjusting brightness.<br></small>
                        <a href="" class="btn">Buy Now &#8594</a>
                    </div>
                </div>
            </div>
        </div>
        <!-------brands------>
        <div class="brands">
        <div class="small-container">
            <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                <img src="images/logo-philips.png">
                </div>
            
            </div>
            </div>
        
        </div>
        
        <!-------footer------>
        <div class="footer">
        <div class="container">
            <div class="row">
            <div class="footer-col-1">
                <h3>Download aur app</h3>
                <p>Download app for android.</p>
                <div class="app-logo">
                <img src="images/play-store.png">
                </div>
                </div>
                <div class="footer-col-2">
                <a href="adminlogin.html"><img src="images/logo-white.png"></a>
                <p>make a happy shopping</p>
                </div>
                <div class="footer-col-3">
                <h3>Useful Links</h3>
                    <ul>
                        <li>Coupon</li>
                        <li>Blog Post</li>
                        <li>Return policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                <h3>Follow us</h3>
                    <ul>
                        <li>Factebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
                
            
            </div>
            <hr>
            <p class="copyright">Copyright 2021 - AKNM GPTC</p>
            </div>
        
        </div>
        <!-------js for toggle menu------>
        <script>
            var MenuItems = document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight = "0px";
            
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
            }
        </script>
        
    </body>
</html>