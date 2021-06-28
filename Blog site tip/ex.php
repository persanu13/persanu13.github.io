<!DOCTYPE html>
<html>
<body >

<?php
$myfile = fopen("webdictionary.txt", "w") or die("Unable to open file!");
fwrite($myfile,$txt);
fclose($myfile);
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
$b= fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

echo $b;
?>

</body>
</html>