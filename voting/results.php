<?php
require("config.php");
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>

<body>
    <nav>
        <div class="brand">
            <div class="profile"><img src="assets/images/profile.jpg" alt=""></div>
            <label>Administrator</label>
        </div>
        <ul>
            <li style="background: transparent;"><a href="admin.php" style="color: #fff;">Deshboard</a></li>
            <li style="background: #fff;"><a href="results.php" style="color: #1A237E;">Results</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>

        <div class="content">

            <div class="box">
                <?php
                $total = 0;
                $rowSQL = mysqli_query($conn, "SELECT MAX( votes ) AS max FROM `pictures`;");
                $row = mysqli_fetch_array($rowSQL);
                $largestNumber = $row['max'];
                $votes = (int)$largestNumber;
                $selectData = mysqli_query($conn, "SELECT * FROM pictures WHERE votes = $votes");
                while ($row = mysqli_fetch_assoc($selectData)) {
                ?>
                <h1>Project Voting Winner<?php if(mysqli_num_rows($selectData)>1) {echo "s";}else{echo"";} ?></h1>
                    <div class="row">
                        <div class="data">
                            <h3>ID</h3>
                            <h4 class="id"><?php echo $row['id']  ?></h4>
                            <h3>VOTES</h3>
                            <h4 class="vote"><?php echo $row['votes']  ?></h4>
                        </div>
                        <div class="image">
                            <img src="assets/<?php echo $row['picture']?>" alt="">
                        </div>
                    </div>
                <?php  } ?>
            </div>

        </div>
    </main>
</body>

</html>