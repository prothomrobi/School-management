<?php
$control=new Controller();
$allClassList=$control->allClassList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $dData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($dData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=class_list'>";
    }
}

?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Class List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Class Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allClassList as $acl): ?>
                <tr>
                    <td><?php static $i=1; echo $i++; ?></td>
                    <td><?php echo $acl[1]; ?></td>
                    <td><a href="?l=sch&p=editclass&cid=<?php echo $acl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=class_list&act=delete&tbl=class&id=<?php echo $acl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>