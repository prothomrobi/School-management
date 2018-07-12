<?php
$control=new Controller();
if(isset($_POST['btnSave']))
{
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

    $imageData=array($_POST['imageTitle'],$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveImageData=$control->saveImageData($imageData);

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
            <h3 class="tabs_involved">New Image</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Image Title</label>
                <input type="text" name="imageTitle">
            </fieldset>
            <fieldset>
                <label>Upload Image</label>
                <input type="file" name="imageFile">
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