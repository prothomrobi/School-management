<?php
$controller=new Controller();
$allSchoolResult=$controller->allSchoolResult();
?>
<h4> &nbsp; School Result</h4>
<div class="textbox">
    <?php foreach($allSchoolResult as $school): ?>
        <div class="show-normal">
            <label><?php $examName=$controller->selectedExamData($school[1]); echo $examName[1]; ?></label>
            <label><?php $className=$controller->selectedClassData($school[2]); echo $className[1]; ?></label>
            <label><a href="schooladmin/<?php echo $school[3]; ?>" target="_blank">Download</a> </label>
        </div>
    <?php endforeach; ?>
</div>