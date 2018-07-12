<?php
$control=new Controller();
$allRoutineList=$control->allClassRoutineList();
?>
<h4> &nbsp; Class Routine</h4>
<div class="textbox">
  <?php foreach($allRoutineList as $routine): ?>
  <div class="show-normal">
    <label><?php echo $routine[1]; ?></label><br/><br/>
    <label><?php echo $routine[2] ?></label>
    <label><a href="schooladmin/<?php echo $routine[3]; ?>" target="_blank"><span style="color:#F00;">Download</span></a> </label>
  </div>
  <?php endforeach; ?>
</div>