<?php
 $control=new Controller();
 $allVacancyData=$control->allVacancyList();
?>
<h4> &nbsp; Job Vacancy</h4>
<div class="textbox">
    <?php
    foreach($allVacancyData as $vd):
        ?>
        <div class="show-normal">
            <h3><?php echo $vd[1]; ?></h3>
            <label><?php echo $vd[2]; ?></label>
            <label><a href="schooladmin/<?php echo $vd[3]; ?>" target="_blank">Details</a> </label>
        </div>
    <?php
    endforeach;
    ?>
</div>