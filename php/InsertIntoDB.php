<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 03.03.15
 * Time: 00:59
 */

include 'accessDB.php';

$id = $_POST['Material_ID'];
$Bemerkung = $_POST['bemerkung'];
$Anzahl = $_POST['anzahl'];

$result = mysqli_query($GLOBALS['dbLink'],"UPDATE Abdeckmaterial SET bemerkung='$Bemerkung', anzahl= '$Anzahl' WHERE ID='$id'") or exit("Fehler im SQL-Kommando:UPDATE Abdeckmaterialien SET Bemerkung=$Bemerkung WHERE ID=$id");;



