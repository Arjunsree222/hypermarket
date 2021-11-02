

<?php
include_once('connection.php');
$query = "select * from cart";
$result = mysqli_query($conn, $query);
session_start();

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
        
        
        
        
        <!-------cart items details------>
        <div class="small-container cart-page">
        <table>
            <tr>
            <th>Product</th>
                <th>Quantity / Size</th>
                <th>sub total</th>
            </tr>
            <?php 
            $res = 0;
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?php echo $row['image']; ?>">
                        <div>
                            <p><?php echo $row['name']; ?></p>
                            <small>Price : <?php echo $row['price']; ?></small><br>
                            
                            <a href="removeitem.php?id=<?php echo $row['image']; ?>">Remove</a>
                            
                        </div>
                    </div>
                    
                </td>
                <td><?php echo $row['size']; ?></td>
                <?php $price = $row['price']; ?>
                <?php $s = $row['size']; 
                $p = $row['price'];
                    $t = $s * $p;
                ?>
                <?php $res = $res + $t; ?>
                <td><?php echo $t; ?></td>
                <?php $tax = 30; ?>
            </tr>
            <?php   
        
    }
      ?>
            </table>
            <div class="total-price">
            
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td ><?php echo $res; ?></td>
                    </tr>
                    <tr>
                        <td>tax</td>
                        <td><?php echo $tax; ?></td>
                    </tr>
                    <tr>
                        <?php $sum = $res + $tax; ?>
                        <td>Total</td>
                        <td><?php echo $sum; ?></td>
                    </tr>
                    
                                                          
  
                
                </table>
                </div><a href="" class="btn">Buy now</a>
            
            </div>
            
        
        
        
     <script>
            var MenuItems = document.getElementById("numb");
         
            
            
        </script>   
        
        
        
        
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