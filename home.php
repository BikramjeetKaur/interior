<?php
session_start();
error_reporting(0);
$user_login =   $_SESSION['name'];

if ($user_login == true) 
{

}else {
  header('location:userlogin.php');
}
?>
<?php
include('includes/connect.php');
?>


<form action="" method="post" class="mb-2">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- SWIPRE-CSS-LINK -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .swiper-container {
        width: 100vw;
        height: 90vh;
      }
      body{
        overflow:scroll;
      }

    .wrapper
      {
        cursor:none;
      }
      .swiper-slide {
        text-align: center;
        font-size: 18px;


        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
html{
  overflow-y: scroll;
}
      .pic1 {
        width: 100%;
        height: 100%;
        background-image: url(images/bedRoom.jpg);
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.523);
        background-blend-mode: darken;
        background-attachment:fixed;
        background-position:center;
       
        
      }
      .pic2 {
        width: 100%;
        height: 100%;
        background-image: url(images/interior_design_sofa.jpg);
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.523);
        background-blend-mode: darken;
        background-attachment:fixed;
        background-position:center;
        
      }

      .pic3 {
        width: 100%;
        height: 100%;
        background-image: url(images/interior_outdoor.jpg);
        background-size:cover;
        background-color: rgba(0, 0, 0, 0.523);
        background-blend-mode: darken;
        background-attachment:fixed;
        background-position:center;
        
      }


      .swiper-button-prev,
      .swiper-button-next {
        color: #009432;
        cursor: none;
      }

      .swiper-button-prev,
      .swiper-button-next {
       cursor:none;
      }

      .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
      .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px);
        background-color: #009432;
      }

      .mySwiper {
        cursor: none;
      }

      .cursor {
        width: 30px;
        height: 30px;
        background-color: #009432;
        /* border:3px solid #dc3545; */
        border-radius: 50%;
        position: absolute;
        z-index: 10;
        transition: .1s all linear;
        mix-blend-mode:difference;
      }

      .img-h1 {
        position: absolute;
        font-size: 2vw;
        -webkit-text-stroke: 5px white;
        color: transparent;

      }
      .swiper-slide .btn{
        color:white;
        text-decoration:none;
        cursor:none;
        padding:10px;
        outline:2px solid #009432;
        position:relative;
        z-index: 100;
      }
      .swiper-slide .btn:hover
      {
        color:white;
        outline:none;
      }
      .swiper-slide .btn::before
      {
        position:absolute;
        content:'';
        top:0%;
        left:0%;
        width:0%;
        height:100%;
        border-radius:5px;
        background-color:#009432;
        transition:.3s ease-in;
        z-index: -1;
      }
      .swiper-slide .btn:hover::before
      {
        width: 100%;
      }

      .section{
       text-align: center;
        width: 99.6%;
        height: 100vh;
  
        position:absolute;
        z-index: 100;
      }
      .section2{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        width: 99%;
        height:35rem;
      
        position:absolute;
        z-index: 100;
      }
      .section2 img:hover {
        scale: 1.1;
      }
    </style>


  </head>

  <body >



    <?php 
    include("menubar.php");  
    ?>

    <!-- Swiper -->
    <div class="wrapper">
    <div class="cursor"></div>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide pic1 d-flex flex-column">
          <h1 class="text-white fw-bolder ">Provides Best Furniture – To Make You Smile</h1>
          <br>
          <a href="about.php" class="btn">Why Choose Us</a>
          
        </div>
        <div class="swiper-slide pic2 d-flex flex-column">
        <h1 class="text-white fw-bolder">Prices So Low, You’ll Think We’re Crazy</h1>
        <br>
        <a href="Bedroom.php" class="btn">Our Products</a>
       
        </div>
        <div class="swiper-slide pic3 d-flex flex-column">
        <h1 class="text-white fw-bolder">Where Every Checkout Is a Happy Ending.</h1>
        <br>
        <a href="feedback.php" class="btn">Give a Feedback</a>
        </div>


      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    </div>

    <div class="section  ">
    <h1>Our Products</h1>
      <div class=" section2 ms-2">
    
<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Fresh_Produce.php"><img style="width: 25rem;height:15rem" src="images/bedroom_color_scheme4.jpg" class="card-img-top" alt="..."></a>

</div>



<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;">
<a href="Graints.php"><img style="width: 25rem;height:15rem" src="images/dining_room_Design4.jpg" class="card-img-top" alt="..."></a>

</div>



<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Baking_Goods.php"><img style="width: 25rem;height:15rem" src="images/DressingRoom_Design1.jpg" class="card-img-top" alt="..."></a>

</div>




<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Daily.php"><img style="width: 25rem;height:15rem" src="images/Pool_Design2.jpg" class="card-img-top" alt="...">
</a>
</div>

<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Freezer.php"><img style="width: 25rem;height:15rem" src="images/Bathroom_design3.jpg" class="card-img-top" alt="..."></a>

</div>

<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Freezer.php"><img style="width: 25rem;height:15rem" src="images/living_room_design4.jpg" class="card-img-top" alt="..."></a>

</div>
<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Freezer.php"><img style="width: 25rem;height:15rem" src="images/Kitchen.jpg" class="card-img-top" alt="..."></a>

</div>
<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Freezer.php"><img style="width: 25rem;height:15rem" src="images/Kids_room_design5.jpg" class="card-img-top" alt="..."></a>

</div>
<div class="card" style="width: 25rem;height:15rem; margin-bottom:30px;" >
<a href="Freezer.php"><img style="width: 25rem;height:15rem" src="images/temple_layout3.jpg" class="card-img-top" alt="..."></a>
</div>

</div>
   




    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        parallax: true,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },

        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
     
      
    </script>
    <script>
      var main = document.querySelector(".wrapper")
      var cursor = document.querySelector(".cursor")
      var headings = document.querySelector("h1")

      main.addEventListener("mousemove", function (dets) {
        cursor.style.left = dets.x + "px";
        cursor.style.top = dets.y + "px";
      })
      main.addEventListener("mouseenter", function (dets) {
        cursor.style.scale = "1"
        cursor.style.opacity = "1"
      })
      main.addEventListener("mouseleave", function (dets) {
        cursor.style.scale = "0"
        cursor.style.opacity = "0"
      })
     

    </script>
  </body>

  </html>