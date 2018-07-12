<?php 
  include_once "../controller/Controller.php";
  include_once "../model/Model.php";
   $control=new Controller();
   $findClassCourse=$control->findClassCourseSelected($_GET['id']);
 ?>
               <select name="classSubject" id="courseID" style="width: 35%;">
                    <option>Select</option>
                    <?php foreach($findClassCourse as $fcc):
					   $courseSelectedData=$control->selectedCourseData($fcc[2]);
					 ?>
                        <option value="<?php echo $fcc[2]; ?>"><?php echo $courseSelectedData[1]; ?></option>
                    <?php endforeach; ?>
                </select>