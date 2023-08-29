<?php

session_start();
include("connection.php");

$_SESSION['id'] = 1;

$getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }

$getVoters = mysqli_query($connect, "select name, photo, votes, id from user where status=1");
if(mysqli_num_rows($getVoters)>0){
    $voters = mysqli_fetch_all($getVoters, MYSQLI_ASSOC);
    $_SESSION['voters'] = $voters;
}

$adminpass = $_POST['adminpass'];
if($adminpass == "ankan12345")
{
    echo '<script>
                alert("Welcome Admin");
                window.location = "../routes/admin.php";
            </script>';
}

?>