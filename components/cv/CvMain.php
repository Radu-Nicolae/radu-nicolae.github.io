<?php
include 'CvItem.php';
include 'CvDatabase.php';
require_once 'components/cv/CvUtils.php';
$cvUtils = new cvUtils();
$cvDatabase = new CvDatabase();
?>


<html>
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1"><?= $cvCategories[0][$lang] ?></a></li>
                        <li><a href="#page-2"><?= $cvCategories[1][$lang] ?></a></li>
                        <li><a href="#page-21"><?= $cvCategories[2][$lang] ?></a></li>
                        <li><a href="#page-3"><?= $cvCategories[3][$lang] ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page one">
                    <h2 class="heading"><?= $cvCategories[0][$lang] ?></h2>

                        <!-- Education start -->
                        <div class="secondary-cv">
                            <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[0][$lang] ?> </h2>
                            <?php
                            echo $cvUtils->generateCode($cvDatabase->getHighSchoolCv() ,  $lang);
                            ?>
                        </div>

                        <div class="secondary-cv">
                            <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[1][$lang] ?> </h2>
                            <?php
                            echo $cvUtils->generateCode($cvDatabase->getEducationCv() ,  $lang);
                            ?>
                        </div>
                        <!-- Education end -->

                </div>

                <!-- Work start -->
                <div id="page-2" class="page two" >
                    <h2 class="heading"> <?= $cvCategories[1][$lang] ?> </h2>

                    <div class="secondary-cv">
                        <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[2][$lang] ?> </h2>


                        <?= $cvUtils->generateCode($cvDatabase->getInternshipCv(), $lang) ?>
                    </div>


                    <div class="secondary-cv">
                        <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[3][$lang] ?> </h2>

                        <?= $cvUtils->generateCode($cvDatabase->getDevelopingCv(), $lang)?>
                    </div>

                </div>
                <!-- Work end -->



                <!-- Other start -->
                <div id="page-21" class="page three">
                    <h2 class="heading"><?= $cvCategories[2][$lang] ?></h2>

                    <div class="secondary-cv">
                        <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[4][$lang] ?> </h2>


                        <?= $cvUtils->generateCode($cvDatabase->getRoboticsCv(), $lang) ?>
                    </div>

                    <div class="secondary-cv">
                        <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[5][$lang] ?> </h2>


                        <?= $cvUtils->generateCode($cvDatabase->getCompetitionsCv(), $lang) ?>
                    </div>

                    <div class="secondary-cv">
                        <h2 class="heading heading-secondary"> <?= $cvSecondaryCategories[6][$lang] ?> </h2>


                        <?= $cvUtils->generateCode($cvDatabase->getVolunteeringCv(), $lang) ?>
                    </div>

                </div>
                <!-- Other end-->


                <!-- Skills start -->
                <div id="page-3" class="page four">
                    <h2 class="heading"><?= $cvCategories[3][$lang] ?></h2>

                    <?php include 'skills/SkillsMain.php' ?>

                    <?php include 'skills/CvExams.php' ?>
                </div>
                <!-- Skills end -->





            </div>
        </div>
</section>


</html>