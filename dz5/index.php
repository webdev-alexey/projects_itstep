<!--Подключаем шапку-->
<?php
    require_once 'header.php';
?>
    <!--Секция слайдер-->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/vozleslidera/1a.png">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/vozleslidera/2a.png">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/vozleslidera/3a.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--Сам слайдер-->
                <div class="col-lg-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/slider/1.png">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/slider/2.png">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--Возле слайдера по правой стороне картинки-->
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/vozleslidera/4a.png">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/vozleslidera/5a.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Популярные товары-->
    <?php
        require_once 'populargoods.php';
    ?>
        <!--Популярные производители-->
        <?php
        require_once 'popularmanufacturers.php';
    ?>

            <!--Подключаем подвал-->
            <?php
    require_once 'footer.php';
?>
