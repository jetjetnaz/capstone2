<?php

$conn = new mysqli('localhost', 'root', '', 'dialysis_db');

if(!$conn){
    die("Failed to connect");
}
?>