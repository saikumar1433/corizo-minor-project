<?php
$connect = mysqli_connect("localhost", "root", "", "e-commerce");
        if($connect === false){
            die("ERROR: could not connect" . mysqli_connect_error());
        }
        ?>