<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifecare Hospitals</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="Submitpg.html"> 
    <link rel="stylesheet" href="CSS/submit.css">
    <link rel="stylrsheet" href="appointment-form.php">
    <link rel="stylesheet" href="new.html">
    <link rel="stylesheet" href="CSS/appointment.css">
    <link href="https://fonts.google.com/specimen/Barlow+Condensed" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 619 px)" href="CSS/phone.css">
    
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="Image/logo.jpg" alt="logo" height="110px">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a href="index.php"></li>
            <li class="item"><a href="login.html">Login</a href="login.html"></li>
            <li class="item"><a href="services">Services</a href="services"></li>
            <li class="item"><a href="about us">About Us</a href="about us"></li>
            <li class="item"><a href="contact us">Contact Us</a href="contact us"></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">WELCOME TO LIFECARE HOSPITALS</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quae possimus facere! </p>
        <p>Tenetur deserunt tempora architecto ad maxime totam!</p>
        <button class="btn"><a href="appointment-form.php">Book Appointment</a href="appointment-form.php"></button>
    </section>
    <section class="sevices-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="Image/emergency.jpg" alt="img1">
                <h2 class="h-secondary center">Emergency Room </h2>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quos
                    provident excepturi nihil ratione,modi reiciendis qui itaque veritatis deserunt
                    accusamus, saepe magnam vel sed quis quam placeat perferendis</p>
            </div>
            <div class="box">
                <img src="Image/xray.jpg" alt="img2">
                <h2 class="h-secondary center">X-ray </h2>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quos
                    provident excepturi nihil ratione,modi reiciendis qui itaque veritatis deserunt
                    accusamus, saepe magnam vel sed quis quam placeat perferendis</p>
            </div>
            <div class="box">
                <img src="Image/blood.jpg" alt="img3">
                <h2 class="h-secondary center">Blood Bank</h2>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quos
                    provident excepturi nihil ratione,modi reiciendis qui itaque veritatis deserunt
                    accusamus, saepe magnam vel sed quis quam placeat perferendis</p>
            </div>
        </div>
    </section>

    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="Image/nephro.jpg" alt="nephro">
                <h2 class="h-secondary center">NEPHROLOGY</h2>  
            </div>
            <div class="client-item">
                <img src="Image/neuro.jpg" alt="neuro">
                <h2 class="h-secondary center">NEUROLOGY</h2> 
            </div>
            <div class="client-item">
                <img src="Image/cardio.jpg" alt="cardio">
                <h2 class="h-secondary center">CARDIOLOGY</h2>  
            </div>
            <div class="client-item">
                <img src="Image/histopath.jpg" alt="histopath">
                <h2 class="h-secondary center">PATHOLOGY</h2>   
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="Submitpg.html">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Contact No.</label>
                    <input type="phone" name="name" id="name" placeholder="Enter your contact">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="name" id="name" placeholder="Enter your E-mail">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <textarea name="address" name="name" id="name" cols="30" rows="10"></textarea>
                </div>
                <button class="btn1">Submit</button>
                
            </form>
        </div>
</section>
<footer>
    <div class="center">
        Copyright &copy; www.lifecarehospitals.com. All rights reserved
    </div>
</footer>
</body>
</html>