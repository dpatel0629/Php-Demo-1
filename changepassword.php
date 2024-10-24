
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
             <h3 class="text-center">Change password</h3>
            </div>
        <div class="card-body">
            <form method="post">
                <div class="row" >
                    <label> </label>
                    <input type="email" class="form-control" name="email" placeholder="Old Password " Required>
                </div>

                <div class="row">
                    <label>  </label>
                    <input type="email" class="form-control" name="email" placeholder="Password" Required>
                </div>

                <div class="row">
                    <label>  </label>
                    <input type="password" class="form-control" name="password" placeholder="Confirm Password" Required>
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="login"> Login</button>
            </form>
        </div>
    </div>
</body>
</html>