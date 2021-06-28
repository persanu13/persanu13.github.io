
<?php
session_start();

$x3=0;
$x4=1;
$numeArticol=$_SESSION["numeArticol"];
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
        header('Location:'.$_SESSION['numeArticol'].'.php');


    };




if (isset($_POST['crearetxt'])) {

    $myfile = fopen("../paginiarticole/cod1/" . $numeArticol . "2.php", "a") or die("Unable to open file!");
    $txt = "
<form id='casutatext1'>
    <textarea type='text' id='text1' name='text1' >Put text her !</textarea>

</form>";
    fwrite($myfile, $txt);
    fclose($myfile);
    header('Location:'.$_SESSION['numeArticol'].'.php');
}
