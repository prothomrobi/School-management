<?php
$control=new Controller();
$linkList=$control->allLinkList();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteInformation=$control->deleteInformation($deleteData);

    if($deleteInformation)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=link_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Link List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Link Name</th>
                    <th>Link URL</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($linkList as $list): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $list[1]; ?></td>
                        <td><a href="<?php echo $list[2]; ?>" target="_blank">URL: <?php echo $list[1]; ?></a></td>
                        <td><a href="?l=sch&p=link_list&act=delete&tbl=link&id=<?php echo $list[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>