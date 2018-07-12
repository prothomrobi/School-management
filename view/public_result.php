<?php
$controller=new Controller();
$allPublicResult=$controller->allPublicResult();
?>
<h4> &nbsp; Public Exam Result</h4>
<div class="textbox">
    <?php foreach($allPublicResult as $public): ?>
        <div class="show-normal">
            <label><?php echo $public[1]; ?></label>
            <span><?php echo $public[2]; ?></span>
            <span><a href="schooladmin/<?php echo $public[3]; ?>" target="_blank">Download</a> </span>
        </div>
    <?php endforeach; ?>
</div>