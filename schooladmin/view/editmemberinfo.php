<?php
$control=new Controller();
$specificMember=$control->specificMemberInfo($_GET['mid']);
if(isset($_POST['btnEditMember']) && $_POST['editMemName']!="")
{ 
    if(!empty($_FILES['imageFile']['name'])){
    if($_FILES['memberFile']['size']>0) {
        $memberName = "member_" .time() . "." .$control->getExtension($_FILES['memberFile']['name']);
        $memberImagePath="employeeimages/".$memberName;
        $memberImage = move_uploaded_file($_FILES['memberFile']['tmp_name'], $memberImagePath);
    }
    else
    {
        $memberImagePath="";
    }
    $editData=array($specificMember[0],$_POST['editMemName'],$_POST['editMemDes'],$memberImagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateMemberImageInfo($editData);

    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=member_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
else{
    $editData=array($specificMember[0],$_POST['editMemName'],$_POST['editMemDes'],$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateMemberInfo($editData);

    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Save Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=member_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Edit Member</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Member Name</label>
                <input type="text" name="editMemName" value="<?php echo $specificMember[1]; ?>">
            </fieldset>
            <fieldset>
                <label>Member Designation</label>
                <input type="text" name="editMemDes" value="<?php echo $specificMember[2]; ?>">
            </fieldset>
            <fieldset>
                <label>Member Images</label>
                <input type="file" name="memberFile">
                <img src="<?php echo $specificMember[3];  ?>" width="120px" height="80px">
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Edit" name="btnEditMember" class="alt_btn">
            </div>
        </footer>
    </article>
</form>