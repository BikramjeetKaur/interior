<?php
include('../includes/connect.php');
if(isset($_POST['click']))
{
  $category_name= $_POST['text1'];
  $subcategory_name= $_POST['text2'];
 
  
 
  $insert_query = "insert into subcategory_table(category_name,	subcategory_name) values ('$category_name','$subcategory_name')";

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
      .fs-1
      {
  font-family:Georgia,Serif;
  color:blue;
      }
    </style>
    </head>
  <body>
    <table>
      <tr>
        <td>Category Name</td>
        <td>
        <?php
      $query = ("select * from add_category");
      $run = mysqli_query($con, $query);
      $rowcount = mysqli_num_rows($run);
      ?>
      <select name="text1">
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
        <td>Subcategory_name</td>
        <td><input type="text" name="text2"></td>
      </tr>
      <tr>
        <td></td>
        <td><button name="click">Submit</button></td>
      </tr>
    </table>  
  </form>
  </body>
  </html>