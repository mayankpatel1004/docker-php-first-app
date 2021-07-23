<?php
    echo 'Welcome to Cloudswift solutions and this is with docker';

    $mysqli = new mysqli('db','root','example','users');
    $sql = "INSERT INTO users_detail (names) VALUES('Mayank Patel')";
    $result = $mysqli->query($sql);

?>
