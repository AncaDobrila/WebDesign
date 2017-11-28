<?php
global $link;

$link = mysqli_connect('localhost', 'root', '' ,'magazin');

if ($link === false) {
  die('ERROR: Could not connect. ' . mysqli_connect_error());
}

?>