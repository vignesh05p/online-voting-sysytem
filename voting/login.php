<?php
include "config.php";
$username_err=$pass_err="";
if(isset($_POST['adminLogin']))
{
$username=$pass="";
if(empty($_POST['username']))
{
    $username_err="Please enter username";
}else{
    $username=trim(mysqli_real_escape_string($conn,$_POST['username']));
}
if(empty($_POST['password']))
{
    $pass_err="Please enter Password";
}else{
    $pass=(trim($_POST['password']));
}
if(!empty($username) && !empty($pass)){
    $selectQuery="SELECT username AND password FROM administrator WHERE username = '{$username}' AND password='{$pass}'";
    $result=  mysqli_query($conn,$selectQuery) or die("Querry Unsuccessfull".mysqli_error($conn));
    if(mysqli_num_rows($result) > 0 ){
        $_SESSION['admin']=$username;
        header("Location: admin.php");
    }else{
        ?><script>alert("Incorrect Login Credientials");</script><?php
    }
}
else{
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <form method="post">
            <h1>Login</h1>
            <div class="form_data">
                <p>Username</p>
                <input type="text" name="username" >
                <p class="error" style="color: red; font-weight:500; font-size: 20px;"><?php echo $username_err;?></p>
                <p>Password</p>
                <input type="password" name="password" >
                <p class="error" style="color: red; font-weight:500; font-size: 20px;"><?php echo $pass_err;?></p>
            </div>
            <!-- <a href="./vote.html"><input type="submit" class="btn" name="login" value="Login"></a>      -->
            <a href="vote.php"> 
                <button class="btn" name="adminLogin">Login</button>
            </a>
        </form>
    </div>
</body>

</html>