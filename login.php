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
    <title>Laptop Arena | Login</title>
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
                <div class="card">
                    <div class="card-header">
                        LOGIN
                    </div>
                    <div class="card-body">
                        <p>Login to make a purchase</p>
                        <form method="POST" action="login_submit.php">
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required><br>
                            <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
			    <?php
                    		if (isset($_GET["error"])) {
                        	echo $_GET['error'];
                    		}
                    	    ?><br>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        Don't have an account? <a href="signup.php">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer2.php';
    ?>
</body>

</html>