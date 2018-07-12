<?php
  $control=new Controller();
  $allResultData=$control->allResultData();
?>
<h4> &nbsp; Result</h4>
<table cellpadding="5" border="1" cellspacing="0" width="100%" bgcolor="#f7f7f7" class="table-sub-table data-table" style="border-collapse:collapse">
    <thead>
      <tr>
          <th>Exam Name</th>
          <th>Class Name</th>
          <th>Result Sheet</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($allResultData as $rd): ?>
        <tr>
            <td><?php $examData=$control->selectedExamData($rd[1]); echo $examData[1]; ?></td>
            <td><?php $classData=$control->selectedClassData($rd[2]); echo $classData[1]; ?></td>
            <td><a href="schooladmin/<?php echo $rd[3]; ?>" target="_blank">Result Sheet</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>