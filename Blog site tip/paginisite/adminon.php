<?php

session_start();
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MY BLog</title>
    <link rel="stylesheet" href="../css/cssnav.css" type="text/css">
    <link rel="stylesheet" href="../css/styleadmin.css" type="text/css">
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


<?php

include "../elemente site/nav.php";
?>
<div id="continut2"></div>

<div id="continut">
     <h1>ADMIN PAGE</h1>

    <h2>ALL LOGGED IN SITE</h2>

    <div id="utilizatori">

      <ul class="ul1">
       <li class="nume">NUME</li>
          <li class="email">EMAIL</li>
          <li class="parola">PAROLA</li>
          <li class="id">ID</li>
          <form name="sterge" method="post" class="sterge"  > <button > <i class="far fa-times-circle"></i></button></form>

      </ul>

        <?php
        include_once "../elemente site/dbh.php";




        $sql = "SELECT * FROM login1 ORDER BY nrUsser DESC ";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statamen fail!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {


                echo ' <ul class="ul2">
            <li class="nume">'.$row['nameUsser'].'</li>
            <li class="email">'.$row['emailUsser'].'</li>
            <li class="parola">'.$row['passwordUsser'].'</li>';
            if($row['nameUsser']=="persanu13"){
         echo'   <li class="id">#ADMIN ON</li>';}else{

                echo' <li class="id">#'.$row['nrUsser'].' ';
            }
 echo'</li>
   <form name="sterge" method="post" class="sterge"  action="../elemente%20site/delete.php" > <button type="submit" name="'.$row['nameUsser'].'" value="submit" >STERGE <i class="far fa-times-circle"></i></button></form> </ul>';
    


}
        }

?>




    </div>


</div>



<script src="../script/scriptnav.js" type="text/javascript"></script>
<script src="../script/script1nav.js" type="text/javascript"></script>
</body>
</html>


