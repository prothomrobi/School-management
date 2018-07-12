<?php 
  include_once "../controller/Controller.php";
  include_once "../model/Model.php";
  $control=new Controller();
  $classStudents=$control->findClassStudents($_GET['id']);
  
?>
 <select name="studentName" id="stdID" style="width:35%">
   <option value="">Select</option>
   <?php foreach($classStudents as $cs): ?>
     <option value="<?php echo $cs[0]; ?>"><?php echo $cs[1];  ?></option>
   <?php endforeach; ?>
 </select>