<?php
$controller=new Controller();
$studentList=$controller->allStudentList();
$classList=$controller->allClassList();
?>
<h4> &nbsp; Student List</h4>
<div class="textbox">
    <h4>Class List</h4>
    <div class="textbox_6">
          <?php foreach($classList as $cl): ?>
            <label class="class_list"><a href="?l=sh&pages=classstudentlist&cl=<?php echo $cl[0]; ?>"><?php echo $cl[1]; ?></a> </label>
          <?php endforeach; ?>
    </div>
</div>
<div class="textbox">
    <?php
    foreach($studentList as $std):
        ?>
        <div class="textbox_4">
            <label class="label-box"><img src="schooladmin/<?php echo $std[14]; ?>" width="200px" height="220px"></label>
            <label class="label-box"><?php echo $std[2]; ?></label>
            <label class="label-box"><?php $classFind=$controller->selectedClassData($std[3]); echo $classFind[1]; ?></label>
        </div>
    <?php
    endforeach;
    ?>
</div>