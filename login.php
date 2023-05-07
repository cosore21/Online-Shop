<?php
$servername = "localhost";
$username = "cosore";
$password = "dNk_CUDKuJM-SSYo";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$errors=array("register"=>'',"login"=>'');
$sucess='';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"]=="POST"){

session_start();




$email =$_POST["email"];
$password =$_POST["password"];

$sql= "
select * from  userlogin where email ='$email';
";

$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($password==$row['password']){
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['fname'];
            $_SESSION['email']=$row['email'];
            header("Location:index.php");
        }
        else{
            $sucess="invalid login credentials";
        }
    }
}
else{
    $sucess="user does not exist";
}

}



?>


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
<div class="account-page">

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
                <a href="cart.php"><img src="Images/Cart.png" width="60px" height="70px"></a>            <img src="Images/menu--v1.png" class="menu-icon" onclick="menutoggle()">
            </div>

    </div>
    <!------account-page
  <div class="account-page">
        <!--<div class="containner">
            <div class="row">
                <div class="col-2">
                    <img src="Images/Low Resolution Logo - Black Background.png" width="100%">
                </div>-->
<div id="login-form" class="login-page">
    <div class="form-box">
        <div class="button-box">
            <div id="tbn">Login</div>
          <!--  <button type="button" onclick="login()" class="toggle-tbn">Login</button>
            <button type="button" onclick="register()" class="cart-page">Register</button>-->
</div>
<form id="login" class="input-group-login" method="POST" action="">
<div><?php echo $sucess ?></div>
<div><?php echo $errors['login'] ?></div>
    <input type="text" class="input-field" placeholder="Email" name="email" required>
    <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
    <input type="checkbox" class="check-box"><span class="Spen">Remember Me</span>
    <button type="submit" class="submit-tbn" name="todo" value="login">Login</button>
    <a href="account.php">create account</a>
</form>

</div>

<!----footer---->
<?php
require 'footer.php';
?>
<!-----js for toggle menu---->
<!-- <script>
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
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
    function register()
    {
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
    }
</script>
<script> -->
    var modal= document.getElementById("login-form");
    window.onclick=functions(event)
    {
        if (event.target == modal){
            modal.style.display = "none";
        }
    }
</script>
</div>
</div>
</div>
</div>

</body>

</html>
