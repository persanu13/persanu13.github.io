<?php $numeArticol="Articol609fcb52b9c7a8.51196397";?><?php
session_start();
$_SESSION["numeArticol"]=$numeArticol;
$x=0;
if (file_exists("cod1/$numeArticol.php")) {

    include "cod1/$numeArticol.php";
};
?>
     
    <!DOCTYPE html>
    <html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>MY BLog</title>
        <link rel="stylesheet" href="../css/cssnav.css" type="text/css">
        <link rel="stylesheet" href="../css/stylearticole.css" type="text/css">
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

include "../elemente site/navArricole.php";

?>
<div id="continut2"> </div>

<div id="continut">
    <h1>ARTICLE NAME</h1>

    <?php
     $x3=0;
     $x4=1;
     $y=1;
    if (file_exists('cod1/'.$numeArticol.'2.php')) {


        include 'cod1/'.$numeArticol.'2.php';


    };
    ?>

<div id="butoanemake">
    <?php

    if (isset($_SESSION['nume'])){
        if ($_SESSION['nume']=='persanu13'){
echo'  <form action="" method="post">
    <button name="creareimg" type="submit">Make Img Box</button>
</form>
    <form action="" method="post">
        <button name="crearetxt" type="submit">Make Txt Box</button>
    </form>';
        }
    }

?>
    <?php

    if (isset($_POST['creareimg'])){

        $myfile = fopen("../paginiarticole/cod1/".$numeArticol."2.php", "a") or die("Unable to open file!");

         $file='$myfile';$src='$src';$x1='$x';$numeArticol1='$numeArticol';$fasName=' "fas fa-file-image" ';$src1=" '.$src.' ";$nr='$nr';$x2='$x3';$x5='$x4';
        $txt=" <form id='casutaimg$x4' method='post'    action='../elemente%20site/imgput.php'   enctype='multipart/form-data' >
    <?php

     $nr=0;
    if ($x1>$x2){

        $file = fopen('../paginiarticole/cod1/'.$numeArticol1.'1.php', 'r') or die('Unable to open file!');
        
        
           while ($nr<$x2+1){
               $src=fgets($file);
               $nr+=1;
           }
        fclose($file);


        echo ' <img src=$src1> ';
    }else{

   echo' <input type=file name=file id=img$x4 >
     <label for=img$x4><h2>CHOSE IMG <br> IF U WANT</h2> <i id=imgimg class=$fasName ></i> </label>';}
    $x2+=1;
     ?>
</form>
<script>  $('#img$x4').change(function(){
        $('#casutaimg$x4').submit();
    });</script>
   <?php
   $x5+=1;
   ?>
        ";



        fwrite($myfile,$txt);
        fclose($myfile);
      echo'  <meta http-equiv="Refresh" content="0.01; url=cod1/refresh.php"> ';


    };



    if (isset($_POST['crearetxt'])) {

        $myfile = fopen("../paginiarticole/cod1/" . $numeArticol . "2.php", "a") or die("Unable to open file!");
        $nume='$_SESSION["nume"]';$ceva='$ceva';$t="'";$Post1='$_POST['.$t.'text'.$y.''.$t.']';$y2='$y';$txt='$txt';$file='$myfile';
        $txt = "<?php


if(!isset($ceva$y)){
$ceva$y='Put text her';
}

if (file_exists('cod1/$numeArticol.$y.2.php')) {
    $file = fopen('cod1/$numeArticol.$y.2.php', 'r');
    $ceva$y = fread($file, 1000);
    fclose($file);
}
if($ceva$y==null){
    $file=fopen('cod1/$numeArticol.$y.2.php', 'w');
    $txt='Put text her!';
    fwrite($file,$txt);
    fclose($file);
    }

 if (file_exists('cod1/$numeArticol.$y.2.php')) {
 $file=fopen('cod1/$numeArticol.$y.2.php', 'r');
 $ceva$y= fread($file,filesize('cod1/$numeArticol.$y.2.php'));
   fclose($file);
  
 }

 
 if(isset($nume)){
 if($nume=='persanu13'){
 if (isset($Post1)){
 $file=fopen('cod1/$numeArticol.$y.2.php', 'w');
  $txt=$Post1 ;
   fwrite($file,$txt);
   fclose($file);
    echo'  <meta http-equiv=Refresh content=0.01; url=cod1/refresh.php> ';
   $file=fopen('cod1/$numeArticol.$y.2.php', 'r');
 $ceva$y= fread($file,filesize('cod1/$numeArticol.$y.2.php'));
   fclose($file);
   
   }
 
echo '<form id=casutatext$y method=post  action=  >
    <textarea type=text class=text id=text$y name=text$y >'.$ceva$y.'</textarea>
</form> ';
 
 }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva$y.'  </pre></div> ';         
 
 }
  }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva$y.'  </pre></div> '; }
 
 
 
 ?>

<script>  $('#text$y').change(function(){
        $('#casutatext$y').submit();
    });</script>
<?php
$y2+=1;
?>

"
        ;
        fwrite($myfile, $txt);
        fclose($myfile);
        echo'  <meta http-equiv="Refresh" content="0.01; url=cod1/refresh.php"> ';
    }
    ?>



</div>




</div>








<script src="../script/scriptarticole.js" type="text/javascript"></script>
<script src="../script/scriptnav.js" type="text/javascript"></script>
<script src="../script/script1nav.js" type="text/javascript"></script>
</body>
</html>

<?php
echo $x;

?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        