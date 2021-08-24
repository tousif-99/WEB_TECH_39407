<?php

function connection()
{
    $connection =new mysqli("remotemysql.com", "2gRx0RVjVI", "iqQ6PDjhKM", "2gRx0RVjVI");
    if($connection->connect_errno)
    {
        die("Database connection failed.".$connection->connect_error);
    }
    return $connection;
}
?>