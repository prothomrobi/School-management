 <?php
   $controller=new Controller();
   $model=new Model();
   
  $allHeadTeacherMsgList=$controller->HeadTeacherMsgList();
  $allChairmanMsgList=$controller->ChairmanMsgList();
   ?>
<h4> &nbsp; সভাপতির বাণী</h4>
<?php
                 
             
                  foreach($allChairmanMsgList as $chairman_info): ?>
<div class="textbox_5">
    <div class="pic-show"><img src="schooladmin/<?php echo $chairman_info[2]; ?>"></div>
    <div class="textbox_1">
       <?php echo $chairman_info[3]; ?>

     <br/><br/>
 
        <b>Chairman</b><br/>
        <b><?php echo $chairman_info[1]; ?></b><br/>
        <b>Dalta Rahmania High School</b><br/>
    </div>
    
</div>

 <?php endforeach; ?>