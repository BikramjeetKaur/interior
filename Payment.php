<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>

   
h1{
      text-align: center;
    }
   
    body
    {
    background-image: url(backgroung.jpeg);
    background-size: 100% 100%;
    background-size: cover;
    }
</style>

</head>

<?php
session_start();
?>
<?php

include('includes/connect.php');
if(isset($_POST['click']))
{

 $name= $_POST['text1'];
  $Card_type = $_POST['Card'];
 
  $Name_on_card = $_POST['text3'];
  $amount = $_POST['text4'];

  $Expdate = $_POST['text5'];
 
 
  $insert_query = "insert into payment_table(Name,Card_Type,Name_on_card,Total_Amount,Exp_date) values ('$name','$Card_type','$Name_on_card','$amount','$Expdate')";
  if($insert_query)

  {
    // echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo "<script>alert ('Thanks for the Payment!!!!.Your Order Process is Completed');
    </script>";
  }
  header('location:home.php');

}

?> 

   

<form action="" method="post" enctype="multipart/form-data">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            font-family: system-ui;
        }
        table,tr,td
        {
            border:2px solid green;
            border-collapse: collapse;
            padding:15px;
        }
        h1
        {
            text-align:center;
            color:green;
            
        }
        .container
        {
            
            width: 100%;
            height: 75vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        td
        {
            text-align:center;
            font-weight:600;
            
        }
        input, select
        {
            width: 80%;
            height: 4vh;
        }
    
        button
        {
            padding: 5px;
            font-size: 15px;
             background-color: green;
            color: white;
             border: none;
             outline: 2px solid black;
             cursor: pointer;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <h1>Payment</h1>
    <table>
       
        <tr>
            <td> Name</td>
            <td><input type="text" name="text1" value="<?php echo  $_SESSION['name']?>"></td>
        </tr>
        <tr>
            <td>Card Type</td>
            <td><select name="Card">
              <option value="">Credit Card</option>
              <option value="">Debit Card</option>
              <option value="">Master Card</option>
            
            </select></td>
        </tr>
        <tr>
            <td>Name on Card</td>
            <td><input type="text" name="text3"></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td><input type="text" name="text4" value="<?php echo   $_SESSION["amount"]?>"></td>
        </tr>
        <tr>
            <td>Expire Date</td>
            <td>
              <input type="date" name="text5" id="">
        </tr>
        <tr>
            <td></td>
            <td><button name="click">Add Product</button>
            </td>
        </tr>

    </table>
    </div>
</body>
</html>
</form>