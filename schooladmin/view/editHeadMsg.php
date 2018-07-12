<?php
$control=new Controller();

$headInformation=$control->findHeadData($_GET['hid']);

if(isset($_POST['btnEdit']))
{
    if(!empty($_FILES['teacherImage']['name'])){
    if($_FILES['teacherImage']['size']>0) {
        $thumbnailName = "Head" . "." . time() . "." .$control->getExtension($_FILES['teacherImage']['name']);
        $thumbnailImageUploadPath = "employeeimages/head_master/" . $thumbnailName;
        $imagePath="employeeimages/head_master/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['teacherImage']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $editData=array($headInformation[0],$_POST['teacherName'],$_POST['education'],$imagePath,$_POST['message'],$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateHeadImageInfo($editData);
    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=head_messageList'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
else{
    $editData=array($headInformation[0],$_POST['teacherName'],$_POST['education'],$_POST['message'],$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateHeadInfo($editData);
    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=head_messageList'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
  }
}
if(isset($_GET['act']) && $_GET['act']=="edit") {
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Edit Head Master Message</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                <label>Name</label>
                <input type="text" name="teacherName" value="<?php echo $headInformation[1]; ?>">
            </fieldset>
            <fieldset>
                <label>Education Qualification</label>
                <input type="text" name="education" value="<?php echo $headInformation[2]; ?>">
            </fieldset>
            <fieldset>
                <label>Message</label>
                <textarea name="message" cols="22" rows="12"><?php echo $headInformation[4]; ?></textarea>
            </fieldset>
            <fieldset>
                <label>Teacher Image</label>
                <input type="file" name="teacherImage">
                <img src="<?php echo $headInformation[3]; ?>" width="120px" height="80px">
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
