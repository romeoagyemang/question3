<?php

$con = new mysqli('localhost','root','', 'peopleinfo');

if ($con) {
    //echo 'database success!';
}else {
    die(mysqli_error($con));
}