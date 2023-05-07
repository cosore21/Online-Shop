<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSORE ONLINE STORES SHOPPING CART</title>
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
                </nav>
                <img src="Images/Cart.png" width="60px" height="70px">
            <img src="Images/menu--v1.png" class="menu-icon" onclick="menutoggle()">
            </div>

    </div>
<div class="wrapper">
    <div class="background-color">
        <div class="bg-1"></div>
        <div class="bg-2"></div>

    </div>
    <div class="about-container">
        <div class="image-container">
            <img src="Images/Screenshot_from_2022-10-02_12-29-58-removebg-preview.png" width="100%">
        </div>
<div class="text-container">
    <h1>About Us</h1>
    <p>we are very experienced in online marketing</p>
    <a href="">Read More</a>

</div>
    </div>

</div>

    </div>
       
       <!---footer---> 
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
</script>
</body>

</html>