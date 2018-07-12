<?php
include_once '../controller/Controller.php';
include_once '../model/Model.php';
$control=new Controller();
$classStudent=$control->findClassStudents($_POST['cl']);
$allClass=$control->allClassList();
?>
<script>
    function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                console.log(i)
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }
</script>
    <form method="post" action="" enctype="multipart/form-data">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Class Name</th>
                    <th>PIC</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($classStudent as $asl): ?>
                <tr align="center">
                    <td><?php static $i=1; echo $i++; ?></td>
                    <td><?php echo $asl[1]; ?></td>
                    <td><?php echo $asl[2]; ?></td>
                    <td><?php $className=$control->selectClassName($asl[6]); echo $className[1]; ?></td>
                    <td><img src="<?php echo $asl[14]; ?>" width="80px" height="60px"></td>
                    <td><a href="?l=sch&p=editstudent&act=edit&sid=<?php echo $asl[1]; ?>"><input type="image" src="images/icn_edit.png" title="Edit"></a><a href="?l=sch&p=student_list&act=delete&tbl=student&id=<?php echo $asl[0]; ?>"><input type="image" src="images/icn_trash.png" title="Trash"></a><a href="?l=sch&p=editstudent&act=view&sid=<?php echo $asl[1]; ?>"><input type="image" src="images/icn_view_users.png" title="View"></a> <a href="?l=sch&p=studentpromotion&act=edit&sid=<?php echo $asl[1]; ?>"><input type="image" src="images/icn_jump_back.png" title="Promotion"></a></td>
                </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>