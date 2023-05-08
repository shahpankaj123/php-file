<?php
$ptr=fopen("1.txt","a+");
//echo fread($ptr,filesize('1.txt'));
fwrite($ptr,"hello i am IT student.");

fclose($ptr);
$ptr=fopen("1.txt","r");
echo fread($ptr,filesize('1.txt'));
echo filesize('1.txt');
fclose($ptr);

?>
