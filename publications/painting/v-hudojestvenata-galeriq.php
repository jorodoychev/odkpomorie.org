<?php
include('templates/header.php');
?>
    <main>
        <section id="news">
            <h3 class="px-2">В художествената галерия</h3>
            <p class="post-date px-2">Публикувано 19 ноември 2020г. в <a href="news.php">Изобразително изкуство</a></p>
            <iframe class="border-0 container-fluid" src="https://www.youtube.com/embed/bw0X24lpDxU"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <div class="row m-auto container">
                <div class="col-8">
                    <p>Когато се срещаме в ателието говорим за пейзаж, натюрморт, портрет, за цветовете с тяхното
                        богатство.</p>
                    <p>В художествената галерия откриваме изящното изкуство и там виждаме образци на живописта,
                        графиката и скулптурата.</p>
                    <p>В изложбената зала виждаме това за което говорим – създадено от художници живели в различни
                        епохи с различен стил и маниер на работа.</p>
                    <p>Настоящата изложба в градската художествена галерия „Дечко Стоев“ представя творчеството на Мара
                        Чорбаджийска.</p>
                </div>
                <div class="col-4">
                    <p class="font-bold pb-3">Публикации по школи</p>
                    <p><a href="news.php">Изобразително изкуство</a></p>
                    <p><a href="../english/news.php">Английски език</a></p>
                    <p><a href="../dances/news.php">Народни танци</a></p>
                    <p><a href="../singing/news.php">Вокално студио</a></p>
                </div>
                <div class="container">
                    <div class="social">
                        <a id="share-fb" class="sharer button"><i class="fab fa-3x fa-facebook-square"></i></a>
                        <a id="share-tw" class="sharer button"><i class="fab fa-3x fa-twitter-square"></i></a>
                        <a id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
                    </div>
                </div>
                <div class="row images">
                    <a href="gallery/large/8.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/8.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                    <a href="gallery/large/9.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/9.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                    <a href="gallery/large/10.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/10.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                    <a href="gallery/large/11.jpg" class="box" data-fancybox="images">
                        <img src="gallery/thumb/11.jpg" alt="снимка"/>
                        <div class="img-overlay"></div>
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php
include('templates/footer.php');
?>