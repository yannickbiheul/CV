<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Yannick Biheul, développement Web</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Développement Web Front-End JavaScript, Back-End PHP'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/main.css'>
    <!-- GOOGLE FONTS -->
    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- Quicksand -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>
    <!-- Bangers -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
    <!-- FONTAWESOME -->
    <script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>

<body>

    <header>
        <nav>
            <a href="#accueil">Accueil</a>
            <a href="#experiences">Expériences</a>
            <a href="#competences">Compétences</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="boutonBurger">
            <div class="ligne"></div>
        </div>
    </header>

    <div class="menuBurger">
        <a href="#" class="elt">Accueil</a>
        <a href="#" class="elt">Présentation</a>
        <a href="#" class="elt">Expériences</a>
        <a href="#" class="elt">Compétences</a>
        <a href="#" class="elt">Portfolio</a>
        <a href="#" class="elt">Contact</a>
    </div>

    <div class="returnTop">
        <a href="#accueil"><i class="far fa-arrow-alt-circle-up"></i></a>
    </div>


    <!-- SECTION ACCUEIL -->

    <section id="accueil">
        <div class="titreAccueil">
            <h1>Yannick Biheul</h1>
            <p>Développement Web</p>
            <div class="bouton">
                <a href="#">Télécharger CV</a>
            </div>
        </div>
        <img src="images/moi.jpg" alt="Moi">
    </section>

    
    <!-- SECTION PRESENTATION -->

    <section id="presentation">
        <div class="textePresentation">
            <h3>À propos de moi</h3>
            <p>Je m'appelle Yannick Biheul, j'ai 39 ans et j'habite à Quimper, dans le Finistère.<br>
            Je suis interessé par les nouvelles technologies, le cinéma, la musique et les jeux vidéo.</p>
            <p>Après un BAC PRO de maintenance en électroménager, je me suis dirigé dans la vente en passant un BEP à l'Afpa de Lorient, et<br>
            j'ai travaillé pendant 17 ans chez un équipementier automobile en tant qu'opérateur et pilote de production.</p>
            <p>Attiré par le côté création et interaction du développement web, je décide d'entamer une reconversion dans ce domaine en 2020. <br>
            Je suis actuellement en formation Développeur Web à l'Afpa de Brest.</p>
        </div>
    </section>


    <!-- SECTION EXPERIENCES -->

    <section id="experiences">
        <div class="formation">
            <h3>Formations</h3>

            <div class="carteFormation">
                <h4>Développement Web et Web Mobile (BTS)</h4>
                <p>4 Novembre 2020 - 9 Juillet 2021</p>
                <hr>
            </div>

            <div class="carteFormation">
                <h4>Agent Technique de Vente (BEP)</h4>
                <p>2002</p>
                <hr>
            </div>

            <div class="carteFormation">
                <h4>Maintenance des Appareils ElectroMénager et de Collectivités (BAC PRO)</h4>
                <p>2001</p>
                <hr>
            </div>

            <div class="carteFormation">
                <h4>Installateur Conseil en Equipements du Foyer (BEP)</h4>
                <p>1999</p>
            </div>
        </div>
        <div class="expPro">
            <h3>Expériences</h3>

            <div class="carteExp">
                <h3>Opérateur / Pilote de Production</h3>
                <p>Livbag, Pont de Buis</p>
                <p>2003 - 2020</p>
                <hr>
            </div>

            <div class="carteExp">
                <h3>Vendeur</h3>
                <p>Conforama, Quimper</p>
                <p>2002</p>
                <hr>
            </div>

            <div class="carteExp">
                <h3>Conditionnement</h3>
                <p>France Beurre, Quimper</p>
                <p>2001</p>
            </div>
        </div>
    </section>


    <!-- SECTION COMPETENCES -->

    <section id="competences">
        <div class="carteCompetence">
            <div class="compTitre">
                <h3>Langages</h3>
            </div>
            <div class="compCube">
                <div class="containerCube">
                <div class="cube">
                    <div class="face front">
                        <img src="images/logo_html.png" alt="HTML">
                    </div>
                    <div class="face back">
                        
                    </div>
                    <div class="face right">
                        <img src="images/logo_css.png" alt="CSS">
                    </div>
                    <div class="face left">
                        <img src="images/logo_javascript.png" alt="JavaScript">
                    </div>
                    <div class="face top">
                        <img src="images/logo_php.png" alt="PHP">
                    </div>
                    <div class="face bottom">
                        <img src="images/logo_mysql.png" alt="MySql">
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="carteCompetence">
            <div class="compTitre">
                <h3>FrameWorks / Outils</h3>
            </div>
            <div class="compCube">
                <div class="containerCube">
                <div class="cube">
                    <div class="face front">
                        <img src="images/vscode.png" alt="VsCode">
                    </div>
                    <div class="face back">
                        
                    </div>
                    <div class="face right">
                        <img src="images/git.png" alt="Git">
                    </div>
                    <div class="face left">
                        <img src="images/bootstrap.png" alt="Bootstrap">
                    </div>
                    <div class="face top">
                        <img src="images/jquery.png" alt="jQuery">
                    </div>
                    <div class="face bottom">
                        <img src="images/filezilla.png" alt="Filezilla">
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- SECTION PORTFOLIO -->

    <section id="portfolio">
        <div class="cartePortfolio projet1">

        </div>

        <div class="cartePortfolio projet2">
        
        </div>

        <div class="cartePortfolio projet3">
        
        </div>

        <div class="cartePortfolio projet4">
        
        </div>
    </section>


    <!-- SECTION CONTACT -->

    <section id="contact">

    </section>


    <!-- FOOTER -->

    <footer>
    </footer>


    <!-- JAVASCRIPT -->
    <script src='js/.js'></script>
</body>
</html>