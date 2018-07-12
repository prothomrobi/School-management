<?php
$control=new Controller();
if(isset($_POST['btnMember']) && $_POST['memName']!="")
{
    if($_FILES['memberFile']['size']>0) {
        $memberName = "member_" .time() . "." .$control->getExtension($_FILES['memberFile']['name']);
        $memberImagePath="employeeimages/".$memberName;
        $memberImage = move_uploaded_file($_FILES['memberFile']['tmp_name'], $memberImagePath);
    }
    else
    {
        $memberImagePath="";
    }

    $imageData=array($_POST['memName'],$_POST['memDes'],$memberImagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveImageData=$control->saveMemberInformation($imageData);

    if($saveImageData)
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
            <h3 class="tabs_involved">New Member</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Member Name</label>
                <input type="text" name="memName">
            </fieldset>
            <fieldset>
                <label>Member Designation</label>
                <input type="text" name="memDes">
            </fieldset>
            <fieldset>
                <label>Member Images</label>
                <input type="file" name="memberFile">
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Save" name="btnMember" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>