<?php
include('includes/connect.php');
?>

<?php include("Header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <style>
    .card-deck 
        {
            display: flex;
            flex-direction:row;
          flex-wrap: wrap;
          justify-content: space-evenly;
            align-items: center;
           
         
           
        }
      table
       {
       margin-top: 8vw;
       width: 30%;
       height: 60vh;
       border-radius: 10px;
       /* margin-bottom: 2rem; */
       transition: .3s ease-in;
       overflow: hidden;
       }
       table:hover{
        box-shadow: 0px 0px 10px lightgray;
        transition: .3s ease-out;
       }
      table:hover img 
      {
        scale:1.1;
        transition: .3s ease-in;
      }
       tr
       {
        
        height:40vh;
       }
       td{
        width:20%;
       }
       form{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        overflow: hidden;
       }
       form img{
    width: 100%;
    height: 35vh;
    background-color: black;
    transition: .3s ease-out;
       }
       form h3{
        font-size: 25px;
       }
       form h3:nth-child(3)
       {
        color: red;
       }
       form h3:nth-child(2)
       {
        margin-top: 15px;
       }


       button a{
        color:green;
        text-decoration:none;
        list-style:none;
       }
       h1
       {
        text-align:center;
       }
    </style>
</head>
<body>
<h1>Temple</h1>
   <div class="card-deck">
      <?php
$select_query="SELECT * FROM product_table where category_name='Temple'";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query))
{
  $id=$row['id'];
  $product_name=$row['product_name'];
  $image=$row['image'];
  $price=$row['price'];
  
  echo"
      <table>
      
      <tr>
      <td>
      
      <form action='Manage_Card.php' method='POST'>
        
          <img src='images/$image' alt='...' >
        
            <h3>$product_name</h3>  
           
            <h3>RS.$price</h3>
            
            <button type='submit' class='my-2' name='Cart'> Add to Cart</button>
            <input type='hidden' name='Item_Name' value='$product_name'>
            <input type='hidden' name='Price' value='$price'>

            </form>
        
         </td>
         
     </tr>
  
     </table>
     ";
     
}
    ?> 
  </div>
 

</body>
</html>