<?php
$control=new Controller();
$allDesignationList=$control->allDesignationData();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
  $dData=array($_GET['tbl'],"id=".$_GET['id']);
  $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=designation_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Designation List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Designation Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allDesignationList as $adl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $adl[1]; ?></td>
                        <td><a href="?l=sch&p=editemployeecategory&eid=<?php echo $adl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=designation_list&act=delete&tbl=designation&id=<?php echo $adl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>