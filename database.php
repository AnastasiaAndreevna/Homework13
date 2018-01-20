<?php

/* Connecting to a MySQL server */
$mysqli = new mysqli('localhost', 'root', '1234', 'Home13');

if (mysqli_connect_errno()) {
    printf("Oops! Site fell. Error: %s\n", mysqli_connect_error());
    exit;
}
echo 'Connection established';

