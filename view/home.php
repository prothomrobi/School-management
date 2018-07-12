   <?php
   $controller=new Controller();
   $model=new Model();
   
   $allHeadTeacherMsgList=$controller->HeadTeacherMsgList();
   $allChairmanMsgList=$controller->ChairmanMsgList();
   ?>

    <h4> &nbsp;দল্টা রহমানিয়া উচ্চ বিদ্যালয়ে আপনাকে স্বাগতম</h4>
    <div class="textbox">
    বিদ্যালয়টি লক্ষীপুর জেলাধীন রামগঞ্জ উপজেলার ১০ নং ভাটরা ইউনিয়নের দলটা গ্রামে অবস্থিত। এই বিদ্যালয়টি রামগঞ্জ থেকে ১৪ কি,মি পূর্বে, চাটখীল থেকে ১০ কি, মি উত্তরে, শাহরাস্তি থেকে ১৩ কি, মি দক্ষিণে এবং মনহরগঞ্জ থেকে ১৪ কি, মি পশ্চিমে অবস্থিত। বিদ্যালয়টির পাকা দ্বিতল বিশিষ্ট দুটি ভবন রয়েছে। এটি ১৯২৫ সালে প্রতিষ্ঠিত হয়। বিদ্যালয়টি ০১-০১-১৯৫৩ সালে ১ম স্বীকৃতি প্রাপ্ত হয়। বর্তমানে বিদ্যালয়টিতে জে, এস, সি ও এস, এস, সি পরীক্ষার কেন্দ্র রয়েছে। রামগঞ্জ উপজেলায় এটি একটি স্বনামধন্য প্রতিষ্ঠান।

    </div>
    <h4>&nbsp; বানী</h4>
    <div class="textbox">

                <?php
             
                  foreach($allHeadTeacherMsgList as $head_info): ?>
                
        <h4>&nbsp; Head Master Message</h4><br/>
        <div class="p_pic"><img src="schooladmin/<?php echo $head_info[3]; ?>"></div><br/>
        <div class="textbox_2"><?php echo substr($head_info[4], 0, 1400); ?>
              

            <br>
            <br>
            <a href="?l=sh&pages=headdetails" class="submit">Read More..</a>
        </div>
		<?php endforeach; ?> 
    </div>
    <div class="textbox">
	      <?php
                 
             
                  foreach($allChairmanMsgList as $chairman_info): ?>
	
        <h4>&nbsp; Chairman Message</h4><br/>
        <div class="p_pic"><img src="schooladmin/<?php echo $chairman_info[2]; ?>"></div><br/>
        <div class="textbox_2"><?php echo  substr($chairman_info[3], 0, 470); ?><br>
            <br>
            <a href="?l=sh&pages=chairmandetails" class="submit">Read More..</a>
        </div>
		<?php endforeach; ?>
		
    </div>