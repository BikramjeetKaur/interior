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
  <body>
    <h1 style="display:flex;justify-content: center;align-item:center;line-height:15vh;"> Edit Subcategory</h1>
   <div class="container ">
    <button class=" btn btn-primary my-5">
    <a href="crud.php" class="text-light">Add User </a>
    </button>
    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">Category Name</th>
      <th scope="col">Subcategory Name</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from subcategory_table";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['category_name'];
    $name=$row['subcategory_name'];
   
    
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
   
    
   
   
    <td>
    <button class="btn btn-primary"><a href="update_Subcategory.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-primary"><a href="del_Subcategory.php?deleteid='.$id.'" class="text-light">Delete</a></button>

</td>
  </tr>';
    
   }
}
    ?>

    
  </tbody>
</table>
</div>
   
 </body>
</html>