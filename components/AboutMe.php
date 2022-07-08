<?php include 'DataBase.php' ?>

<html>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center"
                         style="background-image:url(pozaeu.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
                        <h1 class="big"><?= $aboutMe[0][$lang] ?></h1>
                        <h2 class="mb-4"><?= $aboutMe[0][$lang] ?></h2>
                        <p><?= $aboutMe[1][$lang] ?></p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span><?= $aboutMe[2][$lang] ?></span> <span><?= $aboutMe[3][$lang] ?></span></li>
                            <li class="d-flex"><span><?= $aboutMe[4][$lang] ?></span> <span><?= $aboutMe[5][$lang] ?></span></li>
                            <li class="d-flex"><span><?= $aboutMe[6][$lang] ?></span> <span><?= $aboutMe[7][$lang] ?></span></li>
                            <li class="d-flex"><span><?= $aboutMe[8][$lang] ?></span> <span><?= $aboutMe[9][$lang] ?></span></li>
                            <li class="d-flex"><span><?= $aboutMe[10][$lang] ?></span> <a href="mailto:viorelnicolae@yahoo.com"><span
                                        style="color: #595959 !important; text-decoration: underline; font-weight: normal;"><?= $aboutMe[11][$lang] ?></span></a></span>
                            </li>
                            <li class="d-flex"><span><?= $aboutMe[12][$lang] ?> </span> <a style="color: #595959; !important;" href="tel://+40722715121"><span
                                        style="color: #595959 !important; text-decoration: underline; font-weight: normal;"><?= $aboutMe[13][$lang] ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3 fadeInUp ftco-animated">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number"><?=$yearsOfExperience?></span>
                            <span>Years of experience</span>
                        </p>
<!--                        <p><a href="CV-RaduNicolae.pdf" class="btn btn-primary py-3 px-3" download>Download CV</a></p>-->
                        <div style="display: flex;">
                            <p style="padding-right: 0.5rem"><a href="CV-ViorelNicolae-English.pdf" class="btn btn-primary py-3 px-3" download>Download CV</a></p>
                            <p><a href="https://www.linkedin.com/in/viorel-nicolae-26885314" class="btn btn-primary"><span class="ion-logo-linkedin" style="font-size: 200%; padding-left: 0.1rem; color: white !important;"></span></a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>
