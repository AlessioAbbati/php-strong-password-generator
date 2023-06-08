<?php 

$number = $_GET['number'] ?? '';

function generate_random_pass($length)
{
    $characters = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,:;_-@#*%&£$?!^');
    shuffle($characters);
    $password = '';

    foreach ($characters as $element) {
        if (strlen($password) < $length) {
            $password .= $element;
        }
    }

    return $password;
};