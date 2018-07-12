<?php
if(isset($_POST['btnSend']) && $_POST['mobileNo']!="")
{
  $mobileNo="+88".$_POST['mobileNo'];
  $smsData=array($mobileNo,$_POST['smsBody']);
    $eMsg="API not integrated.";
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Send SMS</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Mobile No</label>
                <input type="number" name="mobileNo"> [Only 11 Digits]
            </fieldset>
            <fieldset>
                <label>SMS Body</label>
                <textarea name="smsBody" cols="22" rows="8"></textarea>
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Send" name="btnSend" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>