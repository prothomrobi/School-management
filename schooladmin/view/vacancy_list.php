<?php
$control=new Controller();
$allVacancyList=$control->allVacancyList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=vacancy_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Vacancy List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allVacancyList as $avl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $avl[1]; ?></td>
                        <td><textarea><?php echo $avl[2]; ?></textarea></td>
                        <td><a href="?l=sch&p=editJob&act=edit&cid=<?php echo $avl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=vacancy_list&act=delete&tbl=vacancy&id=<?php echo $avl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>