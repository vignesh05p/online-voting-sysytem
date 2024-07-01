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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>

<body>
    <nav>
        <div class="brand">
            <div class="profile"><img src="assets/images/profile.jpg" alt=""></div>
            <label>Administrator</label>
        </div>
        <ul>
            <li><a href="admin.php">Deshboard</a></li>
            <li><a href="results.php">Results</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <?php  
         $selectStudent = "SELECT COUNT(id) FROM students;";
         $result1= mysqli_query($conn,$selectStudent)or die("Querry Unsuccessfull".mysqli_error($conn));
         $selectTeachers = "SELECT COUNT(id) FROM teachers;";
         $result2= mysqli_query($conn,$selectTeachers)or die("Querry Unsuccessfull".mysqli_error($conn));
         $selectVotes = "SELECT COUNT(id) FROM pictures;";
         $result3= mysqli_query($conn,$selectVotes)or die("Querry Unsuccessfull".mysqli_error($conn));
       $r1= mysqli_fetch_array($result1);
       $r2= mysqli_fetch_array($result2);
       $r3= mysqli_fetch_array($result3);
        ?>
        <div class="card_container">
            <div class="single_card">
                <h3>Teachers</h3>
                <div class="row">
                    <h1><?php   echo $r1[0] ;  ?></h1>
                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="single_card">
                <h3>Students</h3>
                <div class="row">
                    <h1><?php   echo $r2[0] ;  ?></h1>
                    <span><i class="fa fa-users" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="single_card">
                <h3>Projects</h3>
                <div class="row">
                    <h1><?php   echo $r3[0] ;  ?></h1>
                    <span><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="left_box">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore tempore quis distinctio. Sunt, consequuntur impedit. Earum eveniet, libero nulla nam distinctio omnis beatae excepturi quas tenetur rerum voluptatum ex est dolore, repellendus minus minima velit cupiditate esse doloribus vitae eligendi corrupti. Distinctio, veritatis velit dolore nostrum blanditiis rem reiciendis totam praesentium fugit ex asperiores non quidem magni. Quisquam ipsum nesciunt dignissimos iste similique, tempore repudiandae a, odit iusto obcaecati, natus perferendis mollitia doloribus soluta eligendi.</p>
            </div>
            <div class="right_box">
                <div class="box">
                    <p style="color: #3D5AFE;font-size: 1.2rem; font-weight: bold; text-align: center; padding: 5px;"><?php if (isset($_SESSION['message'])) {
                                                                                                                            echo $_SESSION['message'];
                                                                                                                            unset($_SESSION['message']);
                                                                                                                        }  ?></p>
                    <h3><?php if (isset($_SESSION["on"])) {
                            echo "";
                        } else {
                            echo "Give access for voting";
                        }  ?>
                    </h3>
                    <div class="checkbox">
                        <form method="post" action="<?php if (isset($_SESSION["on"])) {
                                                        echo "disablestatus.php";
                                                    } else {
                                                        echo "updatestatus.php";
                                                    }  ?>">

                            <button class="btn">Click to
                                <?php if (isset($_SESSION["on"])) {
                                    echo "Disable";
                                } else {
                                    echo "Enable";
                                }
                                ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>