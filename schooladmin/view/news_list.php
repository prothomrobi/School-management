<?php
$control=new Controller();
$allNewsList=$control->allNewsInfo();

if(isset($_GET['act']) && $_GET['act']=="delete" && $_GET['tbl']!="")
{
    $deleteData=array($_GET['tbl'],"id=".$_GET['id']);
    $deleteFormsData=$control->deleteInformation($deleteData);

    if($deleteFormsData)
    {
        echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=news_list'>";
    }
}
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">News List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>News Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allNewsList as $anl): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $anl[1]; ?></td>
                        <td><a href="?l=sch&p=editNews&act=edit&cid=<?php echo $anl[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=news_list&act=delete&tbl=news&id=<?php echo $anl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>