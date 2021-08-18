<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/customer.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/responsive.css">
    <title>Transection history</title>
</head>

<body>
    <nav class="navbar navbar-customer">
        <div class="logo" id="home">
            <img src="./image/logo.jfif" alt="logo" height="70px">
        </div>
        <div class="menu">
            <ul class="item">
                <li><a href="index.php" class="outer-shadow hover-in-shadow btn-1">HOME</a></li>
                <li><a href="customer.php" class="outer-shadow hover-in-shadow btn-1">CUSTOMERS</a></li>
            </ul>
        </div>
    </nav>
    <hr>
    <h1>Transaction History</h1>
    <div>
        <table class="main-table" width="50%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date & Time</th>
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
                $selectquery="SELECT * FROM `tranjectionhistory`";
                $query = mysqli_query($con, $selectquery);
                $rownum = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $res['ID'] ?></td>
                        <td><?php echo $res['SENDER'] ?></td>
                        <td><?php echo $res['RECEIVER'] ?></td>
                        <td><?php echo $res['AMOUNT'] ?></td>
                        <td><?php echo $res['DATE&TIME'] ?></td>
                        
                    </tr>
            <?php
                }
            ?>
    
            </tbody>
        </table>
    </div>
</body>

</html>