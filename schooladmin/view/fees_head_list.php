<?php
$control=new Controller();
$allFeesHead=$control->feesHeadList();
?>
<article class="module width_full">
    <header><h3 class="tabs_involved">Fees Head List</h3></header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Fees Head Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allFeesHead as $afh): ?>
                    <tr>
                        <td><?php static $i=1; echo $i++; ?></td>
                        <td><?php echo $afh[1]; ?></td>
                        <td><a href="?l=sch&p=editcourse&cid=<?php echo $afh[0]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=delete&tbl=course&id=<?php echo $afh[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->
    </div>
</article>