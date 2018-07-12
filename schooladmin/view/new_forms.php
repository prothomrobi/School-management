<?php
$control=new Controller();
if(isset($_POST['btnFile']) && $_POST['formsTitle']!="")
{
    if($_FILES['formsFile']['size']>0) {
        $formsName = "files" . "." . time() . "." .$control->getExtension($_FILES['formsFile']['name']);
        $formsUploadPath = "files/" . $formsName;
        $formsPath="files/" . $formsName;
        $forms = move_uploaded_file($_FILES['formsFile']['tmp_name'], $formsUploadPath);
    }
    else
    {
        $formsPath="";
    }

    $formsData=array($_POST['formsTitle'],$formsPath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveFormsData=$control->saveFormsData($formsData);

    if($saveFormsData)
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
            <h3 class="tabs_involved">New Forms</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Forms Title</label>
                <input type="text" name="formsTitle">
            </fieldset>
            <fieldset>
                <label>Upload Forms</label>
                <input type="file" name="formsFile">
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Save" name="btnFile" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>