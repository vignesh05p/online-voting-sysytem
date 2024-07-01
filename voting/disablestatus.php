<?php 
include "config.php";
    $res = mysqli_query($conn,"UPDATE administrator SET vote_status = 'off'");
    if($res){
        unset($_SESSION['on']);
        $_SESSION['message']="Voting closed";
        unset($_SESSION['duration']);
        unset($_SESSION["start_time"]);
        unset($_SESSION["end_time"]);
        unset($_SESSION['load']);
        unset($_SESSION['load']);
        header("Location: admin.php");
    }
?>