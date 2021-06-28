<?php
session_start();
if (!isset($_SESSION['greseala1']))
{$_SESSION['greseala1']='password';};
if (!isset($_SESSION['greseala2']))
{$_SESSION['greseala2']='nume';};



?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MY BLog</title>
    <link rel="stylesheet" href="../css/stylelog.css" type="text/css">
    <link rel="stylesheet" href="../css/cssnav.css" type="text/css">
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


<div id="continut">

 <div id="log">

     <?php


     if (isset($_POST['log'] )) {
         include_once "../elemente site/dbh.php";

         $name=$_POST['nume'];
         $parola=$_POST['parola'];


         $sql = "SELECT * FROM login1 ";
         $stmt=mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             echo "SQL statamen fail!";
         } else {
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);

             while ($row = mysqli_fetch_assoc($result)) {

                 if( $row['nameUsser']==$name ) {
                     if($row['passwordUsser']==$parola){
                         $_SESSION['nume']=$name;
                         header("Location:../blogpg1.php");
                         $_SESSION['greseala1']=null;
                         $_SESSION['greseala2']=null;
                         break;
                     }else{$_SESSION['greseala1']='parola gresita';


                     }
                     $_SESSION['greseala2']='nume';
                     break;
                 } else{$_SESSION['greseala2']='nume gresit';

                 }

             }



         }

     }



     echo'
    <form id="casutalog" action="" method="post"  autocomplete="off" >
    <h1>LOGIN</h1>
  <div id="nume1"> <h2 id="nume">'.$_SESSION['greseala2'].'</h2><input  type="text" name="nume" value="" ></div> 
    <div id="parola1"> <h2 id="parola">'.$_SESSION['greseala1'].'</h2>  <input type="password" name="parola" value=""></div>
    <button name="log" type="submit" value="Submit">LOGIN</button>
      </form>
    ';

     $_SESSION['greseala1']=null;
     $_SESSION['greseala2']=null;

     ?>


 </div>


    <div id="sign">
        <?php


        if (!isset($_SESSION['greseala3']))
        {$_SESSION['greseala3']='nume';};
        if (!isset($_SESSION['greseala4']))
        {$_SESSION['greseala4']='password';};
        if (!isset($_SESSION['greseala5']))
        {$_SESSION['greseala5']='email';};



        if (isset($_POST['sign'] )) {

            $name=$_POST['nume'];
            $email=$_POST['adresa'];
            $parola=$_POST['parola'];

            if(!empty($name)){

                if(!empty($email)){

                    if(!empty($parola)){

                        if(strlen($name)>7){

                            if(strlen($parola)>7){

                                include_once "../elemente site/dbh.php";


                                $sql = "SELECT * FROM login1 ";
                                $stmt=mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    echo "SQL statamen fail!";
                                } else {
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);
                                    $nr1=0;$nr2=0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if($name==$row['nameUsser']){$nr1+=1;$_SESSION['greseala3']='nume existent';}
                                         if($email==$row['emailUsser']){$nr2+=1;$_SESSION['greseala5']='email folosit';}

                                         }

                                         if ($nr1==0 and $nr2==0 ){

                                                        if($parola!=$row['passwordUsser']){

                                                            $sql = "SELECT * FROM login1";
                                                            $stmt = mysqli_stmt_init($conn);
                                                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                                                echo "SQl failed1";
                                                            }else {
                                                                mysqli_stmt_execute($stmt);
                                                                $result = mysqli_stmt_get_result($stmt);
                                                                $rowCount = mysqli_num_rows($result);
                                                                 $nr=$rowCount+1;
                                                                $sql = "INSERT INTO login1 (nameUsser, emailUsser,	passwordUsser,nrUsser) VALUES (?, ?, ?,?);";
                                                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                                                    echo "SQl failed2";

                                                                } else {
                                                                    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $parola, $nr);
                                                                    mysqli_stmt_execute($stmt);
                                                                    $_SESSION['nume']=$name;
                                                                    header('Location:../blogpg1.php?'.$_SESSION['nume'].' ');

                                                                }
                                                            }


                                                        }else{ $_SESSION['greseala4']='parola folosita';}
                                         }






















                                }
                            }else{ $_SESSION['greseala4']='parola prea scurta';}


                        }else{ $_SESSION['greseala3']='nume prea scurt';}



                    }else{$_SESSION['greseala4']='introduceti parola'; }



                }else{$_SESSION['greseala5']='introduceti email'; }


            }else{$_SESSION['greseala3']='introduceti nume' ;}


        }



        echo' <form id="casutasign" action="" method="post"  autocomplete="off">
                       <h1>SIGN IN</h1>
                     <div id="nume1"><h2 id="nume">'.$_SESSION['greseala3'].'</h2> <input  type="text" name="nume" ></div>  
                    <div id="nume1"> <h2 id="adresa">'.$_SESSION['greseala5'].'</h2>  <input  type="email" name="adresa" placeholder="" ></div> 
                     <div id="parola1"><h2 id="parola">'.$_SESSION['greseala4'].'</h2>  <input type="password" name="parola" placeholder="" ></div> 
                        <button name="sign" type="submit" value="Submit">SIGN IN</button>
                          </form>';




        $_SESSION['greseala3']=null;
        $_SESSION['greseala4']=null;
        $_SESSION['greseala5']=null;
        ?>



    </div>

</div>




<script src="../script/script1nav.js" type="text/javascript"></script>
</body>
</html>






