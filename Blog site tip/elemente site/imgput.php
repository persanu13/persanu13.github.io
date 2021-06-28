<?php
session_start();
$ScrisName=$_SESSION["numeArticol"];

if (isset($_FILES['file'])) {
    $img = $_FILES['file'];
    $filename = $img['name'];
    $fileExt = explode(".", $filename);
    $fileActualExt = strtolower(end($fileExt));
    $fileError = $img["error"];
    $fileTempName = $img["tmp_name"];


    $allowed = array("jpg", "jpeg", "png" );

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $imgName="img.". uniqid("", true) . "." . $fileActualExt;
            $fileDestination = "../img/imgarticole/" . $imgName;



            move_uploaded_file($fileTempName,$fileDestination);
           $y="scris";



            $myfile = fopen("../paginiarticole/cod1/".$ScrisName."1.php", "a") or die("Unable to open file!");
            $txt1="$fileDestination\n";
            fwrite($myfile, $txt1);
            fclose($myfile);

            if (file_exists("../paginiarticole/cod1/".$ScrisName.".php")){

            }else{
                $myfile = fopen("../paginiarticole/cod1/".$ScrisName.".php", "a") or die("Unable to open file!");
             $txt1="<?php\n";
             fwrite($myfile, $txt1);
             fclose($myfile);
            };
            $myfile = fopen("../paginiarticole/cod1/".$ScrisName.".php", "a") or die("Unable to open file!");
            $txt='$x+=1;';
            fwrite($myfile, $txt);
            fclose($myfile);
            header('Location:../paginiarticole/'.$ScrisName.'.php');


            }else{echo'eroare';}

        }else{echo'eroaremarime';}
    }else{echo 'eror3';  }
$_FILES['file']=null;




    ?>