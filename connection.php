<?php

$connection = mysqli_connect("localhost", "root", "", "project_CRUD");

// check if connection already connect or not.
if(mysqli_connect_error()){
    echo "Connection to Database error : " . mysqli_connect_error();
}