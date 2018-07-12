<?php
$controller=new Controller();
$allHolidayCalendar=$controller->allHolidayCalendar();
?>
<h4> &nbsp; Holiday Calendar</h4>
<div class="textbox">
    <?php foreach($allHolidayCalendar as $calendar): ?>
        <div class="show-normal">
            <label><?php echo $calendar[1]; ?></label>
            <span><?php echo $calendar[2] ?></span>
            <span><a href="schooladmin/<?php echo $calendar[3]; ?>" target="_blank">Download</a> </span>
        </div>
    <?php endforeach; ?>
</div>