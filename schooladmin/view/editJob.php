<?php
$control=new Controller();

$vacancyInformation=$control->findVacancyData($_GET['cid']);

if(isset($_POST['btnEdit']))
{
    $vacancyInfo=array($vacancyInformation[0],$_POST['title'],$_POST['message'],$_SESSION['asbUser'],date('Y-m-d'));
    $editVacancyInfo=$control->editVacancyInformation($vacancyInfo);
    if($editVacancyInfo)
    {
        $sMsg="<p style='color: #008000; font-weight: bold'>Edit Successfully.</p>";
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=vacancy_list'>";
    }
    else
    {
        $eMsg="<p style='color: red; font-weight: bold'>Please try again.</p>";
    }
}
if(isset($_GET['act']) && $_GET['act']=="edit") {
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <article class="module width_full">
            <header>
                <h3 class="tabs_involved">Edit Vacancy</h3>
                <?php if (isset($sMsg) && $sMsg != "") {
                    echo $sMsg;
                } elseif (isset($eMsg) && $eMsg != "") {
                    echo $eMsg;
                } ?>
            </header>
            <div class="module_content">
                <fieldset>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $vacancyInformation[1]; ?>">
            </fieldset>
            
            <fieldset>
                <label>Description</label>
                <textarea name="message" cols="22" rows="12"><?php echo $vacancyInformation[2]; ?></textarea>
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
