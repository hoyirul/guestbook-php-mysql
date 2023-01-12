<?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'db_guestbook');

    if($conn){
        echo 'berhasil';
    }else{
        echo error_log(die);
    }