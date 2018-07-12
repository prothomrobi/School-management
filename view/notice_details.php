<?php
$controller=new Controller();
$selectedNoticeData=$controller->selectedNoticeData($_GET['id']);
?>
<h4> &nbsp; Notice Board</h4>
<div class="textbox">
   <label><h4><?php echo $selectedNoticeData[1]; ?></h4></label>
    <p>
        <?php echo $selectedNoticeData[2]; ?>
    </p>
</div>
