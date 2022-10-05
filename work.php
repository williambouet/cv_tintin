<?php require 'data_works.php'; ?>

<?php foreach ($works as $work) { ?>

<div class="border borderR borderT borderB <?php echo $work['class_vignets'];?>"></div>
<div class="job <?php echo $work['class_job'];?>"><?php echo $work['job'];?>
    <div>
        <p><?php echo $work['year'];?></p>
        <p><?php echo $work['location'];?></p>
    </div>
</div>
<div class="border borderB borderL borderT <?php echo $work['class_border1'];?>"></div>

<div class="border borderR borderT borderB <?php echo $work['class_border2'];?>"></div>
<div class="talking <?php echo $work['class_talking'];?>">
    <div class="bubble "><?php echo $work['talking'];?></div>
    <div class="images_tintin">
        <img src="./img/Tintin_debout.png" class="tintinId" alt="Tintin salue">
        <img src="<?php echo $work['source_img'];?>" alt=" " class="curious_tintin <?php echo $work['class_img'];?>">
    </div>
</div>
<div class="border borderB borderL borderT <?php echo $work['class_border3'];?>"></div>

<?php } ?>

