<?php 
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/appointment.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Appointment Form</title>
</head>
<body class="Appointment_form">
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
    <div id="app-form">
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="phone" name="contact" id="contact" placeholder="Enter your contact">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="male"> Male
            <input type="radio" name="gender" id="female"> Female
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your E-mail">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" name="address" id="address" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="Date">Appointment Date</label>
            <input type="date" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="time">Appointment Time</label>
            <input type="time" name="time" id="time">
        </div>
            <button class="btn1" name="submit">Submit</button>
   </form>
</div>
<?php

if(isset($_POST['submit']))
{
    $count=0;
    $query="SELECT name from db1";
    $res=mysqli_query($db,$query);  

    while($row=mysqli_fetch_assoc($res))
    {
    if($row['name']==$_POST['name'])
    {
        $count=$count+1;
    }
    }
    if($count==0)
    {$sql="INSERT INTO `db1` (`name`, `contact`, `gender`, `email`, `address`, `date`, `time`) VALUES ('$_POST[name]','$_POST[contact]', '$_POST[gender]','$_POST[email]', '$_POST[address]', '$_POST[date]', '$_POST[time]');";  
    mysqli_query($db,$sql);
?>
  <script type="text/javascript">
    alert("Appointment Booked Successfully");
    </script>
<?php 
    }
    else{
        ?>
        <script type="text/javascript">
    alert("Data already exists !!");
    </script>
    <?php
    }
}
?>

?>
 </body>
</html>