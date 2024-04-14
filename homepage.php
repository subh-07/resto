<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online food order</title>
    <link rel="stylesheet" href="online.css">
    <link rel="stylesheet" media="screen and (max-width:1150px)" href="responsive.css">
    <link rel="stylesheet" media="(min-width:750px) and (max-width:1150px)" href="responsive2.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="./foodlogo.jpg" alt="logo">
        </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
         <div class="search">
            <form action="">
                <input type="search" placeholder="search here..." name="search_data">
            </form>
            <a href="http://localhost/login/logout.php" id="login">Logout</a>
         </div>
    </nav>
    <section id="home">
        <h3 class="hclass">Welcome to my online Meal</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore illum omnis libero tempora dolor,
            voluptate blanditiis quis eius amet illo saepe. Vitae, distinctio perspiciatis. Eligendi harum rem tempora
            iusto molestiae voluptatem voluptatibus assumenda beatae?</p>
        <button class="btn">ordernow</button>
    </section>
    <div class="secblock">
        <h3 class="hclass">Our Services</h3>
        <section class="Service">
            <div id="service">
                <img src="./biryani.jpg">
                <button class="sbtn">Dine-in</button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi iure fugit alias rerum
                    quaerat.
                    Maiores iusto necessitatibus ab iste saepe amet, eaque non voluptatem, eius quisquam repellendus nam
                    adipisci molestiae rerum.</p>
            </div>
            <div id="service">
                <img src="./take.jpg">
                <button class="sbtn">Take-away</button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi iure fugit alias rerum
                    quaerat.
                    Maiores iusto necessitatibus ab iste saepe amet, eaque non voluptatem, eius quisquam repellendus nam
                    adipisci molestiae rerum.</p>
            </div>
            <div id="service">
                <img src="./homedelivery.jpg">
                <button class="sbtn">Home Delivery</button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi iure fugit alias rerum
                    quaerat.
                    Maiores iusto necessitatibus ab iste saepe amet, eaque non voluptatem, eius quisquam repellendus nam
                    adipisci molestiae rerum.</p>
            </div>
    </div>
    </section>
    <div id="client_container">
        <h3 class="hclass">Our Clients</h3>
        <section id="client">

            <img src="./apple.jpg" alta="apple">


            <img src="./microsoft.jpg" alta="apple">


            <img src="./hp.jpg" alta="apple">

            <img src="./Instagram-Logo-PNG-Free-Download.png" alta="apple">

            <img src="./facebook logo.png" alta="apple">

            <!-- <img src="../projects/Image/zomato.jpg" alta="apple"> -->
        </section>
    </div>
    <section id="contact">
        <h3 class="hclass">contact us</h3>
        <forms action="">
            <div id="name" class="contactform">
                First-Name:<input type="text" placeholder="" name="fname">
            </div>
            <div id="lname" class="contactform">
                Last-Name:<input type="text" placeholder="" name="lname">
            </div>
            <div id="Email" class="contactform">
                Email:<input type="email" name="Gmail">
            </div>
            <div id="feedback" class="contactform">
                <textarea name="feedback" placeholder="Enter your feedback"></textarea>
            </div>
        </forms>
    </section>
    <section id="about">
            <img src="./DSC_2842.JPG" alt="founder">
            <table>
                <thead>
                  <tr class="row">
                    <th >Name</th>
                    <th >Designation</th>
                   <th >Skill</th>
                   <th >Age</th>
                  </tr>
                </thead>
                <tbody>
                   <tr class="column">
                    <td>Subhrakanta Baral</td>
                    <td>CEO</td>
                    <td>Fullstack Developer</td>
                    <td>19</td>
                   </tr>
                </tbody>
            </table>
    </section>
    <footer>
        
        Copyright &copy; www.TasteofOdisha.in alright reserved!
    </footer>
</body>

</html>