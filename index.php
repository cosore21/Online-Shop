<?php

session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSORE ONLINE STORES</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700&display=swap" rel="styleheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="header">
        <div class="container">

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
               <a href="cart.php"><img src="Images/Cart.png" width="60px" height="70px"></a>
                <img src="Images/menu--v1.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Market <br>A New Experience!</h1>
                    <p>Success isn't always about greatness.It's about consistency.<br>Consistent hardwork gains success.Greatness will come.</p>
                    <a href="products details.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="Images/Low Resolution Logo - Black Background.png" width="200%" height="60%">
                </div>
            </div>
        </div>

    </div>
    <!-----featured categories------>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="Images/Nike Airforce sneakers.webp" width="100%">
                </div>
                <div class="col-3">
                    <img src="Images/Bike.webp" width="100%">
                </div>
                <div class="col-3">
                    <img src="Images/Summit fashion heels.webp" width="70%">
                </div>
                <div class="col-3">
                    <img src="Images/24 inch china model tv.webp" width="70%">
                </div>
                <div class="col-3">
                    <img src="Images/category 2.jpg" width="100%">
                </div>
            </div>


        </div>
    </div>

    <!-----featured products------>
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Images/Balenciaga-sneakers-by-STYLEDUMONDE-Street-Style-Fashion-Photography_48A8125-700x467@2x.webp" width="100%">
                <h4> Balenciaga Sneakers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>

                <p>Ksh 1500</p>
            </div>
            <div class="col-4">
                <img src="Images/rugged.webp" width="100%">
                <h4>Heavy Jacket</h4>
                <div class="rating">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>Ksh 1800</p>
            </div>
            <div class="col-4">
                <img src="Images/Bike.webp" width="100%">
                <h4>Mountain Bike</h4>
                <div class="rating">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>Ksh 15,000</p>
            </div>
            <div class="col-4">
                <img src="Images/mlb_baseball_cap_7.webp" width="100%">
                <h4> Baseball cap </h4>

                <div class="rating">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>Ksh 780</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="Images/Full clothe.webp" width="100%">
                <h4>Men Outfit</h4>
                <div class="rating">

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>Ksh 8,000</p>
            </div>
            <div class="col-4">
                <img src="Images/Black Taxuedo suit.webp" width="100%">
                <h4>Black Merino Taxuedo Suit</h4>
                <div class=" rating ">

                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star-o "></i>
                </div>

                <p>Ksh 5,000</p>
            </div>
            <div class="col-4 ">
                <img src="Images/Reebook classic t-shirt.webp" width="100%">
                           <h4>Reebook classic t-shirt</h4>
                <div class="rating ">

                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star-o "></i>
                </div>

                <p>Ksh 400</p>
            </div>
            <div class="col-4 ">
                <img src="Images/Tshirts.webp" width="100% ">
                <h4>T-shirt</h4>

                <div class="rating ">

                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star-o "></i>
                </div>

                <p>Ksh 280</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="Images/55 inch HD tv.webp" width="100%">
                    <h4>55 inch Smart Tv</h4>
                    <div class="rating">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <p>Ksh 65,000</p>
                </div>
                <div class="col-4">
                    <img src="Images/Executive office chair.webp" width="100%">
                    <h4>Executive office chair</h4>
                    <div class="rating">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <p>Ksh 6,000</p>
                </div>
                <div class="col-4">
                    <img src="Images/New Apple Iphone 14.webp" width="100%">
                    <h4>New Iphone 14</h4>
                    <div class="rating">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Ksh 150,000</p>
                </div>
                <div class="col-4">
                    <img src="Images/Angelico cream trouser.webp" width="100%">
                    <h4>Angelico Cream Trouser</h4>

                    <div class="rating">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>

                    <p>Ksh 650</p>
                </div>
            </div>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="Images/Acer Laptop.png" class="offer-img">
                </div>
                <div class="col-2">
                  <p>Exclusively Available on Cosore <br>Online Stores Limited</p>
                   <h1>Acer Laptop</h1>
                    <small>Take a look at our fantastic selection of Acer laptops. A full HD screen means you won't be compromising when it comes to visuals - and we have a host of budget-friendly, high-quality gaming models in our range as well.Acer desktops are also available.</small>
                    <a href="laptops.html" class="btn">Order Now &#8594;</a>
                </div>

            </div>
        </div>
    </div>

    </div>
<!-----testimonials---->
 <div class="testimonials">
                    <div class="small-container">
                        <h2 class="title">Testimonials</h2>

                        <div class="row">
                            <div class="col-3">
                               <img src="Images/Screenshot_from_2022-11-16_15-43-03-removebg-preview.png" width="20">
                                <p>Absolutely amaizing great shopping experience,Fast delivery and Quality Products.</p>
                                    <img src="Images/Cosore.jpg" class="user">
                                     <h3>Clements Hernandez</h3>
                               </div>

                    <div class="col-3">
                     <img src="Images/Screenshot_from_2022-11-16_15-43-03-removebg-preview.png"width="20">
                        <p>I've had terrific user and customer experience with this site, the 1st site i've made and international purchase  and never had any problem,very easy and very good deals on items.</p>
                          <img src="Images/Ndiga_Shem-removebg-preview.png" class="user">
                       <h3>Shem Anthony</h3>

                    </div>

            <div class="col-3">

                <img src="Images/Screenshot_from_2022-11-16_15-43-03-removebg-preview.png"width="20">

                <p>Though still new to online shopping, I like this site ,the products are very good and pricing is very accomodative also you can live chat with producers and shipping is done faster</p>
                         <img src="Images/Screenshot from 2022-11-16 17-50-12.png" class="user">
               <h3>Bruno Khaliff</h3>
    </div>
         </div>
     </div>

<!------brands---->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="Images/Sony.jpeg" width="80" height="80">
            </div>
                <div class="col-5">
                    <img src="Images/Bata brand.png" width="80" height="80">
                </div>
                <div class="col-5">
                    <img src="Images/mpesa.webp" width="80" height="80">
                </div>
                <div class="col-5">
                    <img src="Images/Safaricom Brand].png" width="100">
                </div>
                <div class="col-5">
                    <img src="Images/Addidas.png" width="60" height="80">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!----footer---->
<?php
require 'footer.php';
?>

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
</body>

</html>
