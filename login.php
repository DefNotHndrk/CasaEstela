<?php
include_once "db.php";
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>

<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/download.jfif"/>
        
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            } elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Username or Email</label>
                    <input type="text" name="email" class="form-control" placeholder="" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>

                <!-- Dropdown for Role Selection -->
                <div class="form-group col-lg-12">
                    <label>User Type</label>
                    <select class="form-control" name="role" required>
                        <option value="" disabled selected>Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="front_desk">Front Desk</option>
                        <option value="cashier">Cashier</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" name="login">LOGIN</button>
<button class="btn btn-primary" type="submit" name="Forgot Password">Forgot Password</button>
        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>
