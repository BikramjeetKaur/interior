<?php
include("menubar1.php");
include('includes/connect.php');
if(isset($_POST['click']))
{
     $p_name=$_POST['t1'];
     $quantity=$_POST['t2'];
     $name=$_POST['t3'];
     if(isset($_FILES['img']))
     {
         $file_name=$_FILES['img']['name'];
         $file_size=$_FILES['img']['size'];
         $file_tmp=$_FILES['img']['tmp_name'];
         $file_type=$_FILES['img']['type'];
         move_uploaded_file($file_tmp,"images/".$file_name);
     }
    $insert_query="insert into upload_products(p_name,img,quantity,person_name,status)values ('$p_name','$file_name','$quantity','$name','pending')";
    if($insert_query)
    {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           echo"<script> alert('found')</script>";
    $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo"<script>alert ('category already added successfully')</script>";
  }
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</head>
<style>
 body
 {
  text-align:center;
  
 }
  tr,td
  {
    
    border: 2px solid black;
    text-align: center;
  }
  .table_new_products
  {
    margin-top:5%;
    display: flex;
    justify-content:center;
  }
</style>
<body>
    <h1>Upload Product</h1>
    <table class="table_new_products">
      <tr>
      <td>Person Name</td>
        <td><input type="text" name="t3"></td>
     </tr> 
        <tr>
            
            <td>Select Product Name</td>
            
            
            <?php
            $query=("select * from product_table");
            $run=mysqli_query($con,$query);
            $rowcount=mysqli_num_rows($run); 
            ?>
                
            </td>
              <td><select name="t1" >
                <?php
                for($i=1;$i<=$rowcount;$i++)
                {
                    $row=mysqli_fetch_array($run);
                
                ?>
                <option value="<?php echo $row["product_name"]?>">
                <?php echo $row["product_name"]?></option>
            <?php    
            }
            ?>
                

                
        </tr>
        <tr>
            <td>Select Image</td>
            <td><input type="file" name="img"></td>

        </tr>
        <tr>
          <td>
    <label class="form-label">Quantity</label>
  </td>
  <td>
    <select name='t2'>
        <option >Select</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>

          </select>
          </td>
        </tr>
        <td>
        <input type="submit" class="bg-info border-0 p-2 my-3" name="click" value="save">
        </td>
          </table>
          </from>
          </body>
          </html>