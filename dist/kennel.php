<!DOCTYPE html>
<html lang="en">
<head>

    <title>Perrys Kennel</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script type="text/javascript" src="js/vendor/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>


</head>
<body onload="startTime()">
<div id="container">
    <header role="banner">

        <h1 id="logoText">Perrys Kennel</h1>

        <img id="logo" src="img/logo.png" >
    </header>
    <nav id="nav" role="navigation">
        <ul class ="topnav">
            <li><a href="index.php">Hem</a></li>
            <li><a href="minaHundar.html">Mina hundar</a></li>
            <li><a href="kennel.php">Kennel</a></li>
            <li><a href="hundskola.php">Hundskola</a></li>
            <li><a href="bildgalleri.html">Bildgalleri</a></li>
            <li><a href="gastbok.html">Gästbok</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>

        </ul>
    </nav>

    <aside>
        <div role="complementary">
            <div id="news1">
                <img id="news1img" src="img/new1.jpg">
                <h3>Hundkurser</h3>
                <p class="news">Här på Perrys Kennel erbjuder vi också hundkurser.
                    Vår valpkurs är vår populäraste och vi rekommenderar denna för alla nya hundägare då den erbjuder en bra grund och
                    stärker relationen mellan hundförare och er nya valp. I denna kurs kommer vi gå igenom enkla kommandon så som sitt,
                    ligg, stanna kvar och komma på kommando och även träna på att gå utan koppel.
                </p>
                <button id="btn" formmethod=link formaction="hundskola.html"   type="button">Hundskola</button>
            </div>

            <div id="news2">
                <img id="news1img" src="img/new2.jpg">
                <h3>Nya valpar</h3>
                <p class="news">
                    Nya valpar, små, söta och snälla.</p>
            </div>
        </div>
    </aside>

    <main role="main" id="content">
    <?php

    include 'dbconnect.php';

    /*$dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'perryskennel';
    $dbTable = 'posts';
    $dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
    or die('Error Connecting to MySQL DataBase');*/

    $sql = "SELECT * FROM kennel";
    $result = mysqli_query($dbC, $sql);

        echo("<table border=1, cellpadding='0'><tr><td align='left'>RegNr</td><td align='left'>Namn</td><td align='left'>Född</td><td align='left'>Kön</td><td align='left'>Färg</td><td align='left'>Höfter</td><td align='left'>Armbågar</td><td align='left'>Ögon</td><td align='left'>Utställning</td><td align='left'>Valpar</td></tr>");
            while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo("<tr>");
                foreach ($line as $col_value => $row_value) {
                echo("<td>$row_value</td>");
                }
                echo("</tr>\n");
            }
            echo("</table>");
    ?>
    </main>

<footer role="contentinfo">

    <p id="authors">  Grupp 1<br>
        Erik Bråtendal<br>
        Per Jansson<br>
        Louise Lam <br>
    </p>

    <p id="lastModified">
        <script language="Javascript">
            document.write("Last updated on " + document.lastModified +"");
        </SCRIPT>
    </p>


    <div id="clockdate">
        <div class="clockdate-wrapper">
            <div id="clock"></div>
            <div id="date"></div>
        </div>
    </div>

</footer>
</div>
</body>
</html>