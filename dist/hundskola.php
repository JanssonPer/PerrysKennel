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

        <script>
            function formValidation() {
                alert("Fyll i alla fält innan du skickar in!");
            }
        </script>

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
                <button id="btn" formmethod=link formaction="hundskola.php"   type="button">Hundskola</button>
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
        if(isset($_POST['submit'])){
            //include(DOC_ROOT.'/config.php');

            include 'dbconnect.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $coursetype = $_POST['course'];

            if(empty($name)||empty($email)||empty($phone)){

                echo ("Fyll i alla fälten innan du skickar in!");
                exit;
            }

            $sql="INSERT INTO courses (name, email, phone, coursetype)VALUES('$name', '$email', '$phone', '$coursetype')";
            $result=mysqli_query($dbC, $sql);
            if($result){
                echo "<h3>Din intresseanmälan är inskickad, vi kommer kontakta er!</h3>";
            } else {
                echo "Inte Lyckat";
            }

        }
        ?>

        <h2>Hundkurser</h2>

        <h4>Här på Perrys kennel erbjuder vi två olika former av hundkurser</h4>

        <h4>Valpkurs</h4>

        <p>Vår valpkurs är vår populäraste och vi rekommenderar denna för alla nya hundägare då den erbjuder en bra grund och stärker relationen mellan hundförare och er nya valp.
            I denna kurs kommer vi gå igenom enkla kommandon så som sitt, ligg, stanna kvar och komma på kommando och även träna på att gå utan koppel.
            Denna kurs erbjuds varje söndag över 4 veckor med nystart den första söndagen varje månad.
        </p>

        <i>Pris för valpkurs: 799 kronor.</i>

        <h4>Unghundskurs</h4>

        <p>Våran unghundskurs erbjuds som fortsättningskurs när er hund blivit 6 månader gammal och denna kursen löper över varje lördag under 8 veckor med nystart den första lördagen i
            varannan månad. Under denna kursen så kommer vi fokusera på att stärka bandet ännu mer mellan hund och hundförare.
            Vi kommer träna på att gå fot, träna på att gå lös i närheten av andra hundar samt lite fler tricks så som rulla runt, skall och även lite nosework övningar.
        </p>

        <i>Pris för unghundskurs: 1299 kronor.</i>

        <h4>Intresseanmälan för kurser</h4>

        <p>Fyll i formuläret nedan för att göra en intresseanmälan till den kurs ni är intresserad av att gå. Vi kommer därefter kontakta er och erbjuda närmsta möjliga kurs.</p>

        <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F1D204">
            <tr>
                <form method="POST" action="hundskola.php">
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
                                <td>Telefon</td>
                                <td>:</td>
                                <td><input name="phone" type="text" id="phone" size="37" required/></td>
                            </tr>
                            <tr>
                                <td>Kurs</td>
                                <td>:</td>
                                <td><select id="course" name="course">
                                        <option value="Valpkurs">Valpkurs</option>
                                        <option value="Unghundskurs">Unghundskurs</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="submit" value="Skicka" /> <input type="reset" name="Submit2" value="Rensa" /></td>
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