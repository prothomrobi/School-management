<?php
$control=new Controller();
if(isset($_POST['btnSave']) && $_POST['bannerTitle']!="")
{
    if($_FILES['imageFile']['size']>0) {
        $thumbnailName = "banner" . "." . time() . "." .$control->getExtension($_FILES['imageFile']['name']);
        $thumbnailImageUploadPath = "images/banner/" . $thumbnailName;
        $imagePath="images/banner/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['imageFile']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $imagePath="";
    }

    $imageData=array($_POST['bannerTitle'],$imagePath,$_SESSION['asbUser'],date('Y-m-d'));
    $saveBannerData=$control->saveBannerData($imageData);

    if($saveBannerData)
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
            <h3 class="tabs_involved">New Banner</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Slider Title</label>
                <input type="text" name="bannerTitle">
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