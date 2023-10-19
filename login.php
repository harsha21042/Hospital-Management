<?php
 include "connection.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login Page</title>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="Image/logo.jpg" alt="logo" height="110px">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a href="home"></li>
            <li class="item"><a href="services">Services</a href="services"></li>
            <li class="item"><a href="about us">About Us</a href="about us"></li>
            <li class="item"><a href="contact us">Contact Us</a href="contact us"></li>
        </ul>
    </nav>
    <section id="login-form-background">
        <div class="log-img">
            <div id="box">
                <form name="login" action="" method="post">
                    <h1 id="login">Login</h1><br>
                    <input class="form-control" type="text" name="username" placeholder="Username"><br>
                    <input class="form-control" type="password" name="password" placeholder="Password"><br><br>
                    <button class="btn1" name="login">Login</button>
                        <br><br>
                        <a href="" id="fp">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <a href="signup.html" id="fp1">Sign Up</a>
                      </p>
                </form>
            </div>
        </div>
    </section>
<?php 
 if(isset($_POST['login']))
 {
    $count=0;
    $result=mysqli_query($db,"SELECT * FROM `db1` WHERE username='Alex Bell' && password='Philipines';");
    $count=mysqli_num_rows($result);

    if($count==0)
    {
        ?> 
        <script type="text/javascript">
            alert("Username and password doesn't match.");
            </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            window.location="index.php"
            </script>
            <?php 
            
    }
    
 }

?>

</body>

</html>