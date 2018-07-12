<?php
$control=new Controller();

$galleryInformation=$control->findGalleryData($_GET['gid']);

if(isset($_POST['btnEdit']))
{
    if(!empty($_FILES['imageFile']['name'])){
    if($_FILES['imageFile']['size']>0) {
        $thumbnailName = "Gallery" . "." . time() . "." .$control->getExtension($_FILES['imageFile']['name']);
        $thumbnailImageUploadPath = "studentimages/" . $thumbnailName;
        $imagePath="studentimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['imageFile']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $editData=array($galleryInformation[0],$_POST['title'],$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateGalleryImageInfo($editData);
    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=image_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
else{
    $editData=array($galleryInformation[0],$_POST['title'],$_SESSION['asbUser'],date('Y-m-d'));
    $updateMemberInfo=$control->updateGalleryInfo($editData);
    if($updateMemberInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=image_list'>";
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
                <h3 class="tabs_involved">Edit Gallery Image</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $galleryInformation[1]; ?>">
            </fieldset>
            
            <fieldset>
                <label>Image</label>
                <input type="file" name="imageFile">
                <img src="<?php echo $galleryInformation[2]; ?>" width="200px" height="80px">
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
