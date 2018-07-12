<?php
  $control=new Controller();
  $allMemberData=$control->allGoverningBodyMemberData();
?>
<h4> &nbsp; বিদ্যালয় পরিচালনা কমিটির সন্মানিত সদস্যবৃন্দ</h4>
<div class="textbox">
    <?php foreach($allMemberData as $member): ?>
    <div class="textbox_4">
        <label class="label-box"><img src="schooladmin/<?php if($member[3]!=""){ echo $member[3]; } else { echo "images/stock_people.png";} ?>" width="200px" height="220px"></label>
        <label class="label-box"><?php echo $member[2]; ?></label>
        <label class="label-box"><?php echo $member[1]; ?></label>
    </div>
    <?php endforeach; ?>
</div>
