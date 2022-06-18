<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Arena | Settings</title>
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
                <h3>Change Password</h3>
                <form method="POST" action="settings_script.php">
                    <input type="password" class="form-control" placeholder="Old Password" name="old_password"><br>
                    <input type="password" class="form-control" placeholder="New Password" name="new_password"><br>
                    <input type="password" class="form-control" placeholder="Re-type New Password" name="repnew_password">
		    <?php
                    		if (isset($_GET["error"])) {
                        	echo $_GET['error'];
                    		}
                    ?><br>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer2.php';
    ?>
</body>

</html>