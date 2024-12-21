<?php
    session_start();
    include 'connection.php';
    $query= " select * from users where email = '".$_SESSION['email']."'";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    $password = $row['password'];
    
    if($password == $_POST['old_password']){
        $query = "update users set password = '".$_POST['new_password']."' where email = '".$_SESSION['email']."'";
        $res = mysqli_query($connection,$query);
    
    }
?>
<script type="text/javascript">
    alert("Update successfully...");
    window.location.href = "user_dashboard.php";
</script>