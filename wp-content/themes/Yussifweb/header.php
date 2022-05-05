<?php global $yweb; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <title>IceTunezGh</title>
</head>

<body>

    <div class="header">
        <?php if ($yweb == 1): ?>
            <div class="top-header container-fluid">
                <div class="col-12 bg-dark text-center text-white">
                    <ul class="topbar">
                        <li class="topbar-item"><a href="">Call : 0545110415</a></li>
                        <li class="topbar-item"><a href="">| Email: djiceman@yahoo.com</a></li>
                    </ul>
                </div>
            </div>
        <?php endif ?>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container">
            <a class="navbar-brand mr-auto" href="index.html"><img class="rounded-circle" src="media/back_5.jpg" width="40" height="40" alt=""></a>
            <span class="navbar-brand"><a class="h1 name" href="index.html">IceTunezGh</a></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link h4" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4" href="#">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle h4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Uncategorized</a>
                            <a class="dropdown-item" href="#">Instrumentals</a>
                            <a class="dropdown-item" href="#">DJ Mixes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4" href="#">Videos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>