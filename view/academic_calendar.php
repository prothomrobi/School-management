<?php
$controller=new Controller();
$allAcademicData=$controller->allAcademicCalendar();
?>
<h4> &nbsp; Academic Calendar</h4>
<div class="textbox">
<?php foreach($allAcademicData as $academic): ?>
    <div class="show-normal">
        <label><?php echo $academic[1]; ?></label>
        <span><?php echo $academic[2] ?></span>
        <span><a href="schooladmin/<?php echo $academic[3]; ?>" target="_blank">Download</a> </span>
    </div>
<?php endforeach; ?>
</div>