<?php
  $control=new Controller();
  if(isset($_POST['btnSave']) && $_POST['noticeTitle']!="")
  {
    $noticeData=array($_POST['noticeTitle'],$_POST['noticeDetails'],$_SESSION['asbUser'],date('Y-m-d'));
    $saveNoticeData=$control->saveNoticeData($noticeData);

      if($saveNoticeData)
      {
          $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
      }
      else
      {
          $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
      }
  }
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">New Notice Information</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Notice Title</label>
                <input type="text" name="noticeTitle">
            </fieldset>
            <fieldset>
                <label>Notice Details</label>
                <textarea name="noticeDetails" cols="22" rows="6"></textarea>
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Save" name="btnSave" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>