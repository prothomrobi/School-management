<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['conName']!="")
{
    if($_FILES['conFile']['size']>0) {
        $contentName = "content_" . "." . time() . "." .$control->getExtension($_FILES['conFile']['name']);
        $contentUploadPath = "files/" . $contentName;
        $contentUpload = move_uploaded_file($_FILES['conFile']['tmp_name'], $contentUploadPath);
    }
    else
    {
        $contentUploadPath="";
    }

    $contentData=array($_POST['conName'],$contentUploadPath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveContentData=$control->saveContentInformation($contentData);

    if($saveContentData)
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
            <h3 class="tabs_involved">New Content</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Content Name</label>
                <input type="text" name="conName">
            </fieldset>
            <fieldset>
                <label>Content Upload</label>
                <input type="file" name="conFile">
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