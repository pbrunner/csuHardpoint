<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
<!--        <script type="text/javascript" src="js/usersAjax.js"></script>-->
    </head>
    <body <?php if ($section == 'Home') { echo "id='homePage'"; } ?> style="background-color: whitesmoke;">
        <nav class="navbar sticky-top navbar-expand-md navbar-expand-lg navbar-expand-xl navbar-dark" style="background-color: #1E4D2B; color: white;">
            <a class="navbar-brand" href="index.php"><img src="images/csu_logo_colorado-state-university.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationToggle" aria-controls="navigationToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigationToggle">
                <ul class="navbar-nav mr-auto" id="navbarLinks">
                    <li class="nav-item <?php if($section == "Home") { echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($section == "Login Page") { echo 'active';} ?>">
                        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php if($section == "Registration Page") { echo 'active';} ?>">
                        <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>