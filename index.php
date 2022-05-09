<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" type="text/css" rel="stylesheet" />
    <title>Projet Méduse</title>
</head>
<body>
    <header id="root">
        <div class="topnav">
            <a id="menu" href="javascript:void(0);" onclick="showMenu()"><img src="image/background/couronne.png"></a>
            <nav id="topnav_menu">
                <a href="autres_pages/regle.php">Règles</a>
                <a href="autres_pages/livredor.php">Livre d'or</a>
                <a href="autres_pages/contact.php">Contact</a>
                <a href="autres_pages/indices.php">Indices</a>
                <a href="autres_pages/credits.php">Crédits</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="bk">
            <div class="bk1"><img src="image/background/coin.png" alt="coin de page"></div>
            <div class="bk2"><img src="image/background/coin.png" alt="coin de page"></div>
            <div class="bk3"><img src="image/background/coin.png" alt="coin de page"></div>
            <div class="bk4"><img src="image/background/coin.png" alt="coin de page"></div>
        </div>
        <div class="contenu">
           <!--  <img src="image/background/book.png" alt="support livre" class="book"> -->
            <div class="presentation">
                <p id="typedtext"></p>
            </div>
            <!-- <div class="choix">
                <a href="autres_pages/regle.php">Le fils</a>
                <a href="autres_pages/regle.php">La fille</a>
                <a href="autres_pages/regle.php">Le cuisinier</a>
            </div> -->
        </div>
    </main>
    <script src="js/lib.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    <script>
        jQuery(document).ready(function(){
            $('.choix').hide(0).delay(19000).show(200);
        });
    </script>
    <script src="js/menu.js"></script>
</body>
</html>