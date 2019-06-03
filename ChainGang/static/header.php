<?php

include_once("$_SERVER[DOCUMENT_ROOT]/chaingang/private/functions/dbfunctions.php");
include_once("$_SERVER[DOCUMENT_ROOT]/chaingang/private/functions/functions.php");

// Update the session
if(session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
    if(!isset($_SESSION['RECENT_BIKES']))
    {
        $_SESSION['RECENT_BIKES'] = array();
        $_SESSION['CART_BIKES'] = array();
    }
}

?>
<div class="row" id="header_nav">
    <div class="col-lg-6"></div>
    <div class="col-lg-1 text-center">
        <a href="../webpages/HelpPage.php"><button type="button" class="btn btn-link">Help</button></a>
    </div>
    <div class="col-lg-2 text-center">
        <a href="../webpages/AboutPage.php""><button type="button" class="btn btn-link">Over ons</button></a>
    </div>
    <div class="col-lg-1 text-center">
        <a href="../webpages/ContactPage.php""><button type="button" class="btn btn-link">Contact</button></a>
    </div>
    <div class="col-lg-2 text-center">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target=".login-modal">Login/Registeren</button>
    <!--hier moet de login form komen-->
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <a href="../webpages/HomePage.php" class="no_link_dec"><h1 id="header_logo">FietsShop</h1></a>
    </div>
    <div class="col-lg-10 div_searchBar" id="header_SearchAndButton">
        <div class="input-group">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Categorieën
                </button>
                <div class="dropdown-menu">
                    <a class='dropdown-item' href='#'>Mannenfietsen</a><hr>
                    <a class='dropdown-item' href='#'>Vrouwenfietsen</a> <hr>
                    <a class='dropdown-item' href='#'>Kinderfietsen</a> <hr>
                </div>
            </div>
            <input type="text" class="form-control" id="SearchInput" aria-label="Text input with dropdown button">
            <div class="input-group-append">
                <a href="CategoriePage.php?query=DavidMoetDitNogEvenFixenOokInDeFooter" type="button" class="btn btn-outline-secondary" type="button" id="SearchButton"><i class="material-icons">search</i></a>
            </div>
        </div>

    </div>
</div>
<div class="row border" id="header_Bottom">
    <div class="col-lg-2 border text-center">
        <a href="../webpages/HomePage.php"><button type="button" class="btn btn-link">Thuis</button></a>
    </div>
    <div class="col-lg-2 border text-center">
        <a href="../webpages/CategoriePage.php"><button type="button" class="btn btn-link">Fietsen</button></a>
    </div>
    <div class="col-lg-2 border text-center">
        <a href="../webpages/ProfilePage.php"><button type="button" class="btn btn-link">Mijn profiel</button></a>
    </div>
    <div class="col-lg-2 border text-center">
        <a href="../webpages/AboutPage.php"><button type="button" class="btn btn-link">Over ons</button></a>
    </div>

    <div class="col-lg-3 border"></div>
    <div class="col-lg-1 border">
        <a href="../webpages/CartPage.php">
            <button class="btn">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="badge badge-light" id='CartItemCount'><?php echo "" . (isset($_SESSION['CART_BIKES']) ? sizeof($_SESSION['CART_BIKES']) : "0"); ?></span>
                    </div>
                    <div class="col-lg-6">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                </div>
            </button>
        </a>
    </div>

    <!--hieronder is de login form model-->
    <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h1>LOGIN FORM HERE</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac magna non urna fermentum cursus. Maecenas egestas egestas ipsum, eget consectetur eros imperdiet id. Nulla aliquam pulvinar ante, et auctor risus fermentum quis. Donec sit amet leo vel dolor consectetur finibus. Etiam ut faucibus nunc, ac semper metus. Phasellus varius vehicula suscipit. Cras quis neque in nisi facilisis suscipit.

                Sed porttitor sem finibus nibh ullamcorper tempor. Aenean lobortis risus eget leo viverra eleifend. Ut placerat egestas mi ut suscipit. Nam quam erat, dictum non maximus id, facilisis vitae est. Mauris ultrices tempor dolor quis lacinia. Aliquam erat volutpat. Mauris nisl ante, suscipit eget rutrum nec, auctor ac neque. Proin semper felis at mi interdum pharetra. Mauris tincidunt magna ac molestie vulputate.

                Nullam at dolor rhoncus, rhoncus urna quis, imperdiet urna. Suspendisse sit amet tellus felis. Vivamus ante lectus, porttitor et felis at, elementum efficitur odio. Aliquam sed nisl non urna pretium rhoncus nec sed justo. Praesent eget nulla at diam ultricies ultrices eget nec sem. Maecenas eu elit nec odio mattis feugiat. Mauris at mollis magna. Praesent aliquet turpis vehicula nunc eleifend, eget accumsan odio tempor. Sed et mollis nunc. Vestibulum cursus lorem vel mauris tempor tempus. Quisque eu commodo nulla, eu auctor nisi. Vestibulum justo ante, efficitur consectetur lorem sed, iaculis feugiat ex. Phasellus posuere congue porttitor. Nulla bibendum convallis vulputate. Aliquam cursus, orci nec eleifend volutpat, enim diam placerat quam, vitae blandit mi enim non leo. Proin facilisis quam at sapien tincidunt dapibus.

                Phasellus pretium pellentesque sollicitudin. Donec lacus orci, placerat nec facilisis sed, rhoncus eu ante. Etiam et odio lectus. Ut a lacus dapibus, porttitor nibh eget, mollis purus. Cras vitae magna fringilla, viverra quam non, tempor arcu. In hac habitasse platea dictumst. Etiam vulputate ac metus quis egestas. Fusce cursus elementum leo id fermentum. Duis ac sollicitudin risus.

                Suspendisse quis nisl vel ex malesuada tempor. Phasellus porta sapien a consequat pellentesque. Integer at lorem elit. Vivamus sed tellus fringilla, bibendum turpis eget, tincidunt mi. Nullam et magna vestibulum, consectetur lacus sed, suscipit ante. Etiam non nunc ac mauris tincidunt condimentum. Aenean ac tortor porta, venenatis ex quis, blandit libero. Vestibulum nec viverra quam. Fusce quis tortor urna. Duis mi turpis, aliquam sit amet fermentum sit amet, semper venenatis magna. Duis volutpat eget augue at gravida.
            </div>
        </div>
    </div>
</div>