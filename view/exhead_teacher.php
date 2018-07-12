<?php
 $control=new Controller();
 $allExHeadTeacher=$control->allExHeadTeacherData();
?>
<h4> &nbsp; Ex-Head Teacher</h4>
<?php foreach($allExHeadTeacher as $head): ?>
<div class="textbox_5">
    <div class="pic-show"><img src="schooladmin/<?php if($head[3]!=""){ echo $head[3]; } else { echo "images/stock_people.png";} ?>" width="220px" height="220px"></div>
    <div class="textbox_3">
        <?php echo $head[1]; ?>
    </div>
    <div class="textbox_6">
        <?php echo $head[2]; ?>
    </div>
</div>
<?php endforeach; ?>