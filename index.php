<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>

        .wrap{
            width:100%;
            max-width: 400px;
            margin:40px auto;
        }
    </style>

</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>

        
        <?php if(isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif ?>

        <form action="./_actions/login.php" method="post">
            <input type="email" class="form-control mb-3" name="email" placeholder="Enter Email" require/> 
            <input type="password" class="form-control mb-3" name="password" placeholder="Enter Password" require>
            <button type="submit" class="w-100 btn btn-primary btn-lg">Login</button>
        </form>

        <br>

        <a href="register.php">Register</a>

    </div>
    
</body>
</html>