<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/customer.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/responsive.css">

    <title>Customer</title>
</head>

<body>
    <nav class="navbar navbar-customer">
        <div class="logo" id="home">
            <img src="./image/logo.jfif" alt="logo" height="70px">
        </div>
        <div class="menu">
            <ul class="item">
                <li><a href="index.php" class="outer-shadow hover-in-shadow btn-1">HOME</a></li>
                <li><a href="trhistory.php" class="outer-shadow hover-in-shadow btn-1">TRANSACTION HISTORY</a></li>
            </ul>
        </div>
    </nav>
    <hr>
    <h1>List of our customers</h1>
    <div>
        <table class="main-table">
            <thead>
                <tr>
                    <th>Sr. no.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Current Balance</th>
                    <th>Transfer</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $server = "sql212.epizy.com";
                $username = "epiz_29455360";
                $password = "HjUwOw63MZWfobO";
                $db = "epiz_29455360_tsfbank";

                //to establish connection
                $con = mysqli_connect($server, $username, $password,$db);

                //to check
                if(!$con){
                    die("Connection to this database failed due to " . mysqli_connect_error());
                }
                // else{
                //     echo "Coonnection successful";
                // }
                $selectquery="SELECT * FROM `customer details`";
                $query = mysqli_query($con, $selectquery);
                $rownum = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $res['ID'] ?></td>
                        <td><?php echo $res['NAME'] ?></td>
                        <td><?php echo $res['EMAIL'] ?></td>
                        <td><?php echo $res['CURRENT_BALANCE'] ?></td>
                        <td><button style="padding: 6px; background-color:green"><a style="text-decoration: none; color: white; " href="tranjection.php?id=<?php echo $res['ID'] ?>"><p>Transfer now</p></a></button></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>   
        </table>
    </div>
</body>

</html>