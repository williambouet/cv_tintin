<?php include 'skillsData.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="skills.css">
</head>

<body>
    <?php include_once("navbar.php"); ?>
    <h1 class="page_title">Skills</h1>
    <div class="hardAndSoftContainer">
        <div class="skillsContainer softsSkillsContainer">
            <div class="skillsComicsBox">
                <div class="softSkillsTitleANDskillsPicture">
                    <h1 class="skillsTitle">SOFT SKILLS</h2>
                        <img class="imgLogoSoft" src="./img/id-tintin.png" alt="space ship" srcset="">
                </div>
                <div class="skillsText">
                    <?php foreach ($softSkillsDetails as $skillsTitle => $skillsDescription) { ?>
                        <div class=" bubble skillsItems skillsItems1 ">
                            <h3><?= $skillsTitle  ?></h3>
                            <div class="skillsDetails"><?= $skillsDescription  ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="skillsContainer hardSkillsContainer">
            <div class="skillsComicsBox">
                <div class="hardSkillsTitleANDskillsPicture">
                    <h1 class="skillsTitle">HARD SKILLS</h2>
                        <img class="imgLogoHard" src="./img/spaceShipFlat.png" alt="space ship" srcset="">
                </div>
                <div class="skillsText">
                    <?php foreach ($hardSkillsDetails as $skillsTitle => $skillsDescription) { ?>
                        <div class=" bubble skillsItems skillsItems1 ">
                            <h3><?= $skillsTitle  ?></h3>
                            <div class="skillsDetails"><?= $skillsDescription  ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>