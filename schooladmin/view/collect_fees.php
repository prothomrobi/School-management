<form action="?l=sch&p=student_fees_collect" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Collect Fees</h3>
            <?php if(isset($sMsg) && $sMsg!="") { echo $sMsg;} elseif(isset($eMsg) && $eMsg!="") { echo $eMsg;} ?>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Student ID</label>
                <input type="text" name="studentID">
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Search" name="btnSave" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>