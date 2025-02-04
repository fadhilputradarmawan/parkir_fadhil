<?php 

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_fadhil"
);

if (!$conn){
    die("connection is fail" . mysqli_connect_error());
}