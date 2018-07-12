<?php
$control=new Controller();
$allClassData=$control->allClassList();
?>
<form action="?l=sch&p=student_class_list" method="post" enctype="multipart/form-data">
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Class Wise Student</h3>
        </header>
        <div class="module_content">
            <fieldset>
                <label>Class Select</label>
                <select name="className" id="clData">
                    <option>Select</option>
                    <?php foreach($allClassData as $cl): ?>
                      <option value="<?php echo $cl[0]; ?>"><?php echo $cl[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
        </div>
        <footer>
            <div class="submit_link">
                <input type="submit" value="Find" name="btnMember" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>
    </article>
</form>