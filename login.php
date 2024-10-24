<?php
include('conn.php');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    // // $select ="select * from admin where email = '".$email."'" &&  "'".$password."'";
    // $select="select * from admin where username = '$email' AND password = '$password'" /  AND password = '".$password."'";;
    $select ="select * from admin where email = '".$email."' " ;
    $select_res = mysqli_query($conn,$select);
    $select_row = mysqli_fetch_array($select_res);
    
    $encpass=$select_row['password']; // get encrypted password from database;
    $enpassword=md5($password);

    if($select_row && ($enpassword == $encpass))
    {
        echo "Login Successfully!!!";
        $_SESSION['email'] = $select_row['email'];
        header('location:index.php');
    }
    else
    {
        echo "Login Failed!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
             <h3 class="text-center">Login</h3>
            </div>
        <div class="card-body">
            <form method="post">
                <div class="row">
                    <label>Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" Required>
                </div>
                <div class="row">
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" Required>
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="login"> Login</button>
            </form>
        </div>
    </div>
</body>
</html>