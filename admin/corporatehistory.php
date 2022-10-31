<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/corporate.css">
    <title>Document</title>
</head>

<body>

    <div class="main-div">
    <div class="lbtn">
        <button class=" btn btn-primary" onclick="window.location.href = '/project5/admin/adminpanel.php';">
            Back to Main
        </button>
        </div>
        <h1 class="th">
            Here are the Corporate enquiries.
        </h1>
       
        <div class="table-responsive">
            <table class="table table-striped table-bordered tstyle">
                <thead class="thead-dark ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>No of persons</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Other requirements</th>
                        <th>Date and time</th>
                    </tr>
                <tbody>
                    <?php
                        include'connection.php';

                        $selctquery = " select * from trip ";
                        $query = mysqli_query($con, $selctquery);
                        $nums = mysqli_num_rows($query);
                        // echo $nums;
                        while($res = mysqli_fetch_array($query)) {
                            ?>
                    <tr>
                        <td><?php echo $res['sno']?></td>
                        <td><?php echo $res['name']?></td>
                        <td><?php echo $res['age']?></td>
                        <td><?php echo $res['gender']?></td>
                        <td><?php echo $res['email']?></td>
                        <td><?php echo $res['phone']?></td>
                        <td><?php echo $res['other']?></td>
                        <td><?php echo $res['dt']?></td>
                    </tr>

                    <?php
                        }
                       
                        ?>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</body>

</html>