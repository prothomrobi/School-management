<?php
$controller=new Controller();
$allExamCalendar=$controller->allExamRoutine();
?>
<h4> &nbsp; Exam Calendar</h4>
<div class="textbox">
    <?php foreach($allExamCalendar as $exam): ?>
        <div class="show-normal">
            <label><?php echo $exam[1]; ?></label>
            <span><?php echo $exam[2] ?></span>
            <span><a href="schooladmin/<?php echo $exam[3]; ?>" target="_blank">Download</a> </span>
        </div>
    <?php endforeach; ?>
</div>
