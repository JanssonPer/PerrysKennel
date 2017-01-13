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
                <h3 id="h3Index">Hundkurser</h3>
                <p class="news">Här på Perrys Kennel erbjuder vi också hundkurser.
                    Vår valpkurs är vår populäraste och vi rekommenderar denna för alla nya hundägare då den erbjuder en bra grund och
                    stärker relationen mellan hundförare och er nya valp. I denna kurs kommer vi gå igenom enkla kommandon så som sitt,
                    ligg, stanna kvar och komma på kommando och även träna på att gå utan koppel.
                </p>
                <button id="btn" form method="link" action="hundskola.php" input type="submit">Hundskola</button>
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
        <div id="welcome">
            <h2>Välkommen!</h2>
            <p>Batuulis kennel bedriver en liten och engagerad uppfödning av Rhodesian Ridgeback i Hindås utanför Göteborg.
                Min ambition är att föda upp sunda, trevliga & rastypiska hundar, som framför allt ska fungera som familjemedlemmar i
                sina nya hem. Funderar ni på att skaffa en Rhodesian Ridgeback, så är du hjärtligt välkommen att höra av dig till mig
                med dina frågor eller för allmänt "hundprat".</p>
        </div>

        <div id="main1">

            <style>
                img {
                    float: left;
                    margin: 0px 0px 0px 0px;
                }
            </style>
            <p>
                <?php
             //Establish connection to database
                include 'dbconnect.php';

             $select_posts = "select * from posts order by post_id DESC ";

             $run_posts = mysqli_query($dbC, $select_posts);

             while ($row=mysqli_fetch_array($run_posts)) {

             $post_id = $row['post_id'];
             $post_title = $row['post_title'];
             $post_date = $row['post_date'];
             $post_img = $row['post_img'];
             $post_content = $row['post_content'];

             ?>




                <h3><p align="left"><?php echo $post_title; ?>
            <img src="img/<?php echo $post_img; ?>" width="170" height="110"/>
        </p></h3>


            <p align="left"><?php echo $post_content ?></p>

            <p align="left">Publicerat: <?php echo $post_date ?></p>

            <hr>

            <?php

            }
            ?>

            </p>


        </div>

</div>
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
        </script>
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