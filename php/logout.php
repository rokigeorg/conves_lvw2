<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 02.03.15
 * Time: 00:58
 */

session_start();
if(session_destroy()) // Destroying All Sessions
{

    header("Location: ../index.php"); // Redirecting To Home Page
}
?>