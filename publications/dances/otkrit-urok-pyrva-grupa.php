<?php
include('templates/header.php');
?>
    <main>
        <section id="news">
            <h3 class="px-2">Продукция на най-малките възпитаници на ДФТА "Раковина"</h3>
            <p class="post-date px-2">Публикувано 08 юни 2021г. в <a href="news.php">Народни танци</a></p>
            <video src="../../videos/video-1grupa.mp4" controls class="container-fluid">Your browser does not support the video tag.
            </video>
            <div class="row m-auto container">
                <div class="col-8">
                    <p>Продукция на най-малките възпитаници на ДФТА "Раковина" - I група. Ръководител Владимир Данаилов; корепетитор Георги Дойчев</p>
                    <div class="container">
                        <div class="social">
                            <a id="share-fb" class="sharer button"><i class="fab fa-3x fa-facebook-square"></i></a>
                            <a id="share-tw" class="sharer button"><i class="fab fa-3x fa-twitter-square"></i></a>
                            <a id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <p class="font-bold pb-3">Публикации по школи</p>
                    <p><a href="news.php">Изобразително изкуство</a></p>
                    <p><a href="../english/news.php">Английски език</a></p>
                    <p><a href="../dances/news.php">Народни танци</a></p>
                    <p><a href="../singing/news.php">Вокално студио</a></p>
                </div>
                <div class="row images">
                    <a href="gallery/large/img-1.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/img-1.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                    <a href="gallery/large/img-2.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/img-2.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                    <a href="gallery/large/img-3.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/img-3.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                </div>
        </section>
    </main>
<?php
include('templates/footer.php');
?>