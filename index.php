<!DOCTYPE html>
<!--
-
// Dev Guto-c
-
-->
<?php
require_once 'config/conn.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Slider PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $active = 2;
                    $control_num_slide = 1;
                    $result_carousel = "SELECT * FROM slider_info ORDER BY id ASC LIMIT 5";
                    $resulta_carousel = mysqli_query($conn, $result_carousel);
                    while ($row_carousel = mysqli_fetch_assoc($resulta_carousel)) {
                        if ($active == 2) {
                            ?>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?php
                            $active = 1;
                        } else {
                            ?>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <?php
                            $control_num_slide++;
                        }
                    }
                    ?>
                </ol>

                <!-- Imagens -->
                <div class="carousel-inner">
                    <?php
                    $ativo = 2;
                    $res_carousel = "SELECT * FROM slider_info ORDER BY id ASC LIMIT 5";
                    $resultado_carousel = mysqli_query($conn, $result_carousel);
                    while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                        if ($ativo == 2) {
                            ?>
                            <div class="item active">
                                <img src="assets/img/<?php echo $row_carousel['img']?>" alt="Img 01" style="width:100%;">
                            </div>
                            <?php
                            $ativo = 1;
                        } else {
                            ?>
                            <div class="item">
                                <img src="assets/img/<?php echo $row_carousel['img']?>" alt="Img 02" style="width:100%">
                            </div>
                            <?php
                        }
                    }
                    ?>                    
                </div>

                <!-- Controles -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </body>

    <!--
    Créd
    1- Imagem de <a href="https://pixabay.com/pt/users/shamprakash-21418368/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=6318054">shamprakash</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=6318054">Pixabay</a>
    
    2- Imagem de <a href="https://pixabay.com/pt/users/joshuaworoniecki-12734309/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5314645">Joshua Woroniecki</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=5314645">Pixabay</a>
    
    3- https://www.w3schools.com/
    -->
</html>