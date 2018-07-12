<?php
$controller=new controller();
if(isset($_POST['btnSub']))
{
    if($_FILES['imageUpload']['size']>0) {
        $thumbnailName = "Thumbnail" . "." . time() . "." .getExtension($_FILES['imageUpload']['name']);
        $thumbnailImageUploadPath = "../galleryimages/" . $thumbnailName;
        $imagePath="galleryimages/" . $thumbnailName;
        $thumbnail = move_uploaded_file($_FILES['imageUpload']['tmp_name'], $thumbnailImageUploadPath);
    }
    else
    {
        $thumbnailImageUploadPath="";
    }
    $imageUpload=array($_POST['imageName'],$imagePath,date('Y-m-d'));
    $imageSave=$controller->saveImage($imageUpload);

    if($imageSave)
    {
        $msg="<p>Save Successfully</p>";
    }
}
function getExtension($str) {
    $i = strrpos($str,".");
    if (!$i)
    {
        return "";
    }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}
?>
<div class="widget-header">
    <h3>Gallery</h3> <a href="?l=arh&page=gallery" style="float:right; padding:12px;"><h5>BACK</h5></a>
    <?php if(isset($msg) && $msg!="") { echo $msg;} ?>
</div>
<!-- /widget-header -->
<div class="widget-content">
    <div class="shortcuts">
        <h4>Fields Marked with * must be filled</h4>

        <br /><br />

        <div class="row">
            <div class="col-md-12">

                <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>
                        <div class="control-group">
                            <div class="col-md-3">
                                <label for="normal-field" class="control-label">Image Name *</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" placeholder="Image Name" name="imageName" class="form-control" id="normal-field">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="col-md-3">
                                <label for="hint-field" class="control-label">Upload Image*</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="file" style="float:left;" name="imageUpload" >
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <div class="form-actions">
                        <div>
                            <button class="btn btn-primary" type="submit" name="btnSub">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<!-- /shortcuts -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/smooth-sliding-menu.js"></script>


<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable( {
            "sPaginationType": "full_numbers"
        } );
    } );
</script>