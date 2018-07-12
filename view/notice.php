<?php
$controller=new Controller();
$allNoticeData=$controller->allNoticeData();
?>
<h4> &nbsp; Notice Board</h4>
<div class="textbox">
    <?php
    foreach($allNoticeData as $not):
        ?>
        <div>
            <?php echo $not[1]; ?><br/>
            <?php echo $not[2]; ?>
        </div>
    <?php
    endforeach;
    ?>
</div>