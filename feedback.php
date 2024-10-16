<?php
include('includes/connect.php');
include("menubar.php");
if(isset($_POST['click']))
{
  $category_title = $_POST['text1'];
  $category_title1 = $_POST['text2'];
  $category_title2 = $_POST['text3'];
  $category_title3 = $_POST['text4'];
  

  $insert_query = "insert into feedback_table(name,mobile,email,message)
   values ('$category_title','$category_title1','$category_title2','$category_title3' )";
   

$show =mysqli_query($con,$insert_query);
if($show)
{
    echo "<script>alert('Thanks for the Feedback!!!!!')</script>";
}
}

?>
<form action="" method="post" class="mb-2">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"></script>
    <style>
     
      .row
      {
      
        display: flex;
        justify-content: space-around;
        align-items: center;
      }
      
      .login-box {
     
       
        width: 550px;
        padding: 40px;
       
        background: white;
        
      
        border-radius: 10px;
      }

      .login-box .user-box {
        position: relative;
        
      }

      .login-box .user-box input {
        width: 100%;
        padding: 6px 0;
        font-size: 16px;
        color: black;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        background: transparent;
      }

      .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: black;
        pointer-events: none;
        transition: .5s;
      }

      .login-box .user-box input:focus~label,
      .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #bdb8b8;
        font-size: 12px;
      }

      .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: black;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
      }

      .login-box a:hover {
        background: #FF4F5A;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #FF4F5A,
          0 0 25px #FF4F5A,
          0 0 50px #FF4F5A,
          0 0 100px #FF4F5A;

      }

      .login-box a span {
        position: absolute;
        display: block;
      }

      .submit{
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
        text-decoration: none;
        padding: 7px;
        transition: .3s ease all;      
        color:#FF4F5A;
 

      }
    

form h3
{
  color:#FF4F5A;
  margin-bottom:30px;
}
    img
    {
      width: 40vw;
      height: auto;
      

    }
  

   
    </style>

  </head>

  <body>

    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5 mt-5">
         <img class="mt-3" src="images/interior_decoration.jpg">
        </div>
        <div class="col-md-6 mt-5">
          <div class="login-box mt-5">

            <form>
              <h3 class="text-center">Your Feedback, Our Inspiration</h3>
       
              <div class="user-box">
                <input type="text" name="text1" required="">
                <label>Name</label>
              </div>
              <div class="user-box">
                <input type="text" name="text2" required="">
                <label>Mobile No</label>
              </div>
              <div class="user-box">
                <input type="text" name="text3" required="">
                <label>E-Mail</label>
              </div>
              <div class="user-box">
                <input type="text" name="text4" required="">
                <label>Message</label>
              </div>
              <div>
                <button class="submit" name="click">SUBMIT</button>
  </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    


   
  </body>

  </html>