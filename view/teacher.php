<?php
  $control=new Controller();
  $allTeacherList=$control->allTeacherList();
?>
<h4> &nbsp; Teacher List</h4>
<div class="textbox">
    <?php
    foreach($allTeacherList as $teacher):
        ?>
        <div class="textbox_4">
             <label class="label-box"><img src="schooladmin/<?php if($teacher[14]!=""){ echo $teacher[14]; } else { echo "images/stock_people.png";} ?>" width="200px" height="220px"></label>
            <label class="label-box"><?php echo $teacher[2]; ?></label>
            <label class="label-box"><?php $teacherDesignation=$control->selectedTeacherDesignation($teacher[13]); echo $teacherDesignation[1]; ?></label>
        </div>
    <?php
    endforeach;
    ?>
</div>