<?php
session_start();
?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MY BLog</title>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Oxanium:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Orbitron:wght@900&family=Oxanium:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@700&family=Krona+One&family=Orbitron:wght@500&family=Oxanium:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7c16b84618.js" crossorigin="anonymous"></script>
</head>
<body>

<nav>

    <div id="casutaimg">

        <a id="logo" href="#"><img src="img/logoalbastru.png" alt="logo" ></a>

    </div>

    <div id="nav1">


        <div id="textsfarsit">

            <a href="#"><i id="insta" class="fab fa-instagram"></i></a>
            <a  href="#"><i  class="fab fa-facebook-f"></i></a>

            <?php

            if(isset($_SESSION['nume'])){
                echo '
                 <form id="logout" action="" method="post"   >
                <button name="logout" id="butonout">LOGOUT </button>
                    </form>
                ';

            if (isset($_POST['logout'] )) {
                $_SESSION['nume']=null;
                $_SESSION['email']=null;
                $_SESSION['parola']=null;
                header('Location:paginisite/login.php?'.$_SESSION['nume'].' ');
            }

                if ($_SESSION['nume']=="persanu13"){
               echo ' <a href="paginisite/adminon.php">ADMIN ON</a>';
                }
            }else{
            echo'
            <a href="paginisite/login.php">LOGIN</a>
            <a href="paginisite/login.php" > SIGN UP</a>';}

            ?>
        </div>


        <div id="textmijloc">
            <a href="#"> CONTACT US</a>
            <a href="#"> ABOUT US</a>
            <a href="#"> PARTENERS</a>
            <a href="#"> MAKE BY</a>



        </div>


    </div>



</nav>


<div id="title">

    <img src="img/copaci3.png" alt="copaci" >

    <h1>
        BREATHE AND THINK OF A TREE
    </h1>

</div>

<div id="pg2">



    <div id="titlucontinut">
        <h1>ARTICLES</h1>
    </div>
    <div id="new">
        <h2>New Articles</h2>
    </div>
    <?php
    if(isset($_SESSION['nume'])) {
        if ($_SESSION['nume'] == "persanu13") {
            echo '
        <form id="casutacreare" method="post"  action="elemente%20site/crearearticol1.php"> 
        <button id="butoncreare" name="creare" type="submit">CREATE NEW ARTICLE <i class="fas fa-plus"></i></button>
        </form>
        ';


        }
    }




    ?>

    <div id="casuta">
        <h1>Titlu articol </h1>
        <div id="img1"> <img src="img/img4.jpg" alt="img1"></div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem </p>
        <a href="paginiarticole/Articol1.php"> <h3>Read more</h3> </a>
    </div>

</div>




<script src="script/script1.js" type="text/javascript"></script>
<script src="script/scriptnav.js" type="text/javascript"></script>
</body>
</html>
