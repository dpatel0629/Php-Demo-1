<?php
include('conn.php');


 $select ="select * from admin where email = '".$_SESSION['email']."'";
 $select_res = mysqli_query($conn,$select);
 $select_row = mysqli_fetch_array($select_res);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">

            <div class="card-header">
             <h3 class="text-center"> Welcome To Home Page <u><?php echo $select_row['firstname']; ?></u></h3>
            <a href="logout.php"> <button type="button" class="btn btn-secondary">Logout</button></a>
            <a href="addemployee.php"> <button type="button" class="btn btn-primary">Add Employee</button></a>
            <a href="Changepassword.php"> <button type="button" class="btn btn-primary">Changepassword</button></a>

            </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>SR.NO</th>
                    <th> FirstName </th>
                    <th> LastName </th>
                    <th> Email </th>
                    <th> Phone </th>
                    

                </tr>
                <?php
                 $i=1;
                 $select_query ="select * from employee where admin_id  = '".$select_row['id']."'";
                 $query_res = mysqli_query($conn,$select_query);   
                 while($query_row = mysqli_fetch_array($query_res))
                 {
                ?>
                <tr>

                    <td><?php echo $i ?></td>
                    <td><?php echo $query_row['firstname']?></td>
                    <td><?php echo $query_row['lastname']?></td>
                    <td><?php echo $query_row['email']?></td>
                    <td><?php echo $query_row['phonenumber'];?></td>
                  
                  
                </tr>
                <?php $i++;  } ?>
            </table>
        </div>
    </div>
</body>
</html>