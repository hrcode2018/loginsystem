<?php

$conn = mysqli_connect("remotemysql.com", "0Tfsobb9nG", "LdcUfpUAQ3", "0Tfsobb9nG", "3306");

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
