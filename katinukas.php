<?php

$cat = file_get_contents('funny-and-cute-cat-pictures-17-hd-wallpaper.jpg');



// header('Content-type: image/png');

$cat = base64_encode($cat);

// echo $cat;