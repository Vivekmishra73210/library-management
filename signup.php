<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>

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
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Admin login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">user login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signup.php">Register</a>
        </li>
    </ul>
</div>
</nav>
<br>
<span><marquee>This is library Management System. library open at 8:00 Am and close at 8:00 PM</marquee></span>
<br><br>
<div class="row">
    <div class="col-md-4" id="side_bar">
        <h5>Library Timing</h5>
        <ul>
            <li>Opening Time 8:00 AM</li>
            <li>Closing Time 8:00 PM</li>
            <li>(Sunday off)</li>
        </ul>
        <h5>What We Provide ?</h5>
        <ul>
            <li>Full furniture</li>
            <li>Free Wi-fi</li>
            <li>News Paper</li>
            <li>Discussion Room</li>
            <li>Ro Water</li>
            <li>Pacesfull Envirment</li>
        </ul>
    </div>
    <div class="col-md-8" id="main_contant">
        <h3 class="text-center">User Register form</h3>
    <form action="register.php" method="post">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Mobile Number:</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Address:</label>
             <textarea  rows="3" cols="40" class="form-control" name="address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>