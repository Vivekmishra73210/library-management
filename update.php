<?php
session_start();
$email = $_SESSION['email'];
    include 'connection.php';
    $query="update users set name='".$_POST['name']."',email= '".$_POST['email']."',mobile= '".$_POST['mobile']."',address= '".$_POST['address']."' where email='".$email."'";
    $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Update successfully...");
    window.location.href = "user_dashboard.php";
</script>