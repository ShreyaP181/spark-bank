<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/responsive.css">
</head>

<body>
    <nav class="navbar navbar-customer">
        <div class="logo" id="home">
            <img src="./image/logo.jfif" alt="logo" height="70px">
        </div>

        <div class="menu">
            <ul class="item">
                <li><a href="#" class="outer-shadow hover-in-shadow btn-1">HOME</a></li>
                <li><a href="customer.php" class="outer-shadow hover-in-shadow btn-1">CUSTOMERS</a></li>
                <li><a href="trhistory.php" class="outer-shadow hover-in-shadow btn-1">TRANSACTION HISTORY</a></li>
            </ul>
        </div>
    </nav>

    <section class="home" id="home">
        <h1 class="header">Welcome to the <br>Sparks bank</h1>
        <div class="img">
            <img src="./image/bg.jfif" alt="bank image" height="300px" width="320px">
        </div>
    </section>
    <section id="service">
        <h2 class="header1">Our service</h2>
        <div class="service">
            <div class="card_content" >
                <img src="./image/customers.png" alt="Customer" height="100"><br>
                <button class="btn"><a href="customer.php" style="text-decoration: none; color:black; font-weight:bold;">View Customer</a></button>
            </div>
            <div class="card_content">
                <img src="./image/make a tranjection.jfif" alt="Customer" height="100"><br>
                <button class="btn"><a href="customer.php" style="text-decoration: none; color:black; font-weight:bold;">Make Transaction</a></button>

            </div>
            <div class="card_content">
                <img src="./image/tranjection history.jpg" alt="tranjection" height="100"><br>
                <button class="btn"><a href="trhistory.php" style="text-decoration: none; color:black; font-weight:bold;">Transaction History</a></button>

            </div>
        </div>
    </section>
    <footer> &copy;2021 made by <b>Shreya Patel</b></footer>

</body>

</html>