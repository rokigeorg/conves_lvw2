<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 01.03.15
 * Time: 01:25
 */



include "../php/session.php";
include "../php/accessDB.php";


function createMaterialPopPages()
{
    $result = mysqli_query($GLOBALS['dbLink'], "SELECT * FROM Abdeckmaterial");

// Erstellen von einzelnen Listenpunkten
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id = $row['ID'];
        $bezeichnung = $row['bezeichnung'];
        $anzahl = $row['anzahl'];
        $einheit = $row['einheit'];
        $bildURL = $row['bild'];
        $bemerkung = $row['bemerkung'];
        $update = $row['update'];

        //TODO Erfragen wie die Abdeckmaterialen verwaltet werden sollen über switch oder über die bemerkungen
        echo "<div data-role='page' id='Material_Poopup_" . $id . "' data-theme='a'>
                <a href='#pageone' class='ui-btn ui-icon-back ui-btn-icon-left'>Back Button</a>
                <h3>" . $bezeichnung . "</h3>

            <div class='containing-element'>

                <form method='post' action='../php/InsertIntoDB.php' data-ajax='false'>
                    <div class='ui-field-contain'>
                        <label for='Material_ID'> Material ID: </label>
                        <input type='text' name='Material_ID' id='Material_ID'readonly value=" . $id . ">
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
                $result = mysqli_query($GLOBALS['dbLink'], 'SELECT * FROM Abdeckmaterial');

                //var_dump($result);
                if (isset($result)) {
                    // Erstellen von einzelnen Listenpunkten
                    //$row = mysql_fetch_array($result)
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {

                        $id = $row['ID'];
                        $bezeichnung = $row['bezeichnung'];
                        $anzahl = $row['anzahl'];
                        $einheit = $row['einheit'];
                        $bildURL = $row['bild'];
                        $bemerkung = $row['bemerkung'];
                        $update = $row['update'];

//TODO entnahme in der DB ergänzen
                        //($row[Entnahme] == 0) ? $Lagerstatus = 'Bau' : $Lagerstatus = 'Lager';
                        echo "<li>
                            <a href='#Material_Poopup_" . $id . "'data-role=>
                                <h3> " . $bezeichnung . "</h3>
                            <p>Anzahl: " . $anzahl . " " . $einheit . "</p>
                            </a>
                          </li>";
                    }
                }
                mysql_close($GLOBALS['dbLink']);

                ?>

            </ul>

    </div>


    <div data-role="footer" data-position="fixed">
        <h1>© 2015 Convex Lagerverwaltung</h1>

    </div>

</div>
<?
createMaterialPopPages();
//TODO Update einbauen , funktion create date, update in db schreiben, fetchen bei der ausgabe anzeigen
?>
?>
</body>
</html>
