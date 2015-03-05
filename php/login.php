<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 27.01.15
 * Time: 21:36
 */

SESSION_START();

// user input
$loginUSER = $_POST['user'];
$loginPW = $_POST['pw'];


//TODO DBHostname, benutzer, passwort für die MySQL Datenbank muss geändert werden auf dem Webspace
$_db_host = "localhost";
$_db_datenbank = "convex_lvw_db";
$_db_username = "root";
$_db_passwort = "root";


# Datenbankverbindung herstellen
$link = mysqli_connect('localhost', 'root', 'root','convex_lvw_db') or die("Keine Datenbankverbindung möglich: " . mysqli_error($link));

#echo $link;
# Hat die Verbindung geklappt ?

if (!$link)
{
    echo "Kann die Datenbank nicht benutzen: " . mysql_error();
    exit;                    # Programm beenden !
}


if($loginUSER == "test" && $loginPW == "123")
{
    $_SESSION['sessionId'] = session_id();
    header( "Location:../public/categories.php");



}


# Datenbank wieder schliessen
mysql_close($link);

