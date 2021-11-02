<?php
$pname = $_GET['var'];
session_start();
/*echo $_SESSION["username"];*/

include_once('connection.php');
$query = "select * from products where image='$pname'";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>All products - online hypermarket</title>
        <link rel="stylesheet" href="style.css">
        <link rel="https://fonts.googleap.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    </head>
    <body>
        
        <div class="container">
            <div class="navbar">
            <div class="logo">
                <a href="index.html"> <img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">products</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">contact</a></li>
                    <li><a href="account.html">account</a></li>
                
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        
        </div>
        
        
        <!-------single product details------>
        
         <div class="small-container single-product">
        <div class="row">
                 <div class="col-2">
                <img src="<?php echo $pname ?>" width="100%">
            </div>
            <div class="col-2">
                <p></p>
                
                <h1><?php echo $row['name']; ?></h1>
                <h4><?php echo $row['price']; ?></h4>
                <form action="cartupload.php?var=<?php echo $row['image']; ?>" method="post" enctype="multipart/form-data">
                Enter the size / quantity : <input type="text" name="size"><br>
                   
                <input type="submit" name="submit" value="Add To Cart" class="btn">
                    </form>
                <h3>Product details</h3><br>
                 
                
                <p><?php echo $row['details']; ?></p>
            </div>
             </div>
            
        </div>
        
        <!-------title------>
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View more...</p>
            </div>
        </div>
        
        
        
        
        <!-------products------>
        <div class="small-container">
            
            
            <div class="row">
                
                <div class="row">
                
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
                <img src="images/logo-white.png">
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