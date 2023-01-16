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
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
    <header>
      <?php
        $post = get_page_by_path('heroimage', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        ?>
  <div id="hero" style="background-image:url(<?php echo $thumbnail_url ?>)">
   <div id="background">
            <a href="/">
                <h1><span class="uppercase">Ben</span>bäckt!</h1>
            </a>
            <nav id="mainnav">
              <button id="hamburger" class="closed">
                  <span class="line-1"></span>
                  <span class="line-3"></span>
              </button>
              <ul>
                  <li><a href="./index.html" class="visible_mobile" id="homenav"><u>Startseite</u></a></li>
                  <li><a href="./workshop.html" id="workshopnav">Workshop</a></li>
                  <li><a href="#about" id="aboutnav">Über uns</a></li>
                  <li><a href="./teamPage.html" id="teamnav">Team</a></li>
              </ul>
          </nav>
            <div class="box">
              <div id="maintitle">
                  <h2><span class="uppercase">hi</span><br>bäckt!</h2>
                  <p>"Die rundesten Semmerl Salzburgs!"</p>
              </div>
          </div>
        </div>
      </div>
    </header>
    <main>
        <section id="workshop">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
                <p class="super-headline">Backworkshops</p>
              <h2>Ben bäckt - worauf wartest du?</h2>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="mastergrid">
              <div class="image1"></div>
              <div class="container1">
                <h3>Mit den Basics zum Meisterbäcker!</h3>
                <p>Es muss nicht immer kompliziert sein - die einfachsten Grundteige erklärt!</p>
                <a href="./workshop.html" class="button">zum Workshop</a>
              </div>
              <div class="container2">
                <h3>Keine Zeit? - Kein Problem!</h3>
                <p>Schnelle und einfache Rezepte für die vielbeschäftigten Feinschmecker unter uns!</p>
                <a href="./workshop.html" class="button">zum Workshop</a>
              </div>
              <div class="image2"></div>
              <div class="image3"></div>
              <div class="container3">
                <h3>Knusper Knupser Knäuschen...</h3>
                <p>Die knusprigsten Weckerl leicht gemacht!</p>
                <a href="./workshop.html" class="button">zum Workshop</a>
              </div>
            </div>

        </section>
      

        <section id="about">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
                <p class="super-headline">Über uns</p>
              <h2><span class="uppercase">Nachhaltigkeit</span><br>wird bei uns groß geschrieben</h2>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="container">
               
                <img src="../images/about_mobil.png" alt="Nachhaltigkeitssymbole" class="visible_mobile">
                <img src="../images/about_links.png" alt="<?php echo $alt_text ?>" class="visible_desktop">
                <div class="text">
                    <p>
                      Unser Team ist stolz darauf, Nachhaltigkeit als eine unserer obersten Prioritäten zu betrachten. 
                      Wir sind uns sicher, dass es für uns alle wichtig ist, unseren Beitrag zum Umweltschutz zu leisten 
                      und deshalb sorgen wir dafür, dass unsere Shops mit 100% nachhaltiger Energie versorgt werden. Stell 
                      dir vor, du kannst behaupten, dass du heute "grünes" Brot gefrühstückt hast, das fühlt sich doch cool 
                      an, oder?
                      In unserem Blogpost erfährst du mehr über unsere Bemühungen, nachhaltig zu arbeiten und wie wir uns 
                      jeden Tag bemühen, unseren ökologischen Fußabdruck zu minimieren. Wir möchten, dass unsere Kunden 
                      wissen, dass ihre Entscheidung für unsere Bäckerei auch eine Entscheidung für die Umwelt ist. Wir 
                      hoffen, dass wir dein Interesse geweckt haben und du uns besuchst, um mehr über unser Engagement 
                      für Nachhaltigkeit zu erfahren.
                    </p>
                    <a href="#" class="button">Hier weiterlesen</a>
                </div>
                <img src="../images/about_rechts.png" alt="Nachhaltigkeitssymbole" class="visible_desktop">
            </div>
        </section>
        <section id="team">
          <div class="grid" >
            <span class="grid1"><span class="headerline"></span></span>
            <span class="grid2">
              <span class="gridhelp">
                <p class="super-headline">Team</p>
              <h2>Wir backen Salzburg!</h2>
              </span>
            </span>
            <span class="grid3"><span class="headerline"></span></span>
          </div>
            <div class="container">
              <img src="../images/teammeeting.jpg" alt="Team-Meeting">
              <div class="text">
                <p>
                  Hey du, auf der Suche nach einem coolen Job in der Backbranche? 
                  Unser Team ist jung, motiviert und bereit für Action! Wir alle teilen die Leidenschaft für die Backbranche 
                  und bringen unsere eigenen Fähigkeiten und Erfahrungen ein. Unsere Bäcker zaubern die leckersten Kuchen und 
                  Brot und unsere Verkäufer bedienen unsere Kunden mit einem Lächeln. Wir arbeiten zusammen, um jeden Tag 
                  erfolgreich zu sein und uns ständig zu verbessern. Komm' und sei Teil unseres coolen Teams!Egal ob du Vollzeit, 
                  Teilzeit oder neben dem Studium arbeiten möchtest, wir haben die perfekte Stelle für dich! Unsere Bäckerei 
                  hat den Ruf, die besten Backwaren in der Stadt zu haben und wir suchen Leute wie dich, die Bock haben 
                  Teil unseres Teams zu werden.
                  Als Bäcker oder Verkäufer bei uns wirst du nicht nur lernen wie man die leckersten Sachen backt, sondern 
                  auch deine Fähigkeiten in einem jungen und dynamischen Team ausbauen. Wir bieten dir eine angenehme 
                  Arbeitsatmosphäre, eine gute Bezahlung und jede Menge Benefits.
                  Du hast die Wahl, ob du Vollzeit, Teilzeit oder während deines Studiums arbeiten möchtest, wir 
                  unterstützen dich dabei. Also warum zögerst du? Mach dich bereit für die beste Zeit deines Lebens und 
                  bewirb dich noch heute!
                </p>
                <a href="./teamPage.html" class="button">Bewirb dich hier</a>
              </div>
              
            </div>
           
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
    <?php wp_footer(); ?>
    <script src='main.js'></script>
</body>

</html>