<?php
$control=new Controller();
$allTenderInfo=$control->allTenderList();
?>
<h4> &nbsp; Tenders</h4>
<div class="textbox">
    <?php
    foreach($allTenderInfo as $ti):
        ?>
        <div class="show-normal">
            <label><?php echo $ti[1]; ?></label>
            <label><?php echo $ti[2]; ?></label>
            <label><a href="schooladmin/<?php echo $ti[3]; ?>" target="_blank">Download</a> </label>
        </div>
    <?php
    endforeach;
    ?>
</div>