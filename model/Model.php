<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 11:41 PM
 */
error_reporting(1);
class Model {
    function DBCon()
    {
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("drhs1925_asbict_school",$conn);
        mysql_query("SET NAMES 'utf8'", $conn);
        mysql_query("SET CHARACTER SET utf8",$conn);
        mysql_query("SET SESSION collation_connection ='utf8_general_ci'",$conn);
        mb_internal_encoding("UTF-8");
        return $conn;
    }

     public function enTbn($number) {
        $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        return str_replace(self::$en, self::$bn, $number);
    }
     
     function selectClassName($clID)
   {
       $this->DBConnect();
       $findClassNameSql=mysql_query("select * from tbl_class_info WHERE id='$clID'");
       $classData=mysql_fetch_array($findClassNameSql);
       return $classData;
   }

    function allStudentList()
    {
        $this->DBCon();
        $findAllStudentDataSql=mysql_query("select * from tbl_student_info order by id desc limit 0,12");
        while($studentData=mysql_fetch_array($findAllStudentDataSql))
        {
            $student[]=$studentData;
        }
        return $student;
    }
    function allGalleryPhoto()
    {
        $this->DBCon();
        $allGalleryImagesSql=mysql_query("select * from tbl_gallery_image_info order by id desc");
        while($imageData=mysql_fetch_array($allGalleryImagesSql))
        {
            $images[]=$imageData;
        }
        return $images;
    }
    function allNewsData()
    {
        $this->DBCon();
        $allNewsDataSql=mysql_query("select * from tbl_news_info order by id desc");
        while($newsData=mysql_fetch_array($allNewsDataSql))
        {
            $news[]=$newsData;
        }
        return $news;
    }
    function allBannerData()
    {
        $this->DBCon();
        $allBannersDataSql=mysql_query("select * from tbl_slider order by id asc");
        while($bannersData=mysql_fetch_array($allBannersDataSql))
        {
            $banners[]=$bannersData;
        }
        return $banners;
    }
    function selectedNewsData($nID)
    {
        $this->DBCon();
        $findNewsDataSql=mysql_query("select * from tbl_news_info WHERE id='$nID'");
        $newsDataSet=mysql_fetch_array($findNewsDataSql);
        return $newsDataSet;
    }
    function headerNewsData()
    {
        $this->DBCon();
        $findHeaderNewsDataSql=mysql_query("select * from tbl_news_info ORDER by id desc limit 0,10");
        while($headerNewsData=mysql_fetch_array($findHeaderNewsDataSql))
        {
            $headerNews[]=$headerNewsData;
        }
        return $headerNews;
    }
    function allTeacherList()
    {
        $this->DBCon();
        $allTeacherDataSql=mysql_query("select * from tbl_employee_info WHERE employee_type=1");
        while($employeeData=mysql_fetch_array($allTeacherDataSql))
        {
            $employee[]=$employeeData;
        }
        return $employee;
    }
    public function allHeadTeacherList()
   {
       $this->DBCon();
       $allHeadTeacherListSql=mysql_query("select * from tbl_head_teacher_info ORDER BY id DESC LIMIT 1");
       while($teacherDataSet=mysql_fetch_array($allHeadTeacherListSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }

   public function HeadTeacherMsgList()
   {
      $this->DBCon();
       $findHeadTeacherInfoSql=mysql_query("select * from tbl_head_master_msg_info ORDER BY id DESC LIMIT 1");
       while($teacherDataSet=mysql_fetch_array($findHeadTeacherInfoSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }
   public function ChairmanMsgList()
   {
       $this->DBCon();
       $findHeadTeacherInfoSql=mysql_query("select * from tbl_chairman_msg_info ORDER BY id DESC LIMIT 1");
       while($teacherDataSet=mysql_fetch_array($findHeadTeacherInfoSql))
       {
           $teacherData[]=$teacherDataSet;
       }
       return $teacherData;
   }
    function selectedTeacherDesignation($desID)
    {
        $this->DBCon();
        $findSelectedTeacherDesignationSql=mysql_query("select * from tbl_designation_info WHERE id='$desID'");
        $designationData=mysql_fetch_array($findSelectedTeacherDesignationSql);
        return $designationData;
    }
    function findOtherEmployee()
    {
        $this->DBCon();
        $allTeacherDataSql=mysql_query("select * from tbl_employee_info WHERE employee_type!=1");
        while($employeeData=mysql_fetch_array($allTeacherDataSql))
        {
            $employee[]=$employeeData;
        }
        return $employee;
    }
    function selectedEmployeeCategory($empType)
    {
        $this->DBCon();
        $findEmployeeTypeSql=mysql_query("select * from tbl_employee_category_info WHERE id='$empType'");
        $employeeCategory=mysql_fetch_array($findEmployeeTypeSql);
        return $employeeCategory;
    }
    function selectedClassData($id)
    {
        $this->DBCon();
        $classDataFindSql=mysql_query("select * from tbl_class_info WHERE id='$id'");
        $classData=mysql_fetch_array($classDataFindSql);
        return $classData;
    }
    function allResultData()
    {
        $this->DBCon();
        $allResultData=mysql_query("select * from tbl_result_sheet_info ORDER  by id desc");
        while($resultDataSet=mysql_fetch_array($allResultData))
        {
            $resultData[]=$resultDataSet;
        }
        return $resultData;
    }
    function selectedExamData($examID)
    {
        $this->DBCon();
        $findExamDataSql=mysql_query("select * from tbl_exam_info WHERE id='$examID'");
        $examData=mysql_fetch_array($findExamDataSql);
        return $examData;
    }
    function allNoticeData()
    {
        $this->DBCon();
        $allNoticeDataSql=mysql_query("select * from tbl_notice_info order by id desc");
        while($allNoticeData=mysql_fetch_array($allNoticeDataSql))
        {
            $notice[]=$allNoticeData;
        }
        return $notice;
    }
    function selectedNoticeData($nID)
    {
        $this->DBCon();
        $findSelectedNoticeDataSql=mysql_query("select * from tbl_notice_info WHERE id='$nID'");
        $noticeDataSet=mysql_fetch_array($findSelectedNoticeDataSql);
        return $noticeDataSet;
    }
    function headerNoticeData()
    {
        $this->DBCon();
        $findHeaderNoticeDataSql=mysql_query("select * from tbl_notice_info ORDER by id desc limit 0,10");
        while($headerNoticeData=mysql_fetch_array($findHeaderNoticeDataSql))
        {
            $headerNotice[]=$headerNoticeData;
        }
        return $headerNotice;
    }
    function allAcademicCalendar()
    {
        $this->DBCon();
        $allAcademicCalendarSql=mysql_query("select * from tbl_education_calendar_info order by id desc");
        while($academicCalendar=mysql_fetch_array($allAcademicCalendarSql))
        {
            $calendarData[]=$academicCalendar;
        }
        return $calendarData;
    }
    function allClassList()
    {

        $this->DBCon();
        $findClassListSql=mysql_query("select * from tbl_class_info ");
        while($classData=mysql_fetch_array($findClassListSql))
        {
            $clData[]=$classData;
        }
        return $clData;
    }

    function maleStudent($id)
    {
        
        $this->DBCon();
        $findAllStudentDataSql=mysql_query("select count(id) n,sum( case when gender = 'Male'
                 then 1 else 0 end ) as male, sum( case when gender = 'Female' then 1 else 0 end )    as female  from tbl_student_info where class_id='$id'");
        while($studentData=mysql_fetch_row($findAllStudentDataSql))
        {
            $student[]=$studentData;
        }

        return $student;        
    }

     public function totalStudent()
   {
       $this->DBCon();
       $findTotalStudentDataSql=mysql_query("select count(id) n,sum( case when gender = 'Male'
                 then 1 else 0 end ) as male, sum( case when gender = 'Female' then 1 else 0 end )    as female  from tbl_student_info");
       $studentData=mysql_fetch_array($findTotalStudentDataSql);
       return $studentData;
   }
    function allClassStudentList($cl)
    {

        $this->DBCon();
        $findAllStudentDataSql=mysql_query("select * from tbl_student_info where class_id='$cl'");
        while($studentData=mysql_fetch_array($findAllStudentDataSql))
        {
            $student[]=$studentData;
        }
        return $student;
    }
    function allClassStudent($cl)
    {

        $this->DBCon();
        $findAllStudentDataSql=mysql_query("select count(id) n,sum( case when gender = 'Male'
                 then 1 else 0 end ) as male, sum( case when gender = 'Female' then 1 else 0 end )    as female  from tbl_student_info where class_id=50");
        while($studentData=mysql_fetch_array($findAllStudentDataSql))
        {
            $student[]=$studentData;
        }
        return $student;
    }
    function allClassWiseStudent($cl)
    {
        $this->DBCon();
        $findAllStudentDataSql=mysql_query("select count(tbl_student_info.id) n, from tbl_student_info,tbl_class_info where tbl_student_info.class_id=tbl_class_info.id");
        $studentData=mysql_fetch_assoc($findAllStudentDataSql);
        return $studentData;
    }
    
    
    function allClassRoutineList()
    {
        $this->DBCon();
        $findClassRoutineListSql=mysql_query("select * from tbl_class_routine_info ORDER  by id desc");
        while($classRoutineData=mysql_fetch_array($findClassRoutineListSql))
        {
            $classRoutine[]=$classRoutineData;
        }
        return $classRoutine;
    }
    function allGoverningBodyMemberData()
    {
        $this->DBCon();
        $governingBodyMemberDataSql=mysql_query("select * from tbl_member_info");
        while($memberDataSet=mysql_fetch_array($governingBodyMemberDataSql))
        {
            $governingData[]=$memberDataSet;
        }
        return $governingData;
    }
    function allHolidayCalendar()
    {
        $this->DBCon();
        $findHolidayCalendarDataSql=mysql_query("select * from tbl_holiday_calendar_info ORDER by id desc");
        while($holidayCalendarData=mysql_fetch_array($findHolidayCalendarDataSql))
        {
            $calendarData[]=$holidayCalendarData;
        }
        return $calendarData;
    }
    function allExHeadTeacherData()
    {
        $this->DBCon();
        $findExHeadTeacherDataSql=mysql_query("select * from tbl_head_teacher_info order by id desc");
        while($exHeadTeacherData=mysql_fetch_array($findExHeadTeacherDataSql))
        {
            $exHeadTeacher[]=$exHeadTeacherData;
        }
        return $exHeadTeacher;
    }
    function allSchoolResult()
    {
        $this->DBCon();
        $findSchoolResultDataSql=mysql_query("select * from tbl_result_sheet_info ORDER by id desc");
        while($resultDataFind=mysql_fetch_array($findSchoolResultDataSql))
        {
            $resultData[]=$resultDataFind;
        }
        return $resultData;
    }
    function allPublicResult()
    {
        $this->DBCon();
        $findPublicResultDataSql=mysql_query("select * from tbl_public_result_info ORDER by id desc");
        while($publicExamResultData=mysql_fetch_array($findPublicResultDataSql))
        {
            $examData[]=$publicExamResultData;
        }
        return $examData;
    }
    function allExBrightStudents()
    {
        $this->DBCon();
        $findExBrightStudentSql=mysql_query("select * from tbl_bright_student_info");
        while($brightStudentData=mysql_fetch_array($findExBrightStudentSql))
        {
            $brightStudent[]=$brightStudentData;
        }
        return $brightStudent;
    }
    function findFormData()
    {
        $this->DBCon();
        $findContentDownloadDataSql=mysql_query("select * from tbl_forms_info order by id desc limit 0,5");
        while($formsDataFind=mysql_fetch_array($findContentDownloadDataSql))
        {
            $formData[]=$formsDataFind;
        }
        return $formData;
    }
    function findImportantLink()
    {
        $this->DBCon();
        $findImportantLinkSql=mysql_query("select * from tbl_link_info ORDER by id desc");
        while($linkDataFind=mysql_fetch_array($findImportantLinkSql))
        {
            $link[]=$linkDataFind;
        }
        return $link;
    }
    function findContentDownload()
    {
        $this->DBCon();
        $findContentDataSql=mysql_query("select * from tbl_content_info order by id desc");
        while($contentDataSet=mysql_fetch_array($findContentDataSql))
        {
            $contentData[]=$contentDataSet;
        }
        return $contentData;
    }
    function allVacancyList()
    {
        $this->DBCon();
        $findVacancyDataSql=mysql_query("select * from tbl_vacancy_info ORDER by id desc");
        while($allVacancyDataFind=mysql_fetch_array($findVacancyDataSql))
        {
            $vacancy[]=$allVacancyDataFind;
        }
        return $vacancy;
    }
    function allTenderList()
    {
        $this->DBCon();
        $findTenderDataSql=mysql_query("select * from tbl_tender_info ORDER by id desc");
        while($tenderDataFind=mysql_fetch_array($findTenderDataSql))
        {
            $tender[]=$tenderDataFind;
        }
        return $tender;
    }
    function allEventsInfo()
    {
        $this->DBCon();
        $findEventsDataSql=mysql_query("select * from tbl_events_info ORDER by id desc");
        while($eventsDataSet=mysql_fetch_array($findEventsDataSql))
        {
            $events[]=$eventsDataSet;
        }
        return $events;
    }
}