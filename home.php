<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>







<?php
//session_start();
?>

<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PGLife</title> -->
    <?php
    //include "includes/head_links.php";
    ?>
    <!-- <link href="css/home.css" rel="stylesheet" />
</head>

<body> -->
    <!-- navbar -->
    <!-- <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="home.php">
                <img src="img/logo.png" alt="" width="100" height="40" class="d-inline-block align-text-top"> </a>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="#"><i
                                    class="bi bi-person-fill"></i> Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active me-2" href="#"><i class='bx bx-log-in'></i>Login</a>
                        </li>

                    </ul>
                </div>
        </div>
    </nav>
    </div>
    </nav> -->
    

    <?php
   // include "includes/head_links.";
    ?>
    <!-- <link href="css/home.css" rel="stylesheet" /> -->
    <!-- navbar end -->

    <!-- hero -->
    <!-- <div class="hero text-center w-100 ">
        <div class="her">
            <h1 class="my-4">Happiness per Square Foot</h1>
            <div class="container-fluid">
                <form class="d-flex" style="justify-content: center;" role="search">
                    <input class="form-control me-2" style="width: 40%;height: 45px;" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div> -->
    <!-- hero end -->

    <!-- city -->
    <!-- <div class="city text-center">
        <h2>Major Cities</h2>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="property_list.php"> <img class="list" src="img/delhi.png" alt="" width="50%"></a>
                </div>
                <div class="col-md-3">
                    <a href="property_list.php"><img class="list" src="img/mumbai.png" alt="" width="50%"></a>
                </div>
                <div class="col-md-3">
                    <a href="property_list.php"><img class="list" src="img/bangalore.png" alt="" width="50%"></a>
                </div>
                <div class="col-md-3">
                    <a href="property_list.php"><img class="list" src="img/hyderabad.png" alt="" width="50%"></a>
                </div>
            </div>
        </div>

    </div> -->
    <!-- city end -->

      <?php
    //include "includes/signup_modal.php";
    //include "includes/login_modal.php";
    //include "includes/footer.php";
    ?>

    
    <!-- <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html> -->