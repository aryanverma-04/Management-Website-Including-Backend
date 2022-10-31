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
            Here are the Employees History.
        </h1>
       
        <div class="table-responsive">
            <table class="table table-striped table-bordered tstyle">
                <thead class="thead-dark ">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile number</th>
                        <th>Age</th>
                        <th>salary</th>
                        <th>Joining Date</th>
                    </tr>
                <tbody>
                    <?php
                        include'connnectionemployees.php';

                        $selctquery = " select * from info";
                        $query = mysqli_query($con, $selctquery);
                        $nums = mysqli_num_rows($query);
                        // echo $nums;
                        while($res = mysqli_fetch_array($query)) {
                            ?>
                    <tr>
                        <td><?php echo $res['id']?></td>
                        <td><?php echo $res['name']?></td>
                        <td><?php echo $res['number']?></td>
                        <td><?php echo $res['age']?></td>
                        <td><?php echo $res['salary']?></td>
                        <td><?php echo $res['date']?></td>
                        
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