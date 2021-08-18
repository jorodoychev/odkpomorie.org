<?php
include('templates/header.php');
?>
<div class="container mt-5">
    <!--Section: Content-->
    <section id="dances_news">
        <!-- Section heading -->
        <h3 class="text-center mb-5 pb-5">Народни танци</h3>
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">
                <div class="card hoverable">
                    <video src="../../videos/video-2grupa.mp4" controls>Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5>Продукция на възпитаниците от 2 група на ДФТА "Раковина"</h5>
                        <p class="card-title text-muted font-small mt-3 mb-2">Ръководител Владимир Данаилов; корепетитор Георги Дойчев</p>
                        <a href="otkrit-urok-vtora-grupa.php">
                            <button type="button"
                                    class="btn btn-articles waves-effect waves-light">Повече<i
                                        class="fa fa-angle-right ml-2"></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">
                <div class="card hoverable">
                    <video src="../../videos/video-1grupa.mp4" controls>Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5>Продукция на най-малките възпитаници на ДФТА "Раковина"</h5>
                        <p class="card-title text-muted font-small mt-3 mb-2">Ръководител Владимир Данаилов; корепетитор Георги Дойчев</p>
                        <a href="otkrit-urok-pyrva-grupa.php">
                            <button type="button"
                                    class="btn btn-articles waves-effect waves-light">Повече<i
                                        class="fa fa-angle-right ml-2"></i></button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!--Section: Content-->
</div>
<?php
include('templates/footer.php');
?>
