<?php include("admin_menubar.php");
?>
<?php
include('../includes/connect.php');
if(isset($_POST['click']))
{
  $category= $_POST['t1'];
  $Product_name= $_POST['t7'];
  $price= $_POST['t2'];
  $image= $_POST['image'];
  $description= $_POST['t4'];
 
  if(isset($_FILES['image']))
  { 
    
  //   echo "<pre>";
  //   print_r($_FILES);
  //  echo "<pre>";
     $file_name=$_FILES['image']['name'];
     $file_size=$_FILES['image']['size'];
     $file_tmp=$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
   
move_uploaded_file($file_tmp,"images/". $file_name);


  }
  $insert_query = "insert into product_table(category_name,	Product_name, price, image, description) values ('$category','$Product_name','$price','$image','$description')";

  if($insert_query)
  {
    echo"<script>alert('data found')</script>";
  }
  $result=mysqli_query($con,$insert_query);
  if($result)
  {
    echo"<script>alert('category added successfully')<script>";
  }
  }
  ?>
  <form action="" method="post">
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>add tour</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <style>
      body
      {
        background-color:lightblue;
      }
      .fs-1
      {
  font-family:Georgia,Serif;
  color:blue;
      }
      h1
        {
            text-align:center;  
        }
      .table_category
      {
            display:flex;
            justify-content: center;
      }
    </style>
    </head>
  <body><br><br><br>
    <h1>Add Products</h1>
    <br>
    <table class="table_category">
    <tr>
        <td>Category</td>
        <td>
        <?php
      $query = ("select * from add_category");
      $run = mysqli_query($con, $query);
      $rowcount = mysqli_num_rows($run);
      ?>
      <select name="t1">
        <option selected>Select Category Type</option>
        <?php
        for($i=1;$i<=$rowcount;$i++)
        {
          $row=mysqli_fetch_array($run);
          ?>
        <option value="<?php echo $row["Category_name"]?>"><?php echo $row["Category_name"]?></option>
        <?php
        }
        ?>
        </select>
        </td>
      </tr>

      <tr>
        <td>Product_name</td>
        <td><input type="text" name="t7"></td>
      </tr>

      <tr>
        <td>Price</td>
        <td><input type="text" name="t2"></td>
      </tr>

      <tr>
        <td>image</td>
        <td><input type="file" name="image"></td>
      </tr>
      <tr>
        <td>description</td>
        <td><input type="text" name="t4"></td>
      </tr>

      <tr>
        <td></td>
        <td><button name="click">Submit</button></td>
      </tr>
    </table>
  
  </form>
  </body>
  </html>