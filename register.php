<?php
include('conn.php');
if(isset($_POST['register']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $gender=$_POST['gender'];
    $hobies=$_POST['hobies'];
            $hobiesdata="";
        foreach($hobies as $value)  
        {  
            //   $hobiesdata .= $value.",";  
            $hobiesdata= $hobiesdata.$value.",";  
            
        } 
    $state=$_POST['state'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];

           

            $filename = $_FILES['profile_image']['name'];
            $tempname = $_FILES['profile_image']['tmp_name'];
            $profile_image = move_uploaded_file($tempname,"assets/uploads/image/".$filename);

   
 
    $address = $_POST['address'];
    $password = $_POST['password'];
        $encpass = md5($password);
    $cpassword = $_POST['cpassword'];

    

    $select ="select * from admin where email = '".$email."'";
    $select_res = mysqli_query($conn,$select);
    $select_row = mysqli_fetch_array($select_res);
    $count = mysqli_num_rows($select_res);

   
    
    
    if($count >= 1)
    {
        echo "Already Exits";
    }
    else
    {
        if($password == $cpassword)
        {
           

            $insert = "insert into admin(firstname,lastname,email,phonenumber,gender,hobies,state,district,city,pincode,profile_image,address,password)values('".$fname."','".$lname."','".$email."',
            '".$phone."','".$gender."','".$hobiesdata."','".$state."','".$district."','".$city."','".$pincode."','". $filename."','".$address."','".$encpass ."')";

                $res = mysqli_query($conn,$insert);
                if($res)
                {
                    ?>
                    <script>alert('register successfully!!')</script>
                    <?php
                }
                else{
                    echo "data failed";
                }
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
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
             <h3 class="text-center"> Register</h3>
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
                <div class="form-group mb-3">
                                <label for="">Gender</label> <br>
                                <input type="radio" name="gender" value="Male" /> Male
                                <input type="radio" name="gender" value="Female" /> Female
                </div>
                <div class="form-group mb-3">
                        Hobies: <br>    
                        <input type="checkbox"  name="hobies[]" value="Learning"/>    
                            <label>Learning</label> <br>    
                        <input type="checkbox"   name="hobies[]"  value="Dance"/>    
                            <label>Dance</label> <br>    
                        <input type="checkbox"   name="hobies[]"  value="Photography"/>    
                            <label>Photography</label> <br>  
                        <input type="checkbox"   name="hobies[]"  value="Writing"/>    
                            <label>Writing</label> 
                </div>
                <div class="row">
                    <label>State </label>
                    <input type="text" class="form-control" name="state" placeholder="Enter StateName">
                </div>
                <div class="row">
                    <label>District </label>
                    <input type="text" class="form-control" name="district" placeholder="Enter District Name">
                </div>
                <div class="row">
                    <label>City </label>
                    <input type="text" class="form-control" name="city" placeholder="Enter City Name">
                </div>
                <div class="row">
                    <label>Pincode </label>
                    <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>profile Picture</label>
                        <input type="file" name="profile_image" class="form-control">
                    </div>
                </div>  

                <div class="row">
                    <label>Address </label>
                    <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                </div>
                <div class="row">
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="row">
                    <label>Confirm Password </label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="register"> Register</button>
            </form>
        </div>
    </div>
</body>
</html>