<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['examName'])
{
 $examInformation=array($_POST['examName'],$_SESSION['asbUser'],date('Y-m-d'));
 $saveExamInformation=$control->saveExamInformation($examInformation);

    if($saveExamInformation)
    {
        $sMsg="<p style='color: #008000;font-weight: bold'>Save Successfully.</p>";
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
            <h3 class="tabs_involved">New Exam Information</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Exam Name</label>
                <input type="text" name="examName">
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