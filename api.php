<?php
$img=file('img.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>