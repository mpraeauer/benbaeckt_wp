<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben bäckt!</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel='stylesheet' href='./style.css'>
</head>
<body id="teamBackground">
    <header>
            <a href="./index.html">
                <h1><span class="uppercase">Ben</span>bäckt!</h1>
            </a>
            <nav id="mainnav">
                <button id="hamburger" class="closed">
                    <span class="line-1"></span>
                    <span class="line-3"></span>
                </button>
                <ul>
                    <li><a href="./index.html" class="visible_mobile" id="homenav">Startseite</a></li>
                    <li><a href="./workshop.html" id="workshopnav">Workshop</a></li>
                    <li><a href="./index.html#about" id="aboutnav">Über uns</a></li>
                    <li><a href="./teamPage.html" id="teamnav"><u>Team</u></a></li>
                </ul>
            </nav>
    </header>
    <main>
       <section id="teamPage">
        <div class="grid" >
          <span class="grid1"><span class="headerline"></span></span>
          <span class="grid2">
            <span class="gridhelp">
              <p class="super-headline">Team</p>
            <h2>Werde Teil unseres Teams!</h2>
            </span>
          </span>
          <span class="grid3"><span class="headerline"></span></span>
        </div>
        <p class="text">
          Hey du, auf der Suche nach einem coolen Job in der Backbranche? Dann komm zu uns! 
          Unsere Bäckerei hat den Ruf, die besten Backwaren in der Stadt zu haben und wir suchen 
          Leute wie dich, die Bock haben Teil unseres Teams zu werden. Als Bäcker oder Verkäufer bei 
          uns wirst du nicht nur lernen wie man die leckersten Sachen backt, sondern auch deine Fähigkeiten 
          in einem jungen und dynamischen Team ausbauen. Wir bieten dir eine angenehme Arbeitsatmosphäre, 
          eine gute Bezahlung und jede Menge Benefits. Mach dich bereit für die beste Zeit deines Lebens und 
          bewirb dich noch heute!
        </p>
        
        <h4>Bewirb dich jetzt</h4>
        <form>
          <span class="formdetail">
            <label for="fname">Vorname:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Familienname:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="tel">Telefonnummer:</label><br>
            <input type="tel" id="tel" name="tel"><br>
          </span>
          <span class="formdetail">
            <label for="cv">Lebenslauf:</label><br>
            <input type="file" id="cv" name="cv"><br>
            <label for="ml">Bewerbungsschreiben:</label><br>
            <input type="file" id="ml" name="ml"><br> 
            <input type="submit" id="submit" value="Bewerbung abschicken">
          </span>
        </form>
      </section>
    </main>
    <footer>
      <div class="container">
        <div class="info">
          <img src="../images/shop1.jpg" alt="Shop 1">
          <p>
            Ben bäckt 1 <br>
            Salzburgerstraße 1 <br>
            5020 Salzburg <br>
            Tel. 123456789 <br>
            bäcki1@benbäckt.at
          </p>
        </div>
        <div class="info">
          <img src="../images/shop2.jpg" alt="Shop2">
          <p>
            Ben bäckt 2 <br>
            Karlanderstraße 1 <br>
            5020 Salzburg <br>
            Tel. 987654321 <br>
            bäcki2@benbäckt.at
          </p>
        </div>
        <div class="info">
          <img src="../images/shop3.jpg" alt="Shop3">
          <p>
            Ben bäckt 3 <br>
            Julimandstraße 1 <br>
            5020 Salzburg <br>
            Tel. 567891234 <br>
            bäcki3@benbäckt.at
          </p>
        </div>
      </div>
      <div id="copyright">
        Copyright Marlene Präauer - Images: Unsplash & Vecteezy
      </div>
        
    </footer>
    <script src='main.js'></script>
</body>

</html>