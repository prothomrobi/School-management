<?php
 $control=new Controller();
 $employeeData=$control->findOtherEmployee();
?>

<h4> &nbsp; 3rd and 4th Class Employee List</h4>
<div class="textbox">
    <?php
    foreach($employeeData as $emp):
        ?>
        <div class="textbox_4">
            <label class="lavel-box"><img src="schooladmin/<?php if($emp[14]!=""){ echo $emp[14]; } else { echo "images/stock_people.png";} ?>" width="200px" height="220px"></label>
            <label class="label-box"><?php echo $emp[2]; ?></label>
            <label class="label-box"><?php $teacherDesignation=$control->selectedTeacherDesignation($emp[13]); echo $teacherDesignation[1]; ?></label>
        </div>
    <?php
    endforeach;
    ?>
</div>