<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['linkURL']!="")
{
    $checkURL=explode("://",$_POST['linkURL']);
    if($checkURL[0]!="")
    {
        $url=$_POST['linkURL'];
    }
    else
    {
        $url="http://".$_POST['linkURL'];
    }
    $linkData=array($_POST['linkName'],$url,$_SESSION['asbUser'],date('Y-m-d'));
    $saveLinkData=$control->saveLinkInformation($linkData);

    if($saveLinkData)
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
            <h3 class="tabs_involved">New Important Link</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Link Name</label>
                <input type="text" name="linkName">
            </fieldset>
            <fieldset>
                <label>Link URL</label>
                <input type="text" name="linkURL">
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