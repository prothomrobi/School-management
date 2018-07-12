<?php
$control=new Controller();
$allExBrightStudents=$control->allExBrightStudents();
?>
    <h4> &nbsp; Ex-Bright Students</h4>
<?php foreach($allExBrightStudents as $student): ?>
    <div class="textbox_5">
        <div class="pic-show"><img src="schooladmin/<?php echo $student[3]; ?>" width="220px" hight="250px"></div>
        <div class="textbox_3">
            <?php echo $student[1]; ?><br/>
            <?php echo $student[2]; ?>
        </div>
    </div>
<?php endforeach; ?>