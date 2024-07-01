<?php 
include "config.php";
    $res = mysqli_query($conn,"UPDATE administrator SET vote_status = 'on'");
    if($res){
        $_SESSION['on']="Voting is enabled";
        $_SESSION['message']="Voting Started";
        header("Location: admin.php");
    }
?>