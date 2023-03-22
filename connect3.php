<?php
    $con = new mysqli('localhost','root','','bankdb');

    if($con){
        echo "";
    }else{
        die(mysqli_error($con));
    }
?>