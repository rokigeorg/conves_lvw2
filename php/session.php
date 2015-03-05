<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 01.03.15
 * Time: 01:11
 */
SESSION_START();

if(!isset($_SESSION['sessionId'])){
    // umleitung zur index.php / login.php
    //TODO url muss geändert werden wenn die seite auf den webspace kommt
    header('Location: http://localhost:8888/conves_lvw2/index.php');
}