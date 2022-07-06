<?php include "components/DataBase.php" ?>

<html>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4"><?= $contact[0][$lang]?></h2>
                <p><?= $contact[1][$lang]?></p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2 "></span>
                    </div>
                    <div>
                        <h3 class="mb-4"><?= $contact[2][$lang]?></h3>
                        <p><a href="tel://+40726066744">+40 726 066 744</a></p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Mail</h3>
                        <p style="font-size: small;"><a href="mailto:mail@radu-nicolae.com">mail@radu-nicolae.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="  icon-globe"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href=#><?= $contact[3][$lang] ?></a></p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
                <div class="align-self-stretch box text-center p-4 shadow">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <div>
                        <h3 class="mb-4"><?= $contact[4][$lang] ?></h3>
                        <p><?= $contact[5][$lang] ?></p>

                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

</html>
