<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 04.03.15
 * Time: 01:28
 */


include "../php/session.php";
include "../php/accessDB.php";




function createMaterialPopPages()
{
    $result = mysqli_query($GLOBALS['dbLink'], "SELECT * FROM Farben");

// Erstellen von einzelnen Listenpunkten
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id = $row['ID'];
        $farbton = $row['farbton'];
        $hersteller = $row['hersteller'];
        $farbnummer = $row['farbnummer'];
        $farbart = $row['farbart'];
        $fuellmenge = $row['fuellmenge'];
        $anzahl = $row['anzahl'];
        $bemerkung = $row['bemerkung'];
        $bild = $row['bild'];
        $update = $row['update'];

        //TODO Erfragen wie die Abdeckmaterialen verwaltet werden sollen über switch oder über die bemerkungen
        echo "<div data-role='page' id='Material_Poopup_" . $id . "' data-theme='a'>
                <a href='#pageone' class='ui-btn ui-icon-back ui-btn-icon-left'>Back Button</a>
                <p> Hersteller:".$hersteller." <h3>____Farbart: " .$farbart. "____Farbton: " .$farbton. "</h3></p>

            <div class='containing-element'>

                <form method='post' action='../php/InsertIntoDB.php' data-ajax='false'>
                    <div class='ui-field-contain'>
                        <label for='Material_ID'> Material ID: </label>
                        <input type='text' name='Material_ID' id='Material_ID'readonly value=" . $id . ">

                        <label for='slider-fill'>Hersteller</label>
                        <input type='text' name='hersteller' value=".$hersteller." '>

                        <label for='slider-fill'>Farbart</label>
                        <input type='text' name='farbart' value=".$farbart." '>

                        <label for='slider-fill'>Farbton</label>
                        <input type='text' name='farbton' value=".$farbton." '>

                        <label for='slider-fill'>Farbnummer</label>
                        <input type='text' name='farbnummer' value=".$farbnummer." '>

                        <label for='slider-fill'>Anzahl</label>
                        <input type='text' name='anzahl' value=".$anzahl." '>

                        <label for='slider-fill'>Füllmenge</label>
                        <input type='text' name='fuellmenge' value=".$fuellmenge." '>

                        <p>Letzte Update für die Farbe war am ".$update.".</p>




                        <label for='info'>Bemerkungen:</label>
                        <textarea name='bemerkung' value=" . $bemerkung . " >" . $bemerkung . "</textarea>


                        <label for='slider-fill'>Anzahl von " . $bezeichnung . " in " . $einheit . " im Lager:</label>
                        <input type='range' name='anzahl' id='slider-fill' value=" . $anzahl . " min='0' max='100' data-highlight='true' />
                    </div>
                        <input type='submit' data-inline='false' value='Save'>
                </form>
                </div>
                    <div data-role='footer' data-position='fixed'>
                    <h1>© 2015 Convex Lagerverwaltung</h1>

            </div>
            ";
    }
    mysql_close($GLOBALS['dbLink']);
    return;
}
//TODO Update einbauen , funktion create date, update in db schreiben, fetchen bei der ausgabe anzeigen

function createHTMLAbdeckmaterialienDom()
{
    echo "<!doctype html>
<html class='no-js' lang='de'>
<head>
    <meta charset='utf-8'/>

    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <title>Convex Lagerverwaltung Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css'>
    <script src='http://code.jquery.com/jquery-1.11.2.min.js'></script>
    <script src='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js'></script>

</head>
<body>

<div data-role='page' id='pageone' data-theme='a'>
    <div data-role='header'>
        <a href='categories.php' class='ui-btn ui-icon-back ui-btn-icon-left'>Back Button</a>
        <h2>Lagerverwaltung</h2>
    </div>
    <div data-role='main' class='ui-content'>

            <ul data-role='listview' data-inset='true'  data-filter='true' data-theme='e'>";
}

createHTMLAbdeckmaterialienDom();

//TODO PHP Insert funktion schreiben

// abfrage aud MySQL DB

$result = mysqli_query($GLOBALS['dbLink'], "SELECT * FROM Farben");
//var_dump($result);
if (isset($result)) {
    //close DB
    mysql_close($GLOBALS['dbLink']);

} else {
    echo "Verbindung zur Datenbank konnte nicht hergestellt werden.";
}

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{

    $id = $row['ID'];
    $farbton = $row['farbton'];
    $hersteller = $row['hersteller'];
    $farbnummer = $row['farbnummer'];
    $farbart = $row['farbart'];
    $fuellmenge = $row['fuellmenge'];
    $anzahl = $row['anzahl'];
    $bemerkung = $row['bemerkung'];
    $bild = $row['bild'];
    $update = $row['update'];

//TODO entnahme in der DB ergänzen
    //($row[Entnahme] == 0) ? $Lagerstatus = 'Bau' : $Lagerstatus = 'Lager';
    echo "<li>
                            <a href='#Material_Poopup_" . $id . "'data-role=>
                                <p> Hersteller:".$hersteller." <h3>____Farbart: " .$farbart. "____Farbton: " .$farbton. "</h3></p>

                            <p>Anzahl: " . $anzahl . " " . $einheit . "</p>
                            </a>
                          </li>";
}


?>

</ul>

</div>


<div data-role="footer" data-position="fixed">
    <h1>© 2015 Convex Lagerverwaltung</h1>

</div>

</div>
<?
createMaterialPopPages();

?>

</body>
</html>
