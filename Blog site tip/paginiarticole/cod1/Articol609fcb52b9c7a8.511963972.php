 <form id='casutaimg1' method='post'    action='../elemente%20site/imgput.php'   enctype='multipart/form-data' >
    <?php

     $nr=0;
    if ($x>$x3){

        $myfile = fopen('../paginiarticole/cod1/'.$numeArticol.'1.php', 'r') or die('Unable to open file!');
        
        
           while ($nr<$x3+1){
               $src=fgets($myfile);
               $nr+=1;
           }
        fclose($myfile);


        echo ' <img src= '.$src.' > ';
    }else{

   echo' <input type=file name=file id=img1 >
     <label for=img1><h2>CHOSE IMG <br> IF U WANT</h2> <i id=imgimg class= "fas fa-file-image"  ></i> </label>';}
    $x3+=1;
     ?>
</form>
<script>  $('#img1').change(function(){
        $('#casutaimg1').submit();
    });</script>
   <?php
   $x4+=1;
   ?>
        <?php


if(!isset($ceva1)){
$ceva1='Put text her';
}

if (file_exists('cod1/Articol609fcb52b9c7a8.51196397.1.2.php')) {
    $myfile = fopen('cod1/Articol609fcb52b9c7a8.51196397.1.2.php', 'r');
    $ceva1 = fread($myfile, 1000);
    fclose($myfile);
}
if($ceva1==null){
    $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.1.2.php', 'w');
    $txt='Put text her!';
    fwrite($myfile,$txt);
    fclose($myfile);
    }

 if (file_exists('cod1/Articol609fcb52b9c7a8.51196397.1.2.php')) {
 $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.1.2.php', 'r');
 $ceva1= fread($myfile,filesize('cod1/Articol609fcb52b9c7a8.51196397.1.2.php'));
   fclose($myfile);
  
 }

 
 if(isset($_SESSION["nume"])){
 if($_SESSION["nume"]=='persanu13'){
 if (isset($_POST['text1'])){
 $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.1.2.php', 'w');
  $txt=$_POST['text1'] ;
   fwrite($myfile,$txt);
   fclose($myfile);
    echo'  <meta http-equiv=Refresh content=0.01; url=cod1/refresh.php> ';
   $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.1.2.php', 'r');
 $ceva1= fread($myfile,filesize('cod1/Articol609fcb52b9c7a8.51196397.1.2.php'));
   fclose($myfile);
   
   }
 
echo '<form id=casutatext1 method=post  action=  >
    <textarea type=text class=text id=text1 name=text1 >'.$ceva1.'</textarea>
</form> ';
 
 }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva1.'  </pre></div> ';         
 
 }
  }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva1.'  </pre></div> '; }
 
 
 
 ?>

<script>  $('#text1').change(function(){
        $('#casutatext1').submit();
    });</script>
<?php
$y+=1;
?>

 <form id='casutaimg2' method='post'    action='../elemente%20site/imgput.php'   enctype='multipart/form-data' >
    <?php

     $nr=0;
    if ($x>$x3){

        $myfile = fopen('../paginiarticole/cod1/'.$numeArticol.'1.php', 'r') or die('Unable to open file!');
        
        
           while ($nr<$x3+1){
               $src=fgets($myfile);
               $nr+=1;
           }
        fclose($myfile);


        echo ' <img src= '.$src.' > ';
    }else{

   echo' <input type=file name=file id=img2 >
     <label for=img2><h2>CHOSE IMG <br> IF U WANT</h2> <i id=imgimg class= "fas fa-file-image"  ></i> </label>';}
    $x3+=1;
     ?>
</form>
<script>  $('#img2').change(function(){
        $('#casutaimg2').submit();
    });</script>
   <?php
   $x4+=1;
   ?>
        <?php


if(!isset($ceva2)){
$ceva2='Put text her';
}

if (file_exists('cod1/Articol609fcb52b9c7a8.51196397.2.2.php')) {
    $myfile = fopen('cod1/Articol609fcb52b9c7a8.51196397.2.2.php', 'r');
    $ceva2 = fread($myfile, 1000);
    fclose($myfile);
}
if($ceva2==null){
    $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.2.2.php', 'w');
    $txt='Put text her!';
    fwrite($myfile,$txt);
    fclose($myfile);
    }

 if (file_exists('cod1/Articol609fcb52b9c7a8.51196397.2.2.php')) {
 $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.2.2.php', 'r');
 $ceva2= fread($myfile,filesize('cod1/Articol609fcb52b9c7a8.51196397.2.2.php'));
   fclose($myfile);
  
 }

 
 if(isset($_SESSION["nume"])){
 if($_SESSION["nume"]=='persanu13'){
 if (isset($_POST['text2'])){
 $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.2.2.php', 'w');
  $txt=$_POST['text2'] ;
   fwrite($myfile,$txt);
   fclose($myfile);
    echo'  <meta http-equiv=Refresh content=0.01; url=cod1/refresh.php> ';
   $myfile=fopen('cod1/Articol609fcb52b9c7a8.51196397.2.2.php', 'r');
 $ceva2= fread($myfile,filesize('cod1/Articol609fcb52b9c7a8.51196397.2.2.php'));
   fclose($myfile);
   
   }
 
echo '<form id=casutatext2 method=post  action=  >
    <textarea type=text class=text id=text2 name=text2 >'.$ceva2.'</textarea>
</form> ';
 
 }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva2.'  </pre></div> ';         
 
 }
  }else{
  echo'<div class=casutapre>  <pre class=text1> '.$ceva2.'  </pre></div> '; }
 
 
 
 ?>

<script>  $('#text2').change(function(){
        $('#casutatext2').submit();
    });</script>
<?php
$y+=1;
?>

 <form id='casutaimg3' method='post'    action='../elemente%20site/imgput.php'   enctype='multipart/form-data' >
    <?php

     $nr=0;
    if ($x>$x3){

        $myfile = fopen('../paginiarticole/cod1/'.$numeArticol.'1.php', 'r') or die('Unable to open file!');
        
        
           while ($nr<$x3+1){
               $src=fgets($myfile);
               $nr+=1;
           }
        fclose($myfile);


        echo ' <img src= '.$src.' > ';
    }else{

   echo' <input type=file name=file id=img3 >
     <label for=img3><h2>CHOSE IMG <br> IF U WANT</h2> <i id=imgimg class= "fas fa-file-image"  ></i> </label>';}
    $x3+=1;
     ?>
</form>
<script>  $('#img3').change(function(){
        $('#casutaimg3').submit();
    });</script>
   <?php
   $x4+=1;
   ?>
        