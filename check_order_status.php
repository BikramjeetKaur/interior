<?php
include('../include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .container{
        margin-top:10rem;
    }
</style>
<body>
<div class="container">
    <form action="" method="post">
        <input type="text" placeholder="Search data" name="search">
        <button class="btn btn-dark btn-sm " name="submit">Search</button>
    </form>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking_Id</th>
                    <th scope="col">Tour_Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email_Id</th>
                    <th scope="col">Mobile_no</th>
                    <th scope="col">Address</th>
                    <th scope="col">No_of_Person</th>
                    <th scope="col">Start_date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset($_POST['submit'])){
                $search = $_POST['search'];
                $sql = "SELECT * FROM tour_booking WHERE Mobile_number LIKE '%$search%'
                         OR name LIKE '%$search%'";
                $result = mysqli_query($con, $sql);
                if($result && mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td><a href="searchdata.php?data='.$row['booking_id'].'">'.$row['booking_id'].'</a></td>';
                        echo '<td>'.$row['tour_id'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['email_id'].'</td>';
                        echo '<td>'.$row['Mobile_number'].'</td>';
                        echo '<td>'.$row['address'].'</td>';
                        echo '<td>'.$row['no_of_person'].'</td>';
                        echo '<td>'.$row['start_date'].'</td>';
                        echo '<td>'.$row['amount'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
                    }
                }
            }
            ?>
            </tbody>
            <td></td>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>