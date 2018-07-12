<?php
error_reporting(0);
class Model {
   function DBConnect()
   {
       $conn=mysql_connect("localhost","root","");
       mysql_select_db("drhs1925_asbict_school",$conn);
       mysql_query("SET NAMES 'utf8'", $conn);
       mysql_query("SET CHARACTER SET utf8",$conn);
       mysql_query("SET SESSION collation_connection ='utf8_general_ci'",$conn);
       mb_internal_encoding("UTF-8");
       return $conn;
   }
   function findUserData($userInfo)
   {
       $this->DBConnect();
       $findUserDataSql=mysql_query("select * from tbl_user_info WHERE user_name='$userInfo[0]' and user_pass='$userInfo[1]'");
       $userData=mysql_fetch_array($findUserDataSql);
       return $userData;
   }
   function saveClassInformation($classInfo)
   {
       $this->DBConnect();
       $saveClassInfoSql=mysql_query("insert into tbl_class_info (class_name,insert_by,insert_date) VALUES ('$classInfo[0]','$classInfo[1]','$classInfo[2]')");
       return $saveClassInfoSql;
   }
   function allClassList()
   {
       $this->DBConnect();
       $findClassDataSql=mysql_query("select * from tbl_class_info");
       while($classData=mysql_fetch_array($findClassDataSql))
       {
           $class[]=$classData;
       }
       return $class;
   }
   function selectClassName($clID)
   {
       $this->DBConnect();
       $findClassNameSql=mysql_query("select * from tbl_class_info WHERE id='$clID'");
       $classData=mysql_fetch_array($findClassNameSql);
       return $classData;
   }
   public function editClassInformation($classData)
   {
       $this->DBConnect();
       $updateClassInformationSql=mysql_query("update tbl_class_info set class_name='$classData[1]',insert_by='$classData[2]' where id='$classData[0]'");
       return $updateClassInformationSql;
   }
   function saveStudentInformation($stdInfo)
   {
       $this->DBConnect();
       $saveStudentInfoSql=mysql_query("insert into tbl_student_info (student_id,student_name,father_name,mother_name,guardian_name,class_id,gender,nationality,religion,address,mobile_no,email,dob,image_path,insert_by,insert_date) VALUES ('$stdInfo[0]','$stdInfo[1]','$stdInfo[2]','$stdInfo[3]','$stdInfo[4]','$stdInfo[5]','$stdInfo[6]','$stdInfo[7]','$stdInfo[8]','$stdInfo[9]','$stdInfo[10]','$stdInfo[11]','$stdInfo[12]','$stdInfo[13]','$stdInfo[14]','$stdInfo[15]')");
       return $saveStudentInfoSql;
   }
   function allStudentList()
   {
       $this->DBConnect();
       $findStudentListSql=mysql_query("select * from tbl_student_info");
       while($studentDataList=mysql_fetch_array($findStudentListSql))
       {
           $students[]=$studentDataList;
       }
       return $students;
   }
   function editStudentImageInformation($studentData)
   {
       $this->DBConnect();
       $editStudentDataSql=mysql_query("update tbl_student_info set student_id='$studentData[1]',student_name='$studentData[2]',father_name='$studentData[3]',mother_name='$studentData[4]',guardian_name='$studentData[5]',class_id='$studentData[6]',gender='$studentData[7]',nationality='$studentData[8]',religion='$studentData[9]',address='$studentData[10]',mobile_no='$studentData[11]',dob='$studentData[13]',image_path='$studentData[14]' WHERE id='$studentData[0]'");
       return $editStudentDataSql;
   }
    function editStudentInformation($studentData)
   {
       $this->DBConnect();
       $editStudentDataSql=mysql_query("update tbl_student_info set student_id='$studentData[1]',student_name='$studentData[2]',father_name='$studentData[3]',mother_name='$studentData[4]',guardian_name='$studentData[5]',class_id='$studentData[6]',gender='$studentData[7]',nationality='$studentData[8]',religion='$studentData[9]',address='$studentData[10]',mobile_no='$studentData[11]',dob='$studentData[13]' WHERE id='$studentData[0]'");
       return $editStudentDataSql;
   }
   function editNoticeInformation($nData)
   {
       $this->DBConnect();
       $editNoticeDataSql=mysql_query("update tbl_notice_info set notice_title='$nData[1]',notice_details='$nData[2]' WHERE id='$nData[0]'");
       return $editNoticeDataSql;
   }
   function editNewsInformation($nData)
   {
       $this->DBConnect();
       $editNoticeDataSql=mysql_query("update tbl_news_info set news_title='$nData[1]',news_details='$nData[2]' WHERE id='$nData[0]'");
       return $editNoticeDataSql;
   }
   function editEventInformation($eData)
   {
       $this->DBConnect();
       $editNoticeDataSql=mysql_query("update  tbl_events_info set events_title='$eData[1]',events_details='$eData[2]' WHERE id='$eData[0]'");
       return $editNoticeDataSql;
   }
   function editVacancyInformation($vData)
   {
       $this->DBConnect();
       $editVacancyDataSql=mysql_query("update  tbl_vacancy_info set  job_title='$vData[1]',job_details='$vData[2]' WHERE id='$vData[0]'");
       return $editVacancyDataSql;
   }
   function saveCourseInformation($courseData)
   {
       $this->DBConnect();
       $saveCourseDataSql=mysql_query("insert into tbl_course_info (course_name,insert_by,insert_date) VALUES ('$courseData[0]','$courseData[1]','$courseData[2]')");
       return $saveCourseDataSql;
   }
   function allCourseData()
   {
       $this->DBConnect();
       $allCourseDataSql=mysql_query("select * from tbl_course_info");
       while($courseData=mysql_fetch_array($allCourseDataSql))
       {
           $course[]=$courseData;
       }
       return $course;
   }
   function saveCategoryInformation($catData)
   {
       $this->DBConnect();
       $saveEmployeeCategorySql=mysql_query("insert into tbl_employee_category_info (employee_category,insert_by,insert_date) VALUES ('$catData[0]','$catData[1]','$catData[2]')");
       return $saveEmployeeCategorySql;
   }
   function employeeCategoryList()
   {
       $this->DBConnect();
       $findEmployeeCategoryDataSql=mysql_query("select * from tbl_employee_category_info");
       while($employeeCatData=mysql_fetch_array($findEmployeeCategoryDataSql))
       {
           $catData[]=$employeeCatData;
       }
       return $catData;
   }
   public function saveDesignationInformation($desiData)
   {
       $this->DBConnect();
       $saveDesignationDataSql=mysql_query("insert into tbl_designation_info (designation_name,insert_by,insert_date) VALUES ('$desiData[0]','$desiData[1]','$desiData[2]')");
       return $saveDesignationDataSql;
   }
   public function allDesignationData()
   {
       $this->DBConnect();
       $findAllDesignationDataSql=mysql_query("select * from tbl_designation_info");
       while($designationData=mysql_fetch_array($findAllDesignationDataSql))
       {
           $designation[]=$designationData;
       }
       return $designation;
   }
   public function saveEmployeeInformation($employeeData)
   {
       $this->DBConnect();
       $saveEmployeeInformationSql=mysql_query("insert into tbl_employee_info (employee_id,employee_name,father_name,mother_name,dob,address,mobile_no,email,gender,religion,nationality,employee_type,designation,image_path,insert_by,insert_date) VALUES ('$employeeData[0]','$employeeData[1]','$employeeData[2]','$employeeData[3]','$employeeData[4]','$employeeData[5]','$employeeData[6]','$employeeData[7]','$employeeData[8]','$employeeData[9]','$employeeData[10]','$employeeData[11]','$employeeData[12]','$employeeData[13]','$employeeData[14]','$employeeData[15]')");
       return $saveEmployeeInformationSql;
   }
   public function saveEmployeeAttendance($attendanceData)
   {
       $this->DBConnect();
       $saveEmployeeAttendanceSql=mysql_query("insert into tbl_employee_attendance_info (employee_id,attend_time,insert_by,insert_date) VALUES ('$attendanceData[0]','$attendanceData[1]','$attendanceData[2]','$attendanceData[3]')");
       return $saveEmployeeAttendanceSql;
   }
   public function employeeAttendanceTime()
   {
       $this->DBConnect();
       $findEmployeeAttendanceSql=mysql_query("select * from tbl_employee_attendance_info order by id desc");
       while($attendanceData=mysql_fetch_array($findEmployeeAttendanceSql))
       {
           $attendance[]=$attendanceData;
       }
       return $attendance;
   }
   public function allEmployeeInformation()
   {
       $this->DBConnect();
       $allEmployeeDataSql=mysql_query("select * from tbl_employee_info");
       while($employeeData=mysql_fetch_array($allEmployeeDataSql))
       {
           $employee[]=$employeeData;
       }
       return $employee;
   }
   public function selectedEmployeeType($type)
   {
       $this->DBConnect();
       $selectEmployeeTypeSql=mysql_query("select * from tbl_employee_category_info WHERE id='$type'");
       $employeeData=mysql_fetch_array($selectEmployeeTypeSql);
       return $employeeData;
   }
   public function selectEmployeeDesignation($desID)
   {
       $this->DBConnect();
       $selectDesignationDataSql=mysql_query("select * from tbl_designation_info WHERE id='$desID'");
       $designationData=mysql_fetch_array($selectDesignationDataSql);
       return $designationData;
   }
   public function findByEmployeeID($empID)
   {
       $this->DBConnect();
       $findEmployeeDataByIDSql=mysql_query("select * from tbl_employee_info WHERE employee_id='$empID'");
       $employeeData=mysql_fetch_array($findEmployeeDataByIDSql);
       return $employeeData;
   }
   public function allTeacherFind()
   {
       $this->DBConnect();
       $findTeacherListSql=mysql_query("select * from tbl_employee_info WHERE employee_type='1'");
       while($teacherDataList=mysql_fetch_array($findTeacherListSql))
       {
           $teacherData[]=$teacherDataList;
       }
       return $teacherData;
   }
   public function saveAssignCourse($corData)
   {
       $this->DBConnect();
       $saveAssignCourseDataSql=mysql_query("insert into tbl_class_course_info (class_id,course_id,insert_by,insert_date) VALUES ('$corData[0]','$corData[1]','$corData[2]','$corData[3]')");
       return $saveAssignCourseDataSql;
   }
   public function saveExamInformation($examData)
   {
       $this->DBConnect();
       $saveExamInformationSql=mysql_query("insert into tbl_exam_info (exam_name,insert_by,insert_date) VALUES ('$examData[0]','$examData[1]','$examData[2]')");
       return $saveExamInformationSql;
   }
   public function allExamInformation()
   {
       $this->DBConnect();
       $allExamInformationSql=mysql_query("select * from tbl_exam_info");
       while($examInfoData=mysql_fetch_array($allExamInformationSql))
       {
           $examData[]=$examInfoData;
       }
       return $examData;
   }
   public function saveFeesHead($feesHead)
   {
       $this->DBConnect();
       $saveFeesHeadSql=mysql_query("insert into tbl_fees_head_info (head_name,insert_by,insert_date) VALUES ('$feesHead[0]','$feesHead[1]','$feesHead[2]')");
       return $saveFeesHeadSql;
   }
   public function feesHeadList()
   {
       $this->DBConnect();
       $allFeesHeadListSql=mysql_query("select * from tbl_fees_head_info");
       while($feesHeadData=mysql_fetch_array($allFeesHeadListSql))
       {
           $feesHead[]=$feesHeadData;
       }
       return $feesHead;
   }
   public function findStudentData($stdID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_student_info WHERE student_id='$stdID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
   public function findGalleryData($gID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from  tbl_gallery_image_info WHERE id='$gID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
   public function findHeadData($hID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_head_master_msg_info WHERE id='$hID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
   public function findChairmanData($cID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_chairman_msg_info WHERE id='$cID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
   public function findNoticeData($nID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_notice_info WHERE id='$nID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
    public function findNewsData($nID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_news_info WHERE id='$nID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
    public function findEventData($eID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_events_info WHERE id='$eID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
    public function findVacancyData($vID)
   {
       $this->DBConnect();
       $findStudentDataSql=mysql_query("select * from tbl_vacancy_info WHERE id='$vID'");
       $studentDataSet=mysql_fetch_array($findStudentDataSql);
       return $studentDataSet;
   }
   public function findClassCourseSelected($classID)
   {
	   $this->DBConnect();
	   $findClassDataSql=mysql_query("select * from tbl_class_course_info where class_id='$classID'");
	   while($classCourse=mysql_fetch_array($findClassDataSql))
	   {
		   $classData[]=$classCourse;
	   }
	   return $classData;
   }
   public function selectedCourseData($corID)
   {
	   $this->DBConnect();
	   $findSelectedCourseDataSql=mysql_query("select * from tbl_course_info where id='$corID'");
	   $selectedCourseData=mysql_fetch_array($findSelectedCourseDataSql);
	   return $selectedCourseData; 
   }
   public function findClassStudents($classID)
   {
	   $this->DBConnect();
	   $findClassStudentsSql=mysql_query("select * from tbl_student_info where class_id='$classID'");
	   while($studentsClassData=mysql_fetch_array($findClassStudentsSql))
	   {
		   $classStudent[]=$studentsClassData;
	   }
	   return $classStudent;
   }
   public function saveTeacherCourseData($course)
   {
	   $this->DBConnect();
	   $saveTeacherCourseDataSql=mysql_query("insert into tbl_teacher_assign_course_info (class_id,course_id,teacher_id,insert_by,insert_date) values ('$course[0]','$course[1]','$course[2]','$course[3]','$course[4]')");
	   return $saveTeacherCourseDataSql;
   }
   public function allAssignedCourses()
   {
	   $this->DBConnect();
	   $findAssignedCoursesSql=mysql_query("select * from tbl_teacher_assign_course_info");
	   while($assignCoursesData=mysql_fetch_array($findAssignedCoursesSql))
	   {
		   $courseData[]=$assignCoursesData;
	   }
	   return $courseData;
   }
   public function selectedEmployeeData($empID)
   {
	   $this->DBConnect();
	   $findEmployeeDataSql=mysql_query("select * from tbl_employee_info where id='$empID'");
	   $employeeData=mysql_fetch_array($findEmployeeDataSql);
	   return $employeeData;
   }
   public function saveRoutineData($routine)
   {
       $this->DBConnect();
       $saveRoutineDataSql=mysql_query("insert into tbl_class_routine_info (routine_name,details,file_path,insert_by,insert_date) VALUES ('$routine[0]','$routine[1]','$routine[2]','$routine[3]','$routine[4]')");
       return $saveRoutineDataSql;
   }
   public function allClassRoutineList()
   {
       $this->DBConnect();
       $findClassRoutineListSql=mysql_query("select * from tbl_class_routine_info");
       while($classRoutineData=mysql_fetch_array($findClassRoutineListSql))
       {
           $routineData[]=$classRoutineData;
       }
       return $routineData;
   }
   public function saveExamRoutineData($examData)
   {
       $this->DBConnect();
       $saveExamRoutineDataSql=mysql_query("insert into tbl_exam_routine_info (exam_name,routine_details,routine_path,insert_by,insert_date) VALUES ('$examData[0]','$examData[1]','$examData[2]','$examData[3]','$examData[4]')");
       return $saveExamRoutineDataSql;
   }
   public function allExamRoutine()
   {
       $this->DBConnect();
       $allExamRoutineDataSql=mysql_query("select * from tbl_exam_routine_info");
       while($routineData=mysql_fetch_array($allExamRoutineDataSql))
       {
           $routine[]=$routineData;
       }
       return $routine;
   }
   public function saveEducationCalendarData($eduCal)
   {
       $this->DBConnect();
       $saveEducationCalendarSql=mysql_query("insert into tbl_education_calendar_info (cal_name,cal_details,calendar_path,insert_by,insert_date) VALUES ('$eduCal[0]','$eduCal[1]','$eduCal[2]','$eduCal[3]','$eduCal[4]')");
       return $saveEducationCalendarSql;
   }
   public function allEducationCalendar()
   {
        $this->DBConnect();
        $allEducationCalendarDataSql=mysql_query("select * from tbl_education_calendar_info");
        while($calendarData=mysql_fetch_array($allEducationCalendarDataSql))
        {
            $calendar[]=$calendarData;
        }
        return $calendar;
   }
   public function saveHolidayCalendarData($holidayData)
   {
       $this->DBConnect();
       $saveEducationCalendarSql=mysql_query("insert into tbl_holiday_calendar_info (cal_name,holiday_details,calendar_path,insert_by,insert_date) VALUES ('$holidayData[0]','$holidayData[1]','$holidayData[2]','$holidayData[3]','$holidayData[4]')");
       return $saveEducationCalendarSql;
   }
   public function allHolidayCalendarList()
   {
       $this->DBConnect();
       $allHolidayCalendarDataSql=mysql_query("select * from tbl_holiday_calendar_info");
       while($calendarData=mysql_fetch_array($allHolidayCalendarDataSql))
       {
           $calendar[]=$calendarData;
       }
       return $calendar;
   }
   public function saveNoticeData($notice)
   {
       $this->DBConnect();
       $saveNoticeDataSql=mysql_query("insert into tbl_notice_info (notice_title,notice_details,insert_by,insert_date) VALUES ('$notice[0]','$notice[1]','$notice[2]','$notice[3]')");
       return $saveNoticeDataSql;
   }
   public function allNoticeInfo()
   {
       $this->DBConnect();
       $findNoticeInfoSql=mysql_query("select * from tbl_notice_info");
       while($allNoticeData=mysql_fetch_array($findNoticeInfoSql))
       {
           $notice[]=$allNoticeData;
       }
       return $notice;
   }
   public function saveNewsData($newsData)
   {
       $this->DBConnect();
       $saveNewsDataSql=mysql_query("insert into tbl_news_info (news_title,news_details,insert_by,insert_date) VALUES ('$newsData[0]','$newsData[1]','$newsData[2]','$newsData[3]')");
       return $saveNewsDataSql;
   }
   public function allNewsInfo()
   {
       $this->DBConnect();
       $findAllNewsInfoSql=mysql_query("select * from tbl_news_info");
       while($newsData=mysql_fetch_array($findAllNewsInfoSql))
       {
           $news[]=$newsData;
       }
       return $news;
   }
   public function allBannersInfo()
   {
       $this->DBConnect();
       $findAllBannerInfoSql=mysql_query("select * from tbl_slider");
       while($bannerData=mysql_fetch_array($findAllBannerInfoSql))
       {
           $banners[]=$bannerData;
       }
       return $banners;
   }

   public function saveEventsData($events)
   {
       $this->DBConnect();
       $saveEventsDataSql=mysql_query("insert into tbl_events_info (events_title,events_details,insert_by,insert_date) VALUES ('$events[0]','$events[1]','$events[2]','$events[3]')");
       return $saveEventsDataSql;
   }
   public function allEventsInfo()
   {
       $this->DBConnect();
       $allEventsDataSql=mysql_query("select * from tbl_events_info ORDER by id desc");
       while($allEvents=mysql_fetch_array($allEventsDataSql))
       {
           $events[]=$allEvents;
       }
       return $events;
   }
   public function saveImageData($imageData)
   {
       $this->DBConnect();
       $saveImageDataSql=mysql_query("insert into tbl_gallery_image_info (image_name,image_path,insert_by,insert_date) VALUES ('$imageData[0]','$imageData[1]','$imageData[2]','$imageData[3]')");
       return $saveImageDataSql;
   }

   public function saveBannerData($bannerData)
   {
       $this->DBConnect();
       $saveBannerDataSql=mysql_query("insert into tbl_slider (slider_name,slider_img,insert_by,insert_date) VALUES ('$bannerData[0]','$bannerData[1]','$bannerData[2]','$bannerData[3]')");
       return $saveBannerDataSql;
   }
   public function allImageData()
   {
       $this->DBConnect();
       $allImageDataSql=mysql_query("select * from tbl_gallery_image_info");
       while($imageData=mysql_fetch_array($allImageDataSql))
       {
           $image[]=$imageData;
       }
       return $image;
   }
   public function allBannerData()
   {
       $this->DBConnect();
       $allBannerDataSql=mysql_query("select * from tbl_slider");
       while($imageData=mysql_fetch_array($allBannerDataSql))
       {
           $image[]=$imageData;
       }
       return $image;
   }
   public function saveVacancyData($vacancyData)
   {
       $this->DBConnect();
       $saveVacancyDataSql=mysql_query("insert into tbl_vacancy_info (job_title,job_details,file_path,insert_by,insert_date) VALUES ('$vacancyData[0]','$vacancyData[1]','$vacancyData[2]','$vacancyData[3]','$vacancyData[4]')");
       return $saveVacancyDataSql;
   }
   public function allVacancyList()
   {
       $this->DBConnect();
       $allVacancyDataSql=mysql_query("select * from tbl_vacancy_info");
       while($allVacancyData=mysql_fetch_array($allVacancyDataSql))
       {
           $vacancyData[]=$allVacancyData;
       }
       return $vacancyData;
   }
   public function saveTenderData($tenderData)
   {
       $this->DBConnect();
       $saveTenderDataSql=mysql_query("insert into tbl_tender_info (tender_title,tender_details,file_path,insert_by,insert_date) VALUES ('$tenderData[0]','$tenderData[1]','$tenderData[2]','$tenderData[3]','$tenderData[4]')");
       return $saveTenderDataSql;
   }
   public function allTenderList()
   {
       $this->DBConnect();
       $findTenderDataSql=mysql_query("select * from tbl_tender_info order by id desc");
       while($tenderDataFind=mysql_fetch_array($findTenderDataSql))
       {
           $tender[]=$tenderDataFind;
       }
       return $tender;
   }
   public function saveResultSheetData($result)
   {
       $this->DBConnect();
       $saveResultSheetDataSql=mysql_query("insert into tbl_result_sheet_info (exam_id,class_id,file_path,insert_by,insert_date) VALUES ('$result[0]','$result[1]','$result[2]','$result[3]','$result[4]')");
       return $saveResultSheetDataSql;
   }
   public function allResultData()
   {
       $this->DBConnect();
       $allResultDataSql=mysql_query("select * from tbl_result_sheet_info");
       while($resultSheetData=mysql_fetch_array($allResultDataSql))
       {
           $sheetData[]=$resultSheetData;
       }
       return $sheetData;
   }
   public function savePublicResultData($resultData)
   {
       $this->DBConnect();
       $savePublicResultDataSql=mysql_query("insert into tbl_public_result_info (exam_name,exam_year,upload_path,insert_by,insert_date) VALUES ('$resultData[0]','$resultData[1]','$resultData[2]','$resultData[3]','$resultData[4]')");
       return $savePublicResultDataSql;
   }
   public function allPublicExamResult()
   {
       $this->DBConnect();
       $findPublicExamResultDataSql=mysql_query("select * from tbl_public_result_info order by id desc");
       while($publicResultData=mysql_fetch_array($findPublicExamResultDataSql))
       {
           $resultData[]=$publicResultData;
       }
       return $resultData;
   }
   public function selectedExamData($examID)
   {
       $this->DBConnect();
       $findSelectedExamIDSql=mysql_query("select * from tbl_exam_info WHERE id='$examID'");
       $examData=mysql_fetch_array($findSelectedExamIDSql);
       return $examData;
   }
   public function assignedCourseList()
   {
       $this->DBConnect();
       $findAssignedCourseListSql=mysql_query("select * from tbl_class_course_info");
       while($classCourse=mysql_fetch_array($findAssignedCourseListSql))
       {
           $courseData[]=$classCourse;
       }
       return $courseData;
   }
   public function saveFormsData($formsData)
   {
       $this->DBConnect();
       $saveFormsDataSql=mysql_query("insert into tbl_forms_info (form_name,form_path,insert_by,insert_date) VALUES ('$formsData[0]','$formsData[1]','$formsData[2]','$formsData[3]')");
       return $saveFormsDataSql;
   }
   public function allFormsData()
   {
       $this->DBConnect();
       $findFormsDataSql=mysql_query("select * from tbl_forms_info order by id desc");
       while($formsDataFind=mysql_fetch_array($findFormsDataSql))
       {
           $formsData[]=$formsDataFind;
       }
       return $formsData;
   }
   public function saveMemberInformation($memData)
   {
       $this->DBConnect();
       $saveMemberInformationSql=mysql_query("insert into tbl_member_info (member_name,member_designation,member_image,insert_by,insert_date) VALUES ('$memData[0]','$memData[1]','$memData[2]','$memData[3]','$memData[4]')");
       return $saveMemberInformationSql;
   }
   public function allMemberInfo()
   {
       $this->DBConnect();
       $findMemberDataSql=mysql_query("select * from tbl_member_info");
       while($memberData=mysql_fetch_array($findMemberDataSql))
       {
           $member[]=$memberData;
       }
       return $member;
   }
   public function specificMemberInfo($memID)
   {
       $this->DBConnect();
       $findMemberDataSql=mysql_query("select * from tbl_member_info WHERE id='$memID'");
       $memberData=mysql_fetch_array($findMemberDataSql);
       return $memberData;
   }
   public function updateGalleryImageInfo($memData)
   {
       $this->DBConnect();
       $updateMemberInfoSql=mysql_query("update  tbl_gallery_image_info set image_name='$memData[1]', image_path='$memData[2]'  WHERE id='$memData[0]'");
       return $updateMemberInfoSql;
   }

   public function updateGalleryInfo($memData)
   {
       $this->DBConnect();
      $updateMemberInfoSql=mysql_query("update  tbl_gallery_image_info set image_name='$memData[1]'  WHERE id='$memData[0]'");
       return $updateMemberInfoSql;
   }
   public function updateMemberImageInfo($memData)
   {
       $this->DBConnect();
       $updateMemberInfoSql=mysql_query("update tbl_member_info set member_name='$memData[1]', member_designation='$memData[2]',member_image='$memData[3]'  WHERE id='$memData[0]'");
       return $updateMemberInfoSql;
   }
   public function updateMemberInfo($memData)
   {
       $this->DBConnect();
       $updateMemberInfoSql=mysql_query("update tbl_member_info set member_name='$memData[1]', member_designation='$memData[2]' WHERE id='$memData[0]'");
       return $updateMemberInfoSql;
   }
    public function updateHeadImageInfo($headData)
   {
       $this->DBConnect();
       $updateHeadInfoSql=mysql_query("update tbl_head_master_msg_info set name='$headData[1]', education='$headData[2]',image='$headData[3]',message='$headData[4]'  WHERE id='$headData[0]'");
       return $updateHeadInfoSql;
   }

   public function updateHeadInfo($headData)
   {
       $this->DBConnect();
       $updateHeadInfoSql=mysql_query("update tbl_head_master_msg_info set name='$headData[1]', education='$headData[2]',message='$headData[3]'  WHERE id='$headData[0]'");
       return $updateHeadInfoSql;
   }
   public function updateChairmanImageInfo($headData)
   {
       $this->DBConnect();
       $updateHeadInfoSql=mysql_query("update tbl_chairman_msg_info set name='$headData[1]', image='$headData[2]',message='$headData[3]'  WHERE id='$headData[0]'");
       return $updateHeadInfoSql;
   }
   public function updateChairmanInfo($headData)
   {
       $this->DBConnect();
       $updateHeadInfoSql=mysql_query("update tbl_chairman_msg_info set name='$headData[1]',message='$headData[2]'  WHERE id='$headData[0]'");
       return $updateHeadInfoSql;
   }
   public function saveContentInformation($contentData)
   {
       $this->DBConnect();
       $saveContentInformationSql=mysql_query("insert into tbl_content_info (content_name,content_path,insert_by,insert_date) VALUES ('$contentData[0]','$contentData[1]','$contentData[2]','$contentData[3]')");
       return $saveContentInformationSql;
   }
   public function allContentList()
   {
       $this->DBConnect();
       $findContentDataSql=mysql_query("select * from tbl_content_info order by id desc");
       while($contentDataSet=mysql_fetch_array($findContentDataSql))
       {
           $contentData[]=$contentDataSet;
       }
       return $contentData;
   }
   public function saveLinkInformation($linkData)
   {
       $this->DBConnect();
       $saveLinkInformationSql=mysql_query("insert into tbl_link_info (link_name,link_url,insert_by,insert_date) VALUES ('$linkData[0]','$linkData[1]','$linkData[2]','$linkData[3]')");
       return $saveLinkInformationSql;
   }
   public function allLinkList()
   {
       $this->DBConnect();
       $findLinkDataSql=mysql_query("select * from tbl_link_info order by id desc");
       while($linkDataSet=mysql_fetch_array($findLinkDataSql))
       {
           $linkData[]=$linkDataSet;
       }
       return $linkData;
   }
   public function saveHeadTeacherInformation($teacherData)
   {
       $this->DBConnect();
       $saveTeacherInformationSql=mysql_query("insert into tbl_head_teacher_info (teacher_name,teacher_period,teachers_maxim,designaton,teacher_image,insert_by,insert_date) VALUES ('$teacherData[0]','$teacherData[1]','$teacherData[2]','$teacherData[3]','$teacherData[4]','$teacherData[5]','$teacherData[6]')");
       return $saveTeacherInformationSql;
   }
    public function saveHeadMasterData($teacherData)
   {
       $this->DBConnect();
       $saveTeacherInformationSql=mysql_query("insert into tbl_head_master_msg_info (name,education,image,message,insert_by,insert_date) VALUES ('$teacherData[0]','$teacherData[1]','$teacherData[2]','$teacherData[3]','$teacherData[4]','$teacherData[5]')");
       return $saveTeacherInformationSql;
   }

   public function saveChairmanMsg($teacherData)
   {
       $this->DBConnect();
       $saveChairmanMsgSql=mysql_query("insert into tbl_chairman_msg_info (name,image,message,insert_by,insert_date) VALUES ('$teacherData[0]','$teacherData[1]','$teacherData[2]','$teacherData[3]','$teacherData[4]')");
       return $saveChairmanMsgSql;
   }
   public function allHeadTeacherList()
   {
       $this->DBConnect();
       $findHeadTeacherInfoSql=mysql_query("select * from tbl_head_teacher_info");
       while($teacherDataSet=mysql_fetch_array($findHeadTeacherInfoSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }

   public function HeadTeacherMsgList()
   {
       $this->DBConnect();
       $findHeadTeacherInfoSql=mysql_query("select * from tbl_head_master_msg_info");
       while($teacherDataSet=mysql_fetch_array($findHeadTeacherInfoSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }
   public function ChairmanMsgList()
   {
       $this->DBConnect();
       $findHeadTeacherInfoSql=mysql_query("select * from tbl_chairman_msg_info ");
       while($teacherDataSet=mysql_fetch_array($findHeadTeacherInfoSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }
   public function saveBrightStudentInformation($studentInfo)
   {
       $this->DBConnect();
       $saveBrightStudentInformationSql=mysql_query("insert into tbl_bright_student_info (student_name,student_details,student_image,insert_by,insert_date) VALUES ('$studentInfo[0]','$studentInfo[1]','$studentInfo[2]','$studentInfo[3]','$studentInfo[4]')");
       return $saveBrightStudentInformationSql;
   }
   public function findBrightStudentList()
   {
       $this->DBConnect();
       $findBrightStudentListSql=mysql_query("select * from tbl_bright_student_info ORDER by id desc");
       while($brightStudentData=mysql_fetch_array($findBrightStudentListSql))
       {
           $studentData[]=$brightStudentData;
       }
       return $studentData;
   }
   public function specificEmployeeInformation($empData)
   {
       $this->DBConnect();
       $findSpecificEmployeeInformationSql=mysql_query("select * from tbl_employee_info WHERE id='$empData'");
       $employeeData=mysql_fetch_array($findSpecificEmployeeInformationSql);
       return $employeeData;
   }
   public function editEmployeeImageInformation($emp)
   {
       $this->DBConnect();
       $editEmployeeDataSql=mysql_query("update tbl_employee_info set employee_id='$emp[1]',employee_name='$emp[2]',father_name='$emp[3]',mother_name='$emp[4]',dob='$emp[5]',address='$emp[6]',mobile_no='$emp[7]',email='$emp[8]',gender='$emp[9]',religion='$emp[10]',nationality='$emp[11]',employee_type='$emp[12]',designation='$emp[13]',image_path='$emp[14]',insert_by='$emp[15]',insert_date='$emp[16]' WHERE id='$emp[0]'");
       return $editEmployeeDataSql;
   }
   public function editEmployeeInformation($emp)
   {
       $this->DBConnect();
       $editEmployeeDataSql=mysql_query("update tbl_employee_info set employee_id='$emp[1]',employee_name='$emp[2]',father_name='$emp[3]',mother_name='$emp[4]',dob='$emp[5]',address='$emp[6]',mobile_no='$emp[7]',email='$emp[8]',gender='$emp[9]',religion='$emp[10]',nationality='$emp[11]',employee_type='$emp[12]',designation='$emp[13]',insert_by='$emp[15]',insert_date='$emp[16]' WHERE id='$emp[0]'");
       return $editEmployeeDataSql;
   }
   public function deleteInformation($deleteData)
   {
       $this->DBConnect();
       $deleteInformationSql=mysql_query("delete from {$deleteData}");
       return $deleteInformationSql;
   }
   public function saveStudentArchive($sData)
   {
       $this->DBConnect();
       $saveStudentDataSql=mysql_query("insert into tbl_student_archive_info (student_id,student_name,father_name,mother_name,guardian_name,class_id,gender,nationality,religion,address,mobile_no,email,dob,image_path,insert_by,insert_date) values ('$sData[0]','$sData[1]','$sData[2]','$sData[3]','$sData[4]','$sData[5]','$sData[6]','$sData[7]','$sData[8]','$sData[9]','$sData[10]','$sData[11]','$sData[12]','$sData[13]','$sData[14]','$sData[15]')");
       return $saveStudentDataSql;
   }
   public function studentPromotion($pData)
   {
       $this->DBConnect();
       echo "update tbl_student_info set class_id='$pData[1]' where id='$pData[0]'";
       $studentPromoteDataSql=mysql_query("update tbl_student_info set class_id='$pData[1]' where id='$pData[0]'");
       return $studentPromoteDataSql;
   }
   public function allArchiveStudentList()
   {
       $this->DBConnect();
       $findAllArchiveStudentDataSql=mysql_query("select * from tbl_student_archive_info order by id desc");
       while($allArchiveStudent=mysql_fetch_array($findAllArchiveStudentDataSql))
       {
           $aStudent[]=$allArchiveStudent;
       }
       return $aStudent;
   }
   public function totalStudent()
   {
       $this->DBConnect();
       $findTotalStudentDataSql=mysql_query("select count(id) from tbl_student_info");
       $studentData=mysql_fetch_array($findTotalStudentDataSql);
       return $studentData;
   }
   public function totalEmployee()
   {
       $this->DBConnect();
       $findTotalEmployeeSql=mysql_query("select count(id) from tbl_employee_info");
       $employeeInfo=mysql_fetch_array($findTotalEmployeeSql);
       return $employeeInfo;
   }
   public function totalClass()
   {
       $this->DBConnect();
       $findTotalClassSql=mysql_query("select count(id) from tbl_class_info");
       $classData=mysql_fetch_array($findTotalClassSql);
       return $classData;
   }
   public function totalExam()
   {
       $this->DBConnect();
       $findTotalExamDataSql=mysql_query("select count(id) from tbl_exam_info");
       $examData=mysql_fetch_array($findTotalExamDataSql);
       return $examData;
   }
}