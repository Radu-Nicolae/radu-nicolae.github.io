<?php include 'DataBase.php' ?>


<html>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target scrolled awake"
     id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= $navbar[6][$lang] ?>"><span>R</span>adu Nicolae</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> <?= $navbar[5][$lang] ?>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link active"><span> <?= $navbar[0][$lang] ?> </span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span> <?= $navbar[1][$lang] ?> </span></a></li>
                <li class="nav-item"><a href="#resume-section" class="nav-link"><span> <?= $navbar[2][$lang] ?> </span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span> <?= $navbar[3][$lang] ?> </span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span> <?= $navbar[4][$lang] ?> </span></a></li>
                <li class="nav-item"><a href="https://radu-nicolae.com" class="nav-link"><img src="ukFlag.jpeg"
                                                                                class="flag-image flag-left"></a></li>
                <li class="nav-item"><a href="ro.php" class="nav-link"><img src="roFlag.jpeg"
                                                                                         class="flag-image flag-right"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</html>
