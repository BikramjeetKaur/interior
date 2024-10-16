<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <style>
    *
    {
      margin: 0;
      padding: 0;
    }
    /* .container-fluid
    {
      background-color:black;
      position: relative;
    } */
    
    /* header
    {
      position: relative;
    } */
    video
    {
     
    
    
     object-fit: cover;
    
    }
    .wrapper{
      cursor:none;
      position: relative;
    }
    
    .info
    {
      position: absolute;
      top:0;
      color:white;
      background-color: rgba(0, 0, 0, 0.569);
      display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 85%;
    width: 100%;
    
    
    }
    .info p{
      width:56%;
    }
    .cursor {
        width: 30px;
        height: 30px;
        background-color: #009432;
        /* border:3px solid #dc3545; */
        border-radius: 50%;
        position: absolute;
        z-index: 100;
        transition: .1s all linear;
        mix-blend-mode:difference;
      }
      .icons
      {
        z-index:10;
        position:absolute;
        top:15%;
        color:white;
        /* display:flex;
        flex-direction:column;
       align-item:center;
       justify-content:center;  */
       text-align:center;
      
       width: 100%;
       font-size:30px;
      }
  </style>
  <body>
    
    <div class="wrapper">
    <div class="cursor"></div>
      <video class="film" loop autoplay muted width="100%" height="100%">
        <source  src="Images/Video2.mp4">
      </video>
      <div class="info my-5">
        <h1 class="display-4 fw-bolder text-warning">Why Choose Us ?</h1>
        <p class="fw-bolder mt-3 fs-6">Welcome to our interior decoration website, where inspiration meets practicality. Explore our curated design galleries showcasing diverse styles from modern to rustic, and dive into real-life room makeover stories filled with transformative ideas, along with expert tips on everything from space planning to accessorizing. Stay up-to-date with the latest trends through our trend reports and gain insights from interviews with industry experts. From seasonal decor inspirations to product reviews, we offer a comprehensive resource for anyone looking to elevate their living spaces with style and functionality.</p>

      </div>
      <div class="icons">
        <div class="icon-h">
        <h1>Follow Us</h1>
        </div>
        <div class="icon-i">
        <span><i class='bx bxl-instagram'></i></span>
        <span><i class='bx bxl-facebook'></i></span>
        <span><i class='bx bxl-youtube'></i></span>
        </div>
        <br>
       
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
         var main = document.querySelector(".wrapper")
      var cursor = document.querySelector(".cursor")
    
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