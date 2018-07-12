<?php
$control=new Controller();
$selectedNewsData=$control->selectedNewsData($_GET['id']);
?>
<h4> &nbsp; News Details</h4>
<div class="textbox">
    <label><h4><?php echo $selectedNewsData[1]; ?></h4></label>
    <p>
        <?php echo $selectedNewsData[2]; ?>
    </p>
</div>
