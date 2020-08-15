<?php
require "security.php";
?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome-free-5.0.1">
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Cabstratech</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Navbar Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"> Admin dashboard</a>
            </li>




        </ul>


        <ul class="navbar-nav ml-auto">
            <span class="nav-item">
                <a class="nav-link " href="user.php" ><img src="images/pexels-photo-372882.jpeg" alt="" style="height: 30px; border-radius: 100%" class="">   <span class="text-white">
                   Hi: <?=$_SESSION["info"]["username"]?></a>
                 </span>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>

        </ul>
    </div>
</nav>

</body>
</html>


