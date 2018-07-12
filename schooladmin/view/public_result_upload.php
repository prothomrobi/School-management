<?php
$control=new Controller();
$allClassData=$control->allClassList();
$allExamData=$control->allExamInformation();

if(isset($_POST['btnSave']) && $_POST['examName']!="")
{
    if($_FILES['resultFile']['size']>0) {
        $resultSheetName = "Result" . "." . time() . "." .$control->getExtension($_FILES['resultFile']['name']);
        $resultSheetUploadPath = "files/" . $resultSheetName;
        $resultPath="files/" . $resultSheetName;
        $result = move_uploaded_file($_FILES['resultFile']['tmp_name'], $resultSheetUploadPath);
    }
    else
    {
        $resultPath="";
    }

    $resultFile=array($_POST['examName'],$_POST['resultYear'],$resultPath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveResultSheetData=$control->savePublicResultData($resultFile);

    if($saveResultSheetData)
    {
        $sMsg="<p style='color:green; font-weight:bold;'>Save Successfully.</p>";
    }
    else
    {
        $eMsg="<p style='color:red; font-weight:bold;'>Please try again.</p>";
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Result Sheet Upload</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Exam Name</label>
                <input type="text" name="examName">
            </fieldset>
            <fieldset>
                <label>Result Year</label>
                <select name="resultYear" style="width: 35%;">
                    <option value="">Select</option>
                    <?php for($i=0;$i<10;$i++): ?>
                       <option><?php $year=date('Y')+$i; echo $year; ?></option>
                    <?php endfor; ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Result File</label>
                <input type="file" name="resultFile">
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