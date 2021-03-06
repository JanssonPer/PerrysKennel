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

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Connect to server and select database.
//$con =mysqli_connect("$host", "$username", "$password", $db_name)or die("cannot connect server ");
//mysqli_select_db($con,"$db_name")or die("cannot select DB");

$datetime=date("y-m-d h:i:s"); //date time

$sql="INSERT INTO guestbook(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
$result=mysqli_query($dbC, $sql);

//check if query successful
if($result){
    echo "Successful";
    echo "<BR>";

        // link to view guestbook page
        echo "<a href='viewgastbok.php'>View guestbook</a>";
        }

        else {
        echo "ERROR";
        }
        mysqli_close($dbC);
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