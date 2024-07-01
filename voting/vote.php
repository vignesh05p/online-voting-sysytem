<?php
include "config.php";
$selectStatus = "SELECT * FROM administrator WHERE id=1";
$status = mysqli_query($conn,$selectStatus);
$res = mysqli_fetch_assoc($status);
if($res['vote_status'] == "off"){
    header("Location: index.php");
}else{
    
    if(!isset($_SESSION['load'])){
        $duration="";
        $res = mysqli_query($conn,"SELECT time FROM duration");
        while($row = mysqli_fetch_array($res)){
            $duration=$row["time"];
        }
        $_SESSION['duration']=$duration;
        $_SESSION['start_time']=date("Y-m-d H:i:s");
        $end_time = $end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));
        $_SESSION["end_time"]=$end_time;
        $_SESSION['load']="once";
        $_SESSION['load']="loaded";
    }else{
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/vote.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
    <script>
var interval = setInterval(function(){
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","response.php",false);
xmlhttp.send(null);
// console.log(typeof(xmlhttp.responseText));
if(xmlhttp.responseText == "-1"){
 clearInterval(interval);
 window.location = "autoDisable.php";
}else{
    document.getElementById("response").innerHTML=xmlhttp.responseText;
}
},1000);
</script>
</head>
<body>
    <div class="wrapper">
        <div class="brand">V-O-T-E</div>
        <ul>
            <li><a>Voting started please don't refresh the page</a></li>
        </ul>
        </div>
    <div class="container">
        <form>
        <div class="vote_area">
            <?php  
            $res = mysqli_query($conn,"SELECT * FROM pictures");
            if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){  
            ?>
            <div class="card">
                <div class="image">
                    <img src="assets/<?php echo $row['picture']  ?>" alt="">
                </div>
                <a href="process.php?id=<?php echo $row['id']?>" class="btn" name="vote">Vote Now</a>
                    <!-- <input type="hidden" name="id" value="<?php echo $row['id']  ?>"> -->
            </div>
            <?php  }} ?>
        </div>
        </form>
        <div class="time_area">
            <div class="box">
                <h3>Remaining time</h3>
                <h1 id="response"></h1>
                <a href="leave.php">Leave Now</a>
            </div>
        </div>
    </div>

</body>
</html>