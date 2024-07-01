<?php 
$check=0;
require "config.php";
$pic_id =  $_GET['id'];
$id = (int)$pic_id;
$sql = "SELECT * FROM pictures WHERE id=$id";
$select = mysqli_query($conn,$sql);
if(mysqli_num_rows($select)>0){
    $count = mysqli_fetch_array($select);
    echo $check = (int)$count[2];
    echo $check+=1;
    $res2 = mysqli_query($conn,"UPDATE pictures SET votes = $check WHERE id= $id");
    if($res2){
        $_SESSION['message']="Thanks for voting";
    header("Location: index.php");
    }
}
?>