<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./root.css">
    <link rel="stylesheet" href="./navbar.css">
    <link href="http://fonts.cdnfonts.com/css/tintin" rel="stylesheet">
    <link rel="stylesheet" href="./education.css">
    <title>CV de Tintin</title>
</head>

<body>

    <?php include_once('navbar.php') ?>
    <h1 class="page_title">Formations</h1>
    <div class="vignettes">

        <div class="firstRow"></div>
        <div class="firstRow"></div>
        <div class="firstRow"></div>


        <?php require 'data_education.php'; ?>

        <?php foreach ($educations as $education) { ?>

            <div class="border borderR borderT borderB <?php echo $education['class_vignets']; ?>"></div>
            <div class="job <?php echo $education['class_job']; ?>"><?php echo $education['job']; ?>
                <div>
                    <p><?php echo $education['year']; ?></p>
                    <p><?php echo $education['location']; ?></p>
                </div>
            </div>
            <div class="border borderB borderL borderT <?php echo $education['class_border1']; ?>"></div>

            <div class="border borderR borderT borderB <?php echo $education['class_border2']; ?>"></div>
            <div class="talking <?php echo $education['class_talking']; ?>">
                <div class="bubble "><?php echo $education['talking']; ?></div>
                <div class="images_tintin">
                    <img src="./img/Tintin_debout.png" class="tintinId" alt="Tintin salue">
                    <img src="<?php echo $education['source_img']; ?>" alt=" " class="curious_tintin <?php echo $education['class_img']; ?>">
                </div>
            </div>
            <div class="border borderB borderL borderT <?php echo $education['class_border3']; ?>"></div>

        <?php } ?>


    </div>


</body>

</html>