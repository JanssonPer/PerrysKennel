<!DOCTYPE html>
<html lang="en">
<head>

    <title>Perry Kennel</title>
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
        <span><a href="#content">Skip to Content</a></span>
        <h1 id="logoText"> Perrys Kennel</h1>
        <img id="logo" src="img/logo.png" style="width:128px;height:128px;" >
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
                <button id="btn" onclick="location.href='hundskola.php'" type="button">Hundskola</button>
            </div>

            <div id="news2">
                <img id="news1img" src="img/new2.jpg">
                <h3>Nya valpar </h3>
                <p class="news">
                    Nya valpar, små, söta och snälla.

                </p>
            </div>
        </div>
    </aside>

    <main role="main" id="content">
        <?php
        if(isset($_POST['submit'])){

            include 'dbconnect.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            if(empty($name)||empty($email)){
                echo "Fyll i alla fälten!";
                exit;
            }

            $sql="INSERT INTO email (name, email, comment)VALUES('$name', '$email', '$comment')";
            $result=mysqli_query($dbC, $sql);
            if($result){
                echo "<h1>Mail inskickat</h1>";
            } else {
                echo "Inte Lyckat";
            }

        }



        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <style>
                #map {
                    height: 400px;
                    width: 100%;
                }
            </style>
        </head>
        <body>
        <h3>Kontaktuppgifter</h3>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 55.703409, lng: 13.192097};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjf9wQ3K54TNJpqxO8RQVaEspDPpizqKQ&callback=initMap">
        </script>
        </body>
        </html>

        <p align="left">Namn: Perrys Kennel</p>
        <p align="left">Adress: Lilla Fiskaregatan 2, Lund</p>
        <p align="left">Tel: <a href=046112233>046112233</a></p>

        <?php
        error_reporting(0);
        $msg = $_GET['msg'];  //GET the message
        if($msg!='') echo '<p>'.$msg.'</p>';
        ?>

        <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
            <tr>
                <td><strong>Skicka gärna ett mail till Perrys Kennel</strong></td>
            </tr>
        </table>
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F1D204">
            <tr>
                <form method="POST" action="kontakt.php">
                    <td>
                        <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                            <tr>
                                <td width="117">Namn</td>
                                <td width="14">:</td>
                                <td width="357"><input name="name" type="text" id="name" size="37" required/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input name="email" type="email" id="email" size="37" required/></td>
                            </tr>
                            <tr>
                                <td valign="top">Meddelande</td>
                                <td valign="top">:</td>
                                <td><textarea name="comment" cols="38" rows="5" id="comment"></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
                            </tr>
                        </table>
                    </td>
                </form>
            </tr>
        </table>

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