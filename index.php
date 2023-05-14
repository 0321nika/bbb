<?php
session_start();
include_once("config.php");
?>
<?php

if(isset($_SESSION['nika']))
{
if(isset($_POST['en'])){
    $_SESSION['nika']="En";
}

if(isset($_POST['ka'])){
    $_SESSION['nika']="Ka";
}
}
else {
  $_SESSION['nika']="Ka";
}
if($_SESSION['nika']=="Ka"){
  $result = mysqli_query($mysqli, "SELECT ka FROM language WHERE section = 'navbar1' ");
while($res = mysqli_fetch_array($result)) { 
  $navbar1= $res['ka'];
}
}
if($_SESSION['nika']=="En"){
  $result = mysqli_query($mysqli, "SELECT en FROM language WHERE section = 'navbar1' ");
while($res = mysqli_fetch_array($result)) { 
  $navbar1= $res['en'];
}
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=4, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>bluecollar</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header">
          <div class="hours">
            <span>Opening hours 06:00 to 20:00</span>
          </div>
          <div class="icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-pinterest"></i>
            <form action="" method="post">
                <input type="submit" name="en" value="En">
                <input type="submit" name="ka" value="Ka">
            </form>
          </div>
        </div>
      </div>
    </header>
    <div class="header2">
      <div class="container">
        <div class="d-flex">
          <a href="#"
            ><img class="logo" src="./images/BlueCollar.png" alt="logo"
          /></a>
          <div class="iconss">
            <div class="message">
              <i class="fa-regular fa-envelope"></i>
              <div class="message-texts">
                <h2>Mail us</h2>
                <p>info@example.com</p>
              </div>
            </div>
            <div class="phone">
              <i class="fa-solid fa-phone"></i>
              <div class="phone-texts">
                <h2>Call Us</h2>
                <p>+ 01 569 896 654</p>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar">
          <nav>
            <ul class="mainMenu">
              <li><a href=""><?=$navbar1?></a></li>
              <li><a href="">About Us</a></li>
              <li><a href="">Pages</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Contact Us</a></li>
              <div class="iconsm">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-pinterest"></i>
              </div>
              <div class="closeMenu">
                <i class="fa fa-times"></i>
              </div>
            </ul>
            <a class="openMenu">
              <i class="fa fa-bars"></i>
            </a>
          </nav>
          <h2>Have any questions?</h2>
        </div>
      </div>
    </div>
    <div class="bg-image">
      <div class="container text-section">
        <div class="text-section-items">
          <div class="firstText">
            <img src="./images/Vector (1).svg" alt="" />
            <p>we provide electric services for industrial project</p>
          </div>
          <h2>We Are profesional quality services</h2>
          <a href="" class="button">Our Services</a>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="provideFuture">
          <img src="./images/Photo.jpg" alt="" />
          <div class="textSection">
            <h2>We Provide Your Future</h2>
            <p>
              Pellentesque vehicula eros neque, maximus mattis est sagittis
              Nulla facilisi. In sed pretium metus. Proin pretium id urna sit
              amet tincidunt. Interdum et malesuada. In pulvinar viverra diam,
              nec rutrum mauris maximus non. Aenean sed quam tristique,
              facilisis est ac, interdum velit.
            </p>
            <div class="calendar">
              <div class="box">
                <strong>35</strong>
                <span>Years Of Experience</span>
              </div>
              <div class="texts">
                <span>- Sed varius ipsum lacus</span>
                <span>- Pulvinar tortor dignissim sit amet.</span>
                <span>- Quisque tristique diam quis placerat</span>
                <span>- Aliquam id ante suscipi fringilla.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mainServices">
      <div class="container mainServicesContainer">
        <h2>Professional Main Services</h2>
        <p class="mainServices-paragraph">
          Pellentesque vehicula eros neque, maximus mattis est sagittis Nulla
          facilisi. In sed pretium metus. Proin pretium id urna sit amet
          tincidunt.
        </p>
        <div class="mainServices-checkboxes">
          <div class="checkbox active" id="comercial">
            <img src="./images/houses.png" alt="houses" />
            <p>Comercial</p>
          </div>
          <div class="checkbox" id="residential">
            <img src="./images/Home Automation.png" alt="houses" />
            <p>Residential</p>
          </div>
          <div class="checkbox" id="industrial">
            <img src="./images/houses.png" alt="houses" />
            <p>Industrial</p>
          </div>
        </div>
        <div class="checkboxDescription comercial">
          <div class="left">
            <h3>Comercial</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              incididunt ut labore et dolore  magna aliqua. Ut enim ad minimquis
              nostrud exercitation ullamco <br/> <br/> laboris  nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur.ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="#" class="button m-top">Read More</a>
          </div>
          <div class="right">
            <img src="./images/Photo.png" alt="" />
          </div>
        </div>
        <div class="checkboxDescription residential hidden">
            <div class="left">
              <h3>residential</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                incididunt ut labore et dolore  magna aliqua. Ut enim ad minimquis
                nostrud exercitation ullamco <br/> <br/> laboris  nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="#" class="button m-top">Read More</a>
            </div>
            <div class="right">
              <img src="./images/Photo.png" alt="" />
            </div>
          </div>
          <div class="checkboxDescription industrial hidden">
            <div class="left">
              <h3>industrial</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                incididunt ut labore et dolore  magna aliqua. Ut enim ad minimquis
                nostrud exercitation ullamco <br/> <br/> laboris  nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="#" class="button m-top">Read More</a>
            </div>
            <div class="right">
              <img src="./images/Photo.png" alt="" />
            </div>
          </div>
      </div>
    </section>
    

    <script src="./main.js"></script>
  </body>
</html>


