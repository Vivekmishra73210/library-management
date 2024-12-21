<?php
    // $connection = mysqli_connect("localhost","root","","library");
    // $db = mysqli_select_db($connection,"library");
    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $query = "insert into users values(null,'$name','$email','$password','$mobile','$address')";
    // echo $query;exit;
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Registraction successfully....YOU may login now.")
    window.location.href = "index.php";

</script>