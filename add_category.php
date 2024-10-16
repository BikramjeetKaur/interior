<?php include("admin_menubar.php");
?>
<?php
include('../includes/connect.php');
if(isset($_POST['click']))
{
   $category_name= $_POST['text1'];
   $insert="insert into add_category(Category_name)values('$category_name')";
   if($insert)
   {

   }
   $result=mysqli_query($con,$insert);
   if($result)
   {
    echo"<script>alert('Category added successfully');
    </script>";
   }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
<form action="" method="post">
<body>
    <br><br><br>
    <h1>Add Category</h1>
    <br>
    <table class="table_category">
        <tr>
            <td> Category Name</td>
            <td><input type="text" name="text1" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><button name='click'>Submit</button></td>
        </tr>
    </table>
</body>
</form>
</html>