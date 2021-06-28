<?php

session_start();


if(isset($_POST['creare'])){

         $filename1="Articol" .uniqid("", true);
         $filename2="../paginiarticole/".$filename1.".php";

    $myfile = fopen("crearearticolex.txt", "r") or die("Unable to open file!");
    $text= fread($myfile,filesize("crearearticolex.txt"));
    fclose($myfile);

        $myfile = fopen($filename2, "a") or die("Unable to open file!");
        $text2='<?php $numeArticol="';
        $text3='";?>';
         fwrite($myfile, $text2);
         fwrite($myfile, $filename1);
         fwrite($myfile, $text3);
           fwrite($myfile, $text);
        fclose($myfile);
        header("Location:../paginiarticole/$filename2");


}











?>