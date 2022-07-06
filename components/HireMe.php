<?php include "components/DataBase.php"; ?>

<html>

<section class="ftco-section ftco-hireme img" style="background-image: url(hireme.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center fadeInUp ftco-animated">
                <h2><?=$hireMe[0][$lang]?></h2>
                <p><?=$hireMe[1][$lang]?></p>
                <p class="mb-0"><a href="#contact-section" class="btn btn-primary py-3 px-5"><?=$hireMe[2][$lang]?></a></p>
            </div>
        </div>
    </div>
</section>

</html>
