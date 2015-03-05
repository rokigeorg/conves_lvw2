<!doctype html>
<html class="no-js" lang="de">
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
        <h2>Lagerverwaltung</h2>
    </div>
    <div data-role="main" class="ui-content">

        <div data-role="main" class="ui-content">
            <h2>Login convex Lagerverwaltung</h2>

            <form  data-ajax="false" action="php/login.php" method="POST">
                <div class="ui-field-contain">
                    <label for="user">Benutzername:</label>
                    <input type="text" id="user" name="user">

                    <label for="pw">Passwort</label>
                    <input type="password" id="pw" name="pw">
                </div>
                <input type="submit"  data-inline="false" value="Einloggen">
            </form>
        </div>

    </div>

    <div data-role="footer" data-position="fixed">
        <h1>© 2015 Convex Lagerverwaltung</h1>

    </div>

</div>
</body>
</html>
