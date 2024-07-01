<?php
  
  include "config.php";

$message="";
$selectStatus = "SELECT * FROM administrator WHERE id=1";
$status = mysqli_query($conn,$selectStatus);
$res = mysqli_fetch_assoc($status);
if($res['vote_status'] == "on"){
    $message="Voting Started";
}else{
    $message="Not started yet";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <a class="admin" href="login.php">Admin Login</a>
        <div class="box">
            <span style="font-size: 1rem;color: green; margin-bottom: 1rem; font-weight: bold;">
        <?php  if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        } ?>
        </span>
            <h6 style="font-size: 1.4rem;color: orange; padding: .6rem 20px; background:#311B92; margin-bottom: 1rem; display: block; border-radius: 4px; "><?php echo $message ?></h6><br>
            <h1>Online Voting</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptatem, vitae nihil error quibusdam, exercitationem id quo provident voluptas ipsam esse incidunt repellendus laudantium ut ex aliquid rerum, iusto animi!</p>
           <!-- <form method="post"> -->
           <a href="vote.php"><button  name="vote">Click to Vote</button></a>
           <!-- </form> -->
        </div>
    </div>
</body>
</html>