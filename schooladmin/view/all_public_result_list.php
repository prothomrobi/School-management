<?php
$control=new Controller();
$allPublicExamResultList=$control->allPublicExamResult();

if(isset($_GET['type']) && $_GET['type']=="delete" && $_GET['tbl']!="")
{
  $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
  $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=all_public_result_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Public Exam Result List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Exam Name</th>
                    <th>Result Year</th>
                    <th>Files</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allPublicExamResultList as $arl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $arl[1]; ?></td>
                        <td><?php echo $arl[2]; ?></td>
                        <td><a href="<?php echo $arl[3]; ?>" target="_blank">Upload Doc</a> </td>
                        <td><a href="?l=sch&p=all_public_result_list&type=delete&tbl=public_result&id=<?php echo $arl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>