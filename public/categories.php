<?php
/**
 * Created by PhpStorm.
 * User: georgrokita
 * Date: 01.03.15
 * Time: 01:25
 */

include "../php/session.php";

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Convex Lagerverwaltung Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>

<div data-role="page" id="pageone" data-theme="a">
    <div data-role="header">
        <form data-ajax="false"  method="post" action="../php/logout.php">
            <button class='ui-btn ui-icon-back ui-btn-icon-left ui-btn-inline'>Logout</button>

        <h2 class="ui-btn-inline" style="padding-left: 15%;">Lagerverwaltung</h2>
        </form>
    </div>
    <div data-role="main" class="ui-content">

        <div data-role="main" class="ui-content">
<? //TODO Links einfügen ?>
            <a href="abdeckmaterialien.php" class="ui-btn">Abdeckmaterialien</a>
            <a href="farben.php" class="ui-btn">Farben / Lacke</a>
            <a href="#" class="ui-btn">Maschinen</a>
            <a href="#" class="ui-btn">Verbrauchsmaterialien</a>
            <a href="#" class="ui-btn">Werkzeuge</a>
            <a href="#" class="ui-btn">Hinzufügen von ...</a>
        </div>

    </div>

    <div data-role="footer" data-position="fixed">
        <h1>© 2015 Convex Lagerverwaltung</h1>

    </div>

</div>
</body>
</html>
