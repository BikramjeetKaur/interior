<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
</head>
<style>
  *
    {
      font-family: system-ui;
    }
    .container-fluid
    {
      background-color:lightblue;
      height: 10vh;
        
    }
    .nav-item{
      padding:0px 10px;
     
    }
    .nav-link
    {
      color:white;
      font-weight:600;
      font-size:18px;
    }
   
  
</style>
  <body>
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="home.php">Home</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="BathRoom.php">BathRoom</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Bedroom.php">Bedroom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="DiningRoom.php">DiningRoom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="DressingRoom.php">DressingRoom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="KidsRoom.php">KidsRoom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="Kitchen.php">Kitchen</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="LivingRoom.php">LivingRoom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="Pool.php">Pool</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="TeenagersRoom.php">TeenagersRoom</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="Temple.php">Temple</a>
        </li>

      </ul>
    </div>
    <?php
    $count=0;
    if(isset($_SESSION['cart']))
    {
      $count=count($_SESSION['cart']);

    }

    ?>

       
        <a href="My_Cart.php" class="button text-light">My Cart(<?php echo $count;?>)</a>
    </div>
  </div>
</nav>


  </body>
</html>

