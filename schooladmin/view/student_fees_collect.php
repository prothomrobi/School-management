<?php
if($_POST['studentID']!="")
{
    $control=new Controller();
    $findStudentData=$control->findStudentData($_POST['studentID']);
    $feesHead=$control->feesHeadList();
    ?>
    <form action="?l=sch&p=student_fees_collect" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Collect Fees</h3>
                <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
            </header>
            <div class="module_content">
                <fieldset>
                    <label>Student Name</label>
                    <?php echo $findStudentData[2]; ?>
                </fieldset>
                <fieldset>
                    <label>Class Name</label>
                     <?php $classData=$control->selectClassName($findStudentData[3]); echo $classData[1]; ?>
                </fieldset>
                <fieldset>
                    <label> Student Image</label>
                    <img src="<?php echo $findStudentData[10]; ?>" width="60px" height="40px">
                </fieldset>
                <table class="tablesorter" cellspacing="0">
                    <thead>
                    <?php foreach($feesHead as $fh): ?>
                    <tr>
                        <td>
                            <fieldset>
                                <label><?php echo $fh[1];  ?></label>
                                <input type="text" name="studentID" width="40%">
                            </fieldset>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <footer>
                <div class="submit_link">
                    <input type="submit" value="Search" name="btnSave" class="alt_btn">
                    <input type="reset" value="Reset">
                </div>
            </footer>
        </article>
    </form>
<?php
}
else
{
  echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=collect_fees'>";
}
?>
