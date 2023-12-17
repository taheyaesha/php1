<?php


$api="https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";

$videourl= "https://youtu.be/t0Q2otsqC4I?si=3SAJx7UDuXFKWUKm";
$newurl=explode("?si=",$videourl);

$videoid=explode("/",$newurl[0]);
$videoid2=end($videoid);
$url= str_replace("<insert-youtube-video-id-here>",$videoid2,$api);
echo"<img src='$url'>";


?>

