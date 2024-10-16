
<?php
include('../includes/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from add_category where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert ('Delete successfully')
        </script>";
    }
    else{
        die(mysqli_error($con));
    }
}
?>