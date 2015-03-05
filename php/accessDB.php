<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 01.03.15
 * Time: 01:58
 */

//TODO DBHostname, benutzer, passwort für die MySQL Datenbank muss geändert werden auf dem Webspace
//Verbindung zur Datenbank herstellen

$GLOBALS['dbLink'] = mysqli_connect('localhost', 'root', 'root','convex_lvw_db') or die("Keine Datenbankverbindung möglich: " . mysqli_error($link));



if (!$GLOBALS['dbLink'])
{
    echo "Kann die Datenbank nicht benutzen: " . mysql_error();
    exit;                    # Programm beenden !
}