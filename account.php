<?php
$servername = "localhost";
$username = "cosore";
$password = "dNk_CUDKuJM-SSYo";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$errors=array ("register"=>'',"login"=>'');
$sucess='';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if($_SERVER["REQUEST_METHOD"]=="POST"){









$fname =$_POST["fname"];
$lname =$_POST["lname"];
$email =$_POST["email"];
$password =$_POST["password"];
$cpassword =$_POST["cpassword"];

if($password===$cpassword) {
    $sql2 = "insert into userlogin (fname, lname, email, password) values('$fname','$lname', '$email', '$password')";
    if($conn->query($sql2) === TRUE) {
        $sucess="user created successful";
      } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $sucess="unable to create user";
      }


}
else{

    $sucess= "password do not match";
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
                <a href="cart.php"><img src="Images/Cart.png" width="60px" height="70px"></a>             <img src="Images/menu--v1.png" class="menu-icon" onclick="menutoggle()">
</div>
</div>
</div>

    <!--account-page-->
     <div class="account-page">
        <div class="containner">
            <div class="row">
                <div class="col-2">
                    <img src="Images/Low Resolution Logo - Black Background.png" width="100%">--->
                </div>
<div id="login-form" class="login-page">
    <div class="form-box">
        <div class="button-box">
            <div id="tbn"></div>
            <button type="button" onclick="login()" class="toggle-tbn">Login</button>
            <button type="button" onclick="register()" class="cart-page">Register</button>
</div>
<form id="login" class="input-group-login">
<div><?php echo $sucess ?></div>
<div><?php echo $errors['login'] ?></div>
    <input type="text" class="input-field" placeholder="Email" name="email" required>
    <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
    <input type="checkbox" class="check-box"><span class="Spen">Remember Me</span>
    <button type="submit" class="submit-tbn" name="todo" value="login">Login</button>
</form>
<form id="register" class="input-group-register"  method ="post" action="">
<div><?php echo $sucess ?></div>
    <div><?php echo $errors['register'] ?></div>
    <input type="text" class="input-field" placeholder="First Name" name="fname" required>
    <input type="text" class="input-field" placeholder="Last Name" name="lname" required>
    <input type="email" class="input-field" placeholder="Email" name="email" required>
    <input type="password" class="input-field" placeholder="Enter Password" name ="password" required>
    <input type="password" class="input-field" placeholder="Confirm Password" name= "cpassword"required>
    <input type="checkbox" class="check-box"><span class="Spen">I agree to the terms and conditions</span>
    <button type="submit" class="submit-tbn" name="todo" value="register">Register</button>
    <a href="login.php">login to account</a>

</form>
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
<script>
    var modal= document.getElementById("login-form");
    window.onclick=functions(event)
    {
        if (event.target == modal){
            modal.style.display = "none";
        }
    }
</script>
</div>

</body>

</html>
