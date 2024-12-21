<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 30px;
            height: 450px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">   
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
    </div>
    <font style="color: white;"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
    <font style="color: white;"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown">My profile</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="view_profile.php">View Profile</a>
                <a class="dropdown-item" href="edit_profile.php">Edit profile</a>
                <a class="dropdown-item" href="change_profile.php">Change Password</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
</div>
</nav>
<br>
<span><marquee>This is library Management System. library open at 8:00 Am and close at 8:00 PM</marquee></span>
<br><br>
<div class="row">
    <div class="col-md-3">
     
    </div>
</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>