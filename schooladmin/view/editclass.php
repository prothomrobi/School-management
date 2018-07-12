<?php
 $control=new Controller();
 $classFind=$control->selectClassName($_GET['cid']);

  if(isset($_POST['btnEdit']) && $_POST['editClassName']!="")
  {
    $classData=array($_POST['classID'],$_POST['editClassName'],$_SESSION['asbUser'],date('Y-m-d'));
    $editClassInformation=$control->editClassInformation($classData);

      if($editClassInformation)
      {
          $sMsg="<p style='color: #008000; font-weight: bold;'>Save Successfully.</p>";
      }
      else
      {
          $eMsg="<p style='color: red; font-weight: bold;'>Please try again.</p>";
      }

  }

?>
<form action="" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Edit Class Information</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg; echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=class_list'>";} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Edit Class Name</label>
                <input type="text" name="editClassName" value="<?php echo $classFind[1]; ?>">
            </fieldset>
        </div>
        <input type="hidden" name="classID" value="<?php echo $classFind[0]; ?>">
        <footer>
            <div class="submit_link">
                <input type="submit" value="Edit" name="btnEdit" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>