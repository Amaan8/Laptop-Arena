<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Arena | Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <div class="container" id="margin">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4">
                <h2>SIGN UP</h2>
                <form method="POST" action="signup_script.php">
                    <input type="text" class="form-control" placeholder="Name" name="name" required><br>
                    <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
                    <?php
                    if (isset($_GET["m1"])) {
                        echo $_GET['m1'];
                    }
                    ?><br>
                    <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required><br>
                    <input type="text" class="form-control" placeholder="Contact" maxlength="10" size="10" name="contact" required>
                    <?php
                    if (isset($_GET["m2"])) {
                        echo $_GET['m2'];
                    }
                    ?><br>
                    <input type="text" class="form-control" placeholder="City" name="city"><br>
                    <input type="text" class="form-control" placeholder="Address" name="address"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer2.php';
    ?>
</body>

</html>