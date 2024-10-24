<?php
include('conn.php');
if(isset($_POST['addemployee']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $admin_id=$_POST['admin_id'];

    

    $select ="select * from admin where email = '".$email."'";
    $select_res = mysqli_query($conn,$select);
    $select_row = mysqli_fetch_array($select_res);
    $count = mysqli_num_rows($select_res);

    $encpass = md5($password);
    
    if($count >= 1)
    {
        echo "Employee Already Exits";
    }
    else
    {
        if($password == $cpassword)
        {
           
            $insert = "insert into employee(firstname,lastname,email,phonenumber,password,admin_id)values('".$fname."','".$lname."','".$email."',
            '".$phone."','".$encpass."','".$admin_id."')";

                $res = mysqli_query($conn,$insert);
                if($res)
                {
                    ?>
                    <script>alert('Employee Register successfully!!')</script>
                    <?php
                    
                    
                }
                else{
                    echo "data failed";
                }
                header('location:index.php');
            
        }
        else{
            echo "Password & Confirm Password is Does Not Match!!!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
             <h3 class="text-center"> Register Employee</h3>
            </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <label>First Name </label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter FirstName" Required>
                </div>
                <div class="row">
                    <label>Last Name </label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter LastName" Required>
                </div>
                <div class="row">
                    <label>Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" Required>
                </div>
                <div class="row">
                    <label>Phone </label>
                    <input type="text" class="form-control" name="phonenumber" placeholder="Enter Phone" maxlength="10" Required>
                </div>
               
                <div class="row">
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="row">
                    <label>Confirm Password </label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password">
                </div>  
                    <?php
                        $select ="select * from admin where email = '".$_SESSION['email']."'";
                        $select_res = mysqli_query($conn,$select);
                        $select_row = mysqli_fetch_array($select_res);                       
                    ?>

                <input type="hidden" class="form-control" name="admin_id" value="<?php echo  $select_row ['id'];?>"> 
                <button type="submit" class="btn btn-primary mt-2" name="addemployee">ADD Employee</button>
            </form>
        </div>
    </div>
</body>
</html>