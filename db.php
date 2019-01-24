<?php

    $srv='localhost';
    $usr='root';
    $pwd='';
    $db='dict_en_ar';
    $connect=mysqli_connect($srv,$usr,$pwd,$db);
    if(!$connect)
    {
        die("Cannot connect to database! ".mysqli_error($connect));
    }
?>