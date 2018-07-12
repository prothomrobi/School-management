 <?php
   $controller=new Controller();
   $model=new Model();
   
  $allHeadTeacherMsgList=$controller->HeadTeacherMsgList();
  
   ?>

<h4> &nbsp; প্রধান শিক্ষকের বাণী</h4>

<?php
                 
             
                  foreach($allHeadTeacherMsgList as $head_info): ?>
<div class="textbox_5">
    <div class="pic-show"><img src="schooladmin/<?php echo $head_info[3]; ?>"></div>
    
    <div class="textbox_1"> <?php echo $head_info[4]; ?> <br/><br/>
    ধন্যবাদান্তে<br/>
    <?php echo $head_info[1]; ?> (<?php echo $head_info[2]; ?>)<br/>
    
প্রধান শিক্ষক <br/>
দল্টা রহমানিয়া উচ্চ বিদ্যালয়</div>
</div>

<?php endforeach; ?>