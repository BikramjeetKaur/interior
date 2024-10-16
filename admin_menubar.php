<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body{
      background-color:lightblue;
      /* background-size:cover;
      background-image: url(../images/admin.jpg); */
    }
    .nav-item{
    margin-left:20px;
    outline:1px solid #DCF2F1;
    border-radius:30px;
    position:relative;
    overflow:hidden;
    font-weight:500;
   padding:3px;
    
    }
    .nav-item:hover
    {
      box-shadow:0px 0px 10px #DCF2F1;
    }
    .nav-item::before
    {
        content:'';
        position:absolute;
        left: -100%;
        top:0%;
        border-radius:30px;
        width:100%;
        height:100%;
        background-color:#7FC7D9;
        transition:.5s ease-out;
    }
    .nav-item:hover::before
    {
      left:0%;
      transition:.3s ease-in-out;
    }
    .nav-link
    {
      color:black;
      position:relative;
      z-index: 10;
      transition:.2s ease-in;
    }
    .nav-link:hover
    {
      color:white;
      transition:.3s ease-in-out;
     
    }
    button a{
      text-decoration: none;
    color: aliceblue;
    } 
    
  </style>
  <body>
  <nav class="navbar navbar-expand-lg p-3 shadow-sm navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="ADMIN.php">ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-white">
            <li class="nav-item">
              <a class="nav-link " href="add_category.php">Add Category</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="Product.php">Add Products</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="Edit_Category.php">Edit Category</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="EditProduct.php">Edit Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="check_order.php"> Check Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="check_payment.php">Check Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ckeck_product_uploaded.php">Check Product Uploaded</a>
            </li>
      </ul>
      <button class= "btn btn-danger"><a href="../home.php">Logout</a></button>
     
    </div>
  </div>
</nav>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <?php

if(isset($_GET['insert_category_table']))
{
  include('Add_Category.php');
}

if(isset($_GET['insert_product_table']))
{
  include('Add_Products.php');
}


if(isset($_GET['insert_Edit_Category']))
{
  include('Edit_Category.php');
}
if(isset($_GET['insert_Edit_Products']))
{
  include('Edit_Products.php');
}
if(isset($_GET['Check_Order']))
{
  include('check_order.php');
}
if(isset($_GET['Check_Payment']))
{
  include('Check Payment.php');
}


    ?>
  </body>
</html>