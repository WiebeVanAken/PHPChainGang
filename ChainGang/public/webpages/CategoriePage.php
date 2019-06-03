<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>FietsShop</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <!--include header-->
    <?php include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/static/header.php" ?>

    <!--include database functions-->
    <?php
    include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/private/classes/BikeProduct.php";
    include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/private/functions/dbfunctions.php";
    ?>
    <div class="row">
        <div id="cat_sidebar col-lg-3">
            <h3>Filters</h3>
            <button type="button" class="btn btn-primary btn-lg">Filter!</button>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Frametype</h5>
                    <form action="">
                        <input type="radio" name="frametype" value="heren"> Herenfietsen<br>
                        <input type="radio" name="frametype" value="dames"> Damesfietsen<br>
                        <input type="radio" name="frametype" value="kinderen"> Kinderfietsen
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h5>Merk</h5>
                    <form action="">
                        <input type="checkbox" name="merkfiets1" value="Gazelle"> Bakfietsen<br>
                        <input type="checkbox" name="merkfiets2" value="Giant"> Hybride fietsen<br>
                        <input type="checkbox" name="merkfiets3" value="Pegasus"> Stadsfietsen<br>
                        <input type="checkbox" name="merkfiets4" value="Cortina"> Transportfietsen
                    </form>
                </div>
            </div>
        </div>

            <div class="col-lg-4 cat_main">
                <?php
                DBI::$logError = true;
                $dbBike = DBI::queryBikes("select * from allbikes where BIKE_ID='1'")[0];
                $bike = new BikeProduct($dbBike);
                ?>
            </div>

    </div>

    <?php /*** include footer*/
    include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/static/footer.php" ?>
</div>


<!--JQuery JS includes-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>