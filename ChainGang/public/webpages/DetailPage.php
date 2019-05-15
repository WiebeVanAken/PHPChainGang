<?php
/**
 * Created by PhpStorm.
 * User: Wiebe
 * Date: 10/05/2019
 * Time: 14:31
 */
// Includes
include_once("$_SERVER[DOCUMENT_ROOT]/chaingang/private/functions/dbfunctions.php");

DBI::$logError = true;
$bike = DBI::queryBikes("SELECT * FROM allbikes WHERE BIKE_ID = 1")[0];

// Redirect if the query didn't execute
if($bike == null)
{
    header("Location: " . basename("$_SERVER[DOCUMENT_ROOT]/chaingang/public/webpages/ErrorPage.php"));
    exit();
}
?>

<html>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FietsShop</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/baseTemplate.css">
    <link rel="stylesheet" href="../stylesheets/detailpageTemplate.css">
</head>
<body>
    <!--Include header here-->

    <!--Page-->
    <div class="container">
        <?php include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/static/header.php" ?>

        <?php echo "<h2><b>" . $bike->getName() . "</b></h2>" ?>
        <div class="row">
            <div id="fietsCarouselIndicator" class="col-lg-8">
                <div id="fietsCarousel" class="carousel slide" data-ride="carousel">
                    <?php
                    //Prepare image data
                    $imagePaths = $bike->getImagePaths();
                    ?>

                    <!--Carousel indicators-->
                    <ol class='carousel-indicators'>
                        <?php
                        $imageAmount = count($imagePaths);
                        if ($imageAmount > 6)
                            $imageAmount = 6;

                        for ($i = 0; $i < $imageAmount; $i++) {
                            echo "<li data-target='#fietsCarousel' data-slide-to='" . $i . "'" . ($i == 0 ? "class='active'" : "") . "</li>";
                        }
                        ?>
                    </ol>

                    <!--Carousel inside-->
                    <div class="carousel-inner">
                        <?php
                        for ($i = 0; $i < $imageAmount; $i++) {
                            $path = "../" . $imagePaths[$i];
                            echo ($i == 0 ? "<div class='carousel-item active'>" : "<div class='carousel-item'>")
                                . "<img class='d-block w-100' src='$path'>"
                                . "</div>";
                        }
                        ?>
                    </div>

                    <a class="carousel-control-prev" href="#fietsCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#fietsCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div id="specifications" class="col-lg-4">
                <table>
                    <?php
                    echo "<tr>
                    <th colspan='2'><h3><b>Specificaties<b><h3></th>
                  </tr>
                  <tr>
                    <td>Merk </td>
                    <td>" . $bike->getBrand() . "</td>
                  </tr>
                  <tr>
                    <td>Categorie </td>
                    <td> " . $bike->getCategory() . " </td>
                  </tr>
                  <tr>
                    <td>Jaarta: </td>
                    <td> " . $bike->getReleaseYear() . " </td>
                  </tr>
                  <tr>
                    <td>Frametype </td>
                    <td> " . $bike->getFrameType() . " </td>
                  </tr>
                  <tr>
                    <td>Material </td>
                    <td> " . $bike->getMaterial() . " </td>
                  </tr>
                  <tr>
                    <td>Frametype </td>
                    <td> " . $bike->getMaterial() . " </td>
                  </tr>
                  <tr>
                    <td>Color </td>
                    <td> " . $bike->getColor() . " </td>
                  </tr>";
                    ?>
                </table>
                <?php
                echo "<p class='priceTag col-lg-4'>€" . $bike->getPrice() . ",-
            <button type='button' class='btn btn-primary col-lg-4'>Bestellen!</button></p>
            ";
                ?>
            </div>
        </div>
        <div class="row">
            <div id="description" class="col-lg-8">
                <h3><b>Omschrijving</b></h3>
                <p><?php echo $bike->getDescription(); ?></p>
            </div>
            <div id="recommendations" class="col-lg-4">
                <h3><b>Misschien wilt u ook</b></h3>
            </div>
        </div>
        <!--Include footer here-->
        <?php include_once "$_SERVER[DOCUMENT_ROOT]/chaingang/static/footer.php" ?>
    </div>


    <!--JQuery JS includes-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
