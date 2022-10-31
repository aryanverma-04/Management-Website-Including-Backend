<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,"orders");

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['id'];
    $gender = $_POST['mobile'];
    $age = $_POST['name'];
    $email = $_POST['address'];
    $phone = $_POST['mode'];
    $desc = $_POST['upi'];
    $sql = "INSERT INTO `orders`.`info` (`item`, `mobile`, `name`, `address`, `mode`, `upi`, `date`) VALUES ('$name', '$gender', '$age', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchy Bites</title>
    <link rel="stylesheet" href='/project5/style/style.css'>
    <link rel="stylesheet" href='/project5/style/location.css'>


</head>

<body>

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
                            <a href="/project5/home/index.html">Home</a>
                        </li>
                        <li>
                            <a href="/project5/location/location.html">Crunchy's Stores</a>

                        </li>

                        <li>
                            <a href="">Corporate Enquiry</a>
                        </li>
                        <li>
                            <a href="">Deals</a>
                        </li>
                        <li>
                            <a href="/project5/admin/adminlogin.php">Admin</a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="clearfix">

            </div>
        </section>
        <!--navbar section ends here -->
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for Placing order, Our delivery boy will call you soon.</p>";
        }
    ?>
        <div class="enquiry">
            <form method="post">
                <input type="text" name="id" id="id" placeholder="Enter Item name">
                <input type="text" name="mobile" id="mobile" placeholder="Enter your mobile number">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="address" id="address" placeholder="Enter the address to be delivered">
                <input type="text" name="mode" id="mode" placeholder="Enter Payment mode">
                <input type="text" name="upi" id="upi" placeholder="Enter upi id to validate payment">
                <br>
                <button class="btn" onclick="window.location.href = '/project5/home/index.html';">Order Now</button> 
            </form>


        </div>
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
    </body>

</html>