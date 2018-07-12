<?php
$control=new Controller();
$totalStudent=$control->totalStudent();
$totalEmployee=$control->totalEmployee();
$totalClass=$control->totalClass();
$totalExam=$control->totalExam();
?>

<h4 class="alert_info">Welcome to the School Admin Section</h4>

<article class="module width_full">
    <header><h3>Stats</h3></header>
    <div class="module_content">
        <article class="stats_overview">
            <div class="overview_today">
                <p class="overview_day">Total Student</p>
                <p class="overview_count"><?php echo number_format($totalStudent[0],2); ?></p>
                <p class="overview_type">Count</p>
                <p class="overview_count"><?php echo number_format($totalEmployee[0],2); ?></p>
                <p class="overview_type">Total Employee</p>
            </div>
            <div class="overview_previous">
                <p class="overview_day">Total Class</p>
                <p class="overview_count"><?php echo number_format($totalClass[0],2); ?></p>
                <p class="overview_type">Number</p>
                <p class="overview_count"><?php echo number_format($totalExam[0],2); ?></p>
                <p class="overview_type">Total Exam</p>
            </div>
        </article>
        <div class="clear"></div>
    </div>
</article><!-- end of stats article -->

<article class="module width_full">
    <header><h3 class="tabs_involved">Content Manager</h3>
        <ul class="tabs">
            <li><a href="#tab1">Posts</a></li>
            <li><a href="#tab2">Comments</a></li>
        </ul>
    </header>

    <div class="tab_container">
        <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th></th>
                    <th>Entry Name</th>
                    <th>Category</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Lorem Ipsum Dolor Sit Amet</td>
                    <td>Articles</td>
                    <td>5th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Ipsum Lorem Dolor Sit Amet</td>
                    <td>Freebies</td>
                    <td>6th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Sit Amet Dolor Ipsum</td>
                    <td>Tutorials</td>
                    <td>10th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Dolor Lorem Amet</td>
                    <td>Articles</td>
                    <td>16th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Dolor Lorem Amet</td>
                    <td>Articles</td>
                    <td>16th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                </tbody>
            </table>
        </div><!-- end of #tab1 -->

        <div id="tab2" class="tab_content">
            <table class="tablesorter" cellspacing="0">
                <thead>
                <tr>
                    <th></th>
                    <th>Comment</th>
                    <th>Posted by</th>
                    <th>Posted On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Lorem Ipsum Dolor Sit Amet</td>
                    <td>Mark Corrigan</td>
                    <td>5th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Ipsum Lorem Dolor Sit Amet</td>
                    <td>Jeremy Usbourne</td>
                    <td>6th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Sit Amet Dolor Ipsum</td>
                    <td>Super Hans</td>
                    <td>10th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Dolor Lorem Amet</td>
                    <td>Alan Johnson</td>
                    <td>16th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>Dolor Lorem Amet</td>
                    <td>Dobby</td>
                    <td>16th April 2011</td>
                    <td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td>
                </tr>
                </tbody>
            </table>

        </div><!-- end of #tab2 -->

    </div><!-- end of .tab_container -->

</article><!-- end of content manager article -->

<div class="spacer"></div>