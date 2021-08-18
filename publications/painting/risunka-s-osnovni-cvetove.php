<?php
include('templates/header.php');
?>
    <main>
        <section id="news">
            <h3 class="px-2">Рисунка с основни цветове</h3>
            <p class="post-date px-2">Публикувано 27 ноември 2020г. в <a href="news.php">Изобразително изкуство</a></p>
            <iframe class="border-0 container-fluid" src="https://www.youtube.com/embed/yS0dJmT2PGM"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <div class="row m-auto container">
                <div class="col-8">
                    <p>Кои цветове си подхождат добре?
                        Защо някои цветове сякаш изпъкват в картината, а други се сливат с тези около тях.</p>
                    <p>Само три цвята не могат да се получат от смесване на други цветове. Това са
                        червено, жълто и синьо. Тези цветове наричаме основни.</p>
                    <p>По този начин можем да нарисуваме цветя, морско конче, медуза или къща.
                        Важно е да използваме трите основни цветя - жълт, червен и син.</p>
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
            </div>
        </section>
    </main>
<?php
include('templates/footer.php');
?>