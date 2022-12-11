<?php include("path.php"); ?>
<?php include("users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1">
    <title>Document</title>
</head>

<body>
    <?php require "blocks/headers.php" ?>
    <div class="container reg_form">
        <h2>Registration</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?=$errMesg?></p>
        </div>
        <div class="w-100"></div>
        <form class="row justify-content-center" method="post" action="reg.php">
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput">Your login</label>
                <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your login">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1"class="form-label">Password</label>
                <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="w-100"></div>

            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword2"class="form-label">Password</label>
                <input name="pass-second" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="btn btn-secondary" name="button-reg">Sign Up</button>
                <a href="log.php">log in</a>
            </div>
        </form>
    </div>
    <?php require "blocks/footer.php" ?>
</body>

</html>