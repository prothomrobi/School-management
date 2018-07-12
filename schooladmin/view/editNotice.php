<?php
$control=new Controller();

$noticeInformation=$control->findNoticeData($_GET['cid']);

if(isset($_POST['btnEdit']))
{
    $noticeInfo=array($noticeInformation[0],$_POST['title'],$_POST['message'],$_SESSION['asbUser'],date('Y-m-d'));
    $editNoticeInfo=$control->editNoticeInformation($noticeInfo);
    if($editNoticeInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=notice_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
if(isset($_GET['act']) && $_GET['act']=="edit") {
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Edit Notice</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $noticeInformation[1]; ?>">
            </fieldset>
            
            <fieldset>
                <label>Notice</label>
                <textarea name="message" cols="22" rows="12"><?php echo $noticeInformation[2]; ?></textarea>
            </fieldset>
            
            </div>
            
            
            <footer>
                <div class="submit_link">
                    <input type="submit" value="Update" name="btnEdit" class="alt_btn">
                    <input type="reset" value="Reset">
                </div>
            </footer>
        </article>
    </form>
<?php
}
