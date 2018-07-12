<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/10/2015
 * Time: 11:41 PM
 */

class Controller {
    public function pageReDirect($pageName)
    {
        if($pageName!="")
        {
            include_once "view/".$pageName.".php";
        }
        else
        {
            include_once "view/home.php";
        }
        return true;
    }
    public function newModel()
    {
        $model=new Model();
        return $model;
    }

    public function enTbn($number) {
        $convertString=$this->newModel()->en2bn($number);
        return $convertString;
        return str_replace(self::$en, self::$bn, $number);
    }
    
    public function selectClassName($classID)
    {
        $selectedClassData=$this->newModel()->selectClassName($classID);
        return $selectedClassData;
    }
    
    function allStudentList()
    {
        $studentList=$this->newModel()->allStudentList();
        return $studentList;
    }

    function allGalleryPhoto()
    {
        $allGalleryPhoto=$this->newModel()->allGalleryPhoto();
        return $allGalleryPhoto;
    }
    function allNewsData()
    {
        $allNewsData=$this->newModel()->allNewsData();
        return $allNewsData;
    }
    function allBannerData()
    {
        $allBannersData=$this->newModel()->allBannerData();
        return $allBannersData;
    }
    function selectedNewsData($nID)
    {
        $selectNewsData=$this->newModel()->selectedNewsData($nID);
        return $selectNewsData;
    }
    function headerNewsData()
    {
        $headerNewsData=$this->newModel()->headerNewsData();
        return $headerNewsData;
    }
    function allTeacherList()
    {
        $allTeacher=$this->newModel()->allTeacherList();
        return $allTeacher;
    }
    public function allHeadTeacherList()
    {
        $allHeadTeacherList=$this->newModel()->allHeadTeacherList();
        return $allHeadTeacherList;
        
    }

    public function HeadTeacherMsgList()
    {
        $findHeadTeacherMsgInfo=$this->newModel()->HeadTeacherMsgList();
        return $findHeadTeacherMsgInfo;
    }

    public function ChairmanMsgList()
    {
        $findHeadTeacherMsgInfo=$this->newModel()->ChairmanMsgList();
        return $findHeadTeacherMsgInfo;
    }
    function selectedTeacherDesignation($desID)
    {
        $teacherDesignation=$this->newModel()->selectedTeacherDesignation($desID);
        return $teacherDesignation;
    }
    function findOtherEmployee()
    {
        $otherEmployeeData=$this->newModel()->findOtherEmployee();
        return $otherEmployeeData;
    }
    function selectedEmployeeCategory($empType)
    {
        $selectedEmployeeType=$this->newModel()->selectedEmployeeCategory($empType);
        return $selectedEmployeeType;
    }
    function selectedClassData($classID)
    {
        $selectedClassFind=$this->newModel()->selectedClassData($classID);
        return $selectedClassFind;
    }
    function allResultData()
    {
        $allResultData=$this->newModel()->allResultData();
        return $allResultData;
    }
    function selectedExamData($examID)
    {
        $selectedExamData=$this->newModel()->selectedExamData($examID);
        return $selectedExamData;
    }
    function allNoticeData()
    {
        $noticeData=$this->newModel()->allNoticeData();
        return $noticeData;
    }
    function selectedNoticeData($nID)
    {
        $selectedNoticeData=$this->newModel()->selectedNoticeData($nID);
        return $selectedNoticeData;
    }
    function headerNoticeData()
    {
        $headerNoticeData=$this->newModel()->headerNoticeData();
        return $headerNoticeData;
    }
    function allAcademicCalendar()
    {
        $allAcademicData=$this->newModel()->allAcademicCalendar();
        return $allAcademicData;
    }
    function allClassList()
    {
        $allClassList=$this->newModel()->allClassList();
        return $allClassList;
    }
    function maleStudent($id) 
    {
        $male = $this->newModel()->maleStudent($id);
        return $male;
    }
    public function totalStudent()
    {
        $findTotalStudent=$this->newModel()->totalStudent();
        return $findTotalStudent;
    }
    function allClassStudentList($clData)
    {
        $allClassStudentData=$this->newModel()->allClassStudentList($clData);
        return $allClassStudentData;
    }
    function allClassStudent($cls)
    {
        $allClassStudentData=$this->newModel()->allClassStudent($cls);
        return $allClassStudentData;
    }
    function allClassWiseStudent($clData)
    {
        $allClassStudentData=$this->newModel()->allClassWiseStudent($clData);
        return $allClassStudentData;
    }
    function allClassWiseStudent9($clData)
    {
        $allClassStudentData=$this->newModel()->allClassWiseStudent9($clData);
        return $allClassStudentData;
    }
    
    function allClassRoutineList()
    {
        $classRoutine=$this->newModel()->allClassRoutineList();
        return $classRoutine;
    }
    function allGoverningBodyMemberData()
    {
        $governingBodyMember=$this->newModel()->allGoverningBodyMemberData();
        return $governingBodyMember;
    }
    function allHolidayCalendar()
    {
        $holidayCalendarData=$this->newModel()->allHolidayCalendar();
        return $holidayCalendarData;
    }
    function allExHeadTeacherData()
    {
        $exHeadTeacherData=$this->newModel()->allExHeadTeacherData();
        return $exHeadTeacherData;
    }
    function allSchoolResult()
    {
        $schoolResult=$this->newModel()->allSchoolResult();
        return $schoolResult;
    }
    function allPublicResult()
    {
        $publicExamResult=$this->newModel()->allPublicResult();
        return $publicExamResult;
    }
    function allExBrightStudents()
    {
        $exBrightStudent=$this->newModel()->allExBrightStudents();
        return $exBrightStudent;
    }
    function findFormData()
    {
        $findFormData=$this->newModel()->findFormData();
        return $findFormData;
    }
    function findImportantLink()
    {
        $findImportantLink=$this->newModel()->findImportantLink();
        return $findImportantLink;
    }
    function findContentDownload()
    {
        $findContentDownload=$this->newModel()->findContentDownload();
        return $findContentDownload;
    }
    function allVacancyList()
    {
        $allVacancyData=$this->newModel()->allVacancyList();
        return $allVacancyData;
    }
    function allTenderList()
    {
        $tenderDataFind=$this->newModel()->allTenderList();
        return $tenderDataFind;
    }
    function allEventsInfo()
    {
        $eventsDataFind=$this->newModel()->allEventsInfo();
        return $eventsDataFind;
    }
}