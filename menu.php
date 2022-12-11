<?php include("path.php"); ?>
<?php include 'users.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1">
    <title>Web Site</title>
</head>
<body >
<div class="container">
    <?php require "blocks/headers.php"?>

    <h2 class="d-flex flex-wrap justify-content-center">Menu</h2>
    <div class=" d-flex flex-wrap justify-content-center">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$5</h1>
                    <img src="image/Americano.jpg" alt="coffe">
                    <h3>Americano</h3>
                    <button type="button" class="button w-100 btn btn-lg btn-outline-primary">Buy</button>
                </div>
            </div>
            <div class="card mb-4  rounded-2 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$7</h1>
                    <img src="image/Latte.jpg" alt="coffe">
                    <h3>Latte</h3>
                    <button type="button" class="button w-100 btn btn-lg btn-outline-primary">Buy</button>
                </div>
            </div>
            <div class="card mb-4  rounded-2 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$7</h1>
                    <img src="image/Cappucino.jpg" alt="coffe">
                    <h3>Cappucino</h3>
                    <button type="button" class="button w-100 btn btn-lg btn-outline-primary">Buy</button>
                </div>
            </div>
    </div>
    <?php require "blocks/footer.php"?>
</div>
  
</body>
</html>