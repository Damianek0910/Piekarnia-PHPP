<?php

require_once("db.php");

session_start();

if (!empty($_POST['login']) && !empty($_POST['password']))
{
    if ($_POST['login'] == USERNAME)
    {
        echo password_hash(PASSWORD, PASSWORD_DEFAULT);
    }
}