<?php
include 'Skill.php';
include 'SkillsDataBase.php';
$database = new SkillsDataBase();
?>


<div class="row progress-circle mb-5">

    <?= $database->getCodeMain($database->getMainSkills(), $lang) ?>

</div>

<div class="row">

    <?= $database->getCodeSecondary($database->getSecondarySkills()); ?>

</div>
