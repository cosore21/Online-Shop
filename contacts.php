<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSORE ONLINE STORES SHOPPING CART</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700&display=swap" rel="styleheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
   <div class="header">
    <div class="container"></div>
        
<div class="navbar">
                <div class="Logo">
                    <img src="Images/Screenshot_from_2022-10-02_14-22-04-removebg-preview.png" width="30%">
                </div>
                <nav>
                    <ul id="MenuItems">
                       
                    <li><a href="index.php">HOME</a></li>
                        <li><a href="products.php">PRODUCTS</a></li>
                        <li><a href="about us.php">ABOUT US</a></li>
                        <li><a href="contacts.php">CONTACTS</a></li>
                        <li><a href="account.php">ACCOUNT</a></li>

                    </ul>
                </nav>
                <img src="Images/Cart.png" width="60px" height="70px">
            <img src="Images/menu--v1.png" class="menu-icon" onclick="menutoggle()">
            </div>


        <!-------contact us-->
<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>We have compiled a list of both our email addresses and contacts together. This list contains Cosore Online Store, Address, Phone Number & Email. If you are looking for our site Contact Details, the information below is quite helpful and can be used positively.</p>
    </div>
    <div class="contain">
        <div class="contactInfo">
            <div class="box">
                <img src="Images/download.png" width="10%">
                    <div class="text">
                        <h3>Mobile Phone</h3>
                        <p>+254 700 096743</p>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Images/download.jpeg" width="10%">
                    
  
                    <div class="text">
                            <h3>Email</h3>
                            <p>costores12@gmail.co.ke</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="Images/Instagram_logo_2022.svg" width="10%">
        
                        <div class="text">
                                <h3>Instagram</h3>
                                <p>@costorestores</p>
                            </div>
                            </div>
                            <div class="box">
                                <img src="Images/Twitter-logo.svg.png" width="10%">
                
                                    <div class="text">
                                        <h3>Twitter</h3>
                                        <p>@costore_market</p>
                                </div>
                                </div>

                </div>

    <div class="contactForm">
        <form>
            <h2>Send Message</h2>
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Full Name</span>
            </div> 
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Email</span>
            </div>
            <div class="inputBox">
<textarea required="required"></textarea>             
   <span>Type your Message....</span>
            </div>
            <div class="inputBox">
                <button type="submit" class="btn">SEND</button>
                
            </div>
        </form>
    </div>
</div>


</section>
</div></div>
<!----footer---->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android Mobile Phone</p>
            <div class="app-logo">
             <img src="Images/App store.jpeg"> 
            </div>
            
            </div>
            <div class="footer-col-2">
                <h3>Download Our App</h3>
                <p>Download App for Android Mobile Phone</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Join Affiliate</li>
                    <li>Return Policy</li>

                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us On</h3>
                <ul>
                    <li>Twitter</li>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Telegram</li>

                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2022-Online market</p>
    </div>
</div>
<!-----js for toggle menu---->
<script>
    var MenuItems=document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight=="0px")
        {
            MenuItems.style.maxHeight="200px";

        }
        else{
            MenuItems.style.maxHeight=="0px";
        }

    }

</script>
</script>
</body>

</html>