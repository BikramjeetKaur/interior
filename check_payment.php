<?php include("admin_menubar.php");
?>
<?php

include('../includes/connect.php');
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
    
  </style>
  <body>
   <div class="container ">
    
    <table class="table">
      <div class="text-center w-100 ">
      <h1 >Check Payment</h1>
      </div>
  <thead>
  
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Card Type</th>
      <th scope="col">Nmae on Card</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Exp_Date</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM payment_table";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $Payment_id=$row['payment_id'];
    $Name=$row['name'];
    $Card_Type=$row['Card_Type'];
    $Name_on_card=$row['Name_on_card'];
    $Total_Amount=$row['Total_Amount']; 
    $Exp_date=$row['Exp_date']; 
    
    echo'<tr>
    <th scope="row">'.$Payment_id.'</th>
    <td>'.$Name.'</td>
    <td>'. $Card_Type.'</td>
    <td>'.$Name_on_card.'</td>   
    <td>'.$Total_Amount.'</td>
    <td>'.$Exp_date.'</td>
    <td>
    <button class="btn btn-primary"><a href="update_product.php?updateid='.$Payment_id.'" class="text-light">Update</a></button>
    <button class="btn btn-primary"><a href="del_product.php?deleteid='.$Payment_id.'" class="text-light">Delete</a></button>

</td>
  </tr>';
    
   }
}
    ?>

    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
   
 </body>
</html>
