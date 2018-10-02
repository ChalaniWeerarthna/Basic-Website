<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP CODE PLAYGROUND</title>
    
    <!-- Bootstrap 4 main style -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Style -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Jquery script -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="js/bootstrap.min.js"></script>
    <?php
        if(strpos($_SERVER['PHP_SELF'],'index.php')){
            $current = "index.php";
        }else if(strpos($_SERVER['PHP_SELF'],'about.php')){
            $current = "about.php";
        }else if(strpos($_SERVER['PHP_SELF'],'contact.php')){
            $current = "contact.php";
        }else{
            $current = "error";
        }
        $about_url = 0; 
        $contact_url = 0;
        if ($current == 'about.php') {
            $about_url = "nav-item active";
        } else if ($current == 'contact.php') {
            $contact_url = "nav-item active";
        }
    ?>
</head>
<body>

    <!-- Start navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="index.html"><h2>LOGO</h2></a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="<?php echo "$about_url";?>">
                    <a class="nav-link" href="about.php"><h5>About</h5><span class="sr-only">(current)</span></a>
                </li>
                <li class="<?php echo $contact_url?>">
                    <a class="nav-link" href="contact.php"><h5>Contact</h5></a>
                </li>
        </div>
    </nav>
    <!-- End navigation -->


