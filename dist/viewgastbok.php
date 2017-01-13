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
        <br>
        <strong>Gästbok | <a href="gastbok.html">Nytt gästboksinlägg</a> </strong>
        <br>
        <?php

        include 'dbconnect.php';

        $sql="SELECT * FROM guestbook";
        $result = mysqli_query($dbC, $sql);
        while($rows=mysqli_fetch_assoc($result)){
        ?>
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F1D204">
            <tr>
                <td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><?php echo $rows['id']; ?></td>
                    </tr>
                    <tr>
                        <td width="117">Name</td>
                        <td width="14">:</td>
                        <td width="357"><?php echo $rows['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $rows['email']; ?></td>
                    </tr>
                    <tr>
                        <td valign="top">Comment</td>
                        <td valign="top">:</td>
                        <td><?php echo $rows['comment']; ?></td>
                    </tr>
                    <tr>
                        <td valign="top">Date/Time </td>
                        <td valign="top">:</td>
                        <td><?php echo $rows['datetime']; ?></td>
                    </tr>
                </table></td>
            </tr>
        </table>

        <?php
}
mysqli_close($dbC); //close database
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