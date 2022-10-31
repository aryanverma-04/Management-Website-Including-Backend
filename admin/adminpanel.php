<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Bites</title>
    <link rel="stylesheet" href='/project5/style/style.css'>
    <style>
    /* .logbtn{
            width: 100%;
            float: left;
            background: #858FE9;
        } */
    /* .logbtn button{
            width: 10%;
            height: 150%;
            margin-right: 50px;
            background-color: white;
            style: none;
        } */
    </style>

</head>

<body>
    <!-- navbar section starts here-->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="/project5/images/logo.jpg" alt="Background image" class="img-responsive">
            </div>
            <div class="menu textright">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="/project5/admin/manageemployees.php">Manage Employees</a>

                    </li>

                    <li>
                        <a href="/project5/admin/corporatehistory.php">Corporate's enquiries</a>
                    </li>
                    <li>
                        <a href="/project5/admin/orderhistory.php">Order History</a>
                    </li>
                    <li>
                        <a href="/project5/admin/adminlogin.php">Logout</a>
                    </li>

                </ul>

            </div>
        </div>
        <div class="clearfix">
        </div>
    </section>

    <!--navbar section ends here -->
    <section class="food-search text-centre">
        <div class="container">
            <h1>
                Welcome to crunchy bites food managing panel..
            </h1>
            <h3>Happy working hours..<br>
                Deliver yummy fast food.

            </h3>
        </div>
    </section>
    <!-- social section starts here-->
    <section class="social text-centre">
        <div class="container">
            <ul>
                <li>
                    <a href=""><img src="https://img.icons8.com/color/48/000000/instagram-reel.png" /></a>

                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/color/48/000000/youtube-play.png" /></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" />
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--social section ends here -->

    <!-- footer section starts here-->
    <section class="footer text-centre">
        <div class="container">
            <p>All rights reserved. designed by <a href="#">Aryan verma</a></p>

        </div>
    </section>
    <!--footer section ends here -->

    <?php 
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: adminlogin.php");
    }
    ?>
</body>

</html>