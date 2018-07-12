<?php
$controller=new Controller();
$allNewsData=$controller->allNewsData();
?>

<h4> &nbsp; News</h4>
<div class="textbox">
    <?php
    foreach($allNewsData as $news):
        ?>
        <div>
            <?php echo $news[2]; ?>
        </div>
    <?php
    endforeach;
    ?>
</div>