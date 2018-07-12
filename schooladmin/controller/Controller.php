<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/4/2015
 * Time: 12:32 AM
 */

class Controller {
    public function pageReDirect($pageName)
    {
        if($pageName[0]!="")
        {
            include_once "view/".$pageName[1].".php";
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
    function getExtension($str)
    {
        $i = strrpos($str,".");
        if (!$i)
        {
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
    public function findUserData($userInfo)
    {
        $findUserData=$this->newModel()->findUserData($userInfo);
        return $findUserData;
    }
    public function saveClassInformation($classData)
    {
        $saveClassData=$this->newModel()->saveClassInformation($classData);
        return $saveClassData;
    }
    public function allClassList()
    {
        $allClassList=$this->newModel()->allClassList();
        return $allClassList;
    }
    public function selectClassName($classID)
    {
        $selectedClassData=$this->newModel()->selectClassName($classID);
        return $selectedClassData;
    }
    public function editClassInformation($classData)
    {
        $editClassData=$this->newModel()->editClassInformation($classData);
        return $editClassData;
    }
    public function saveStudentInformation($stdInfo)
    {
        $saveStudentInformation=$this->newModel()->saveStudentInformation($stdInfo);
        return $saveStudentInformation;
    }
    public function allStudentList()
    {
        $allStudentList=$this->newModel()->allStudentList();
        return $allStudentList;
    }
    public function editStudentImageInformation($studentInfo)
    {
        $editStudentInformation=$this->newModel()->editStudentImageInformation($studentInfo);
        return $editStudentInformation;
    }

    public function editStudentInformation($studentInfo)
    {
        $editStudentInformation=$this->newModel()->editStudentInformation($studentInfo);
        return $editStudentInformation;
    }
    public function editNoticeInformation($noticeInfo)
    {
        $editNoticeInformation=$this->newModel()->editNoticeInformation($noticeInfo);
        return $editNoticeInformation;
    }
    public function editNewsInformation($newsInfo)
    {
        $editNewsInformation=$this->newModel()->editNewsInformation($newsInfo);
        return $editNewsInformation;
    }
    public function editEventInformation($eventsInfo)
    {
        $editEventsInformation=$this->newModel()->editEventInformation($eventsInfo);
        return $editEventsInformation;
    }
     public function editVacancyInformation($vacancyInfo)
    {
        $editVacancyInformation=$this->newModel()->editVacancyInformation($vacancyInfo);
        return $editVacancyInformation;
    }
    public function saveCourseInformation($courseData)
    {
        $saveCourseInformation=$this->newModel()->saveCourseInformation($courseData);
        return $saveCourseInformation;
    }
    public function allCourseData()
    {
        $allCourseData=$this->newModel()->allCourseData();
        return $allCourseData;
    }
    public function saveCategoryInformation($catData)
    {
        $employeeCategorySave=$this->newModel()->saveCategoryInformation($catData);
        return $employeeCategorySave;
    }
    public function employeeCategoryList()
    {
        $employeeCategoryList=$this->newModel()->employeeCategoryList();
        return $employeeCategoryList;
    }
    public function saveDesignationInformation($desiData)
    {
        $designationDataSave=$this->newModel()->saveDesignationInformation($desiData);
        return $designationDataSave;
    }
    public function allDesignationData()
    {
        $allDesignation=$this->newModel()->allDesignationData();
        return $allDesignation;
    }
    public function saveEmployeeInformation($employeeData)
    {
        $saveEmployeeInformation=$this->newModel()->saveEmployeeInformation($employeeData);
        return $saveEmployeeInformation;
    }
    public function saveEmployeeAttendance($attendanceData)
    {
        $saveEmployeeInformation=$this->newModel()->saveEmployeeAttendance($attendanceData);
        return $saveEmployeeInformation;
    }
    public function employeeAttendanceTime()
    {
        $attendanceTimeList=$this->newModel()->employeeAttendanceTime();
        return $attendanceTimeList;
    }
    public function findByEmployeeID($employeeID)
    {
        $employeeDataByID=$this->newModel()->findByEmployeeID($employeeID);
        return $employeeDataByID;
    }
    public function allEmployeeInformation()
    {
        $allEmployeeInformation=$this->newModel()->allEmployeeInformation();
        return $allEmployeeInformation;
    }
    public function selectedEmployeeType($empType)
    {
        $employeeTypeData=$this->newModel()->selectedEmployeeType($empType);
        return $employeeTypeData;
    }
    public function selectEmployeeDesignation($desID)
    {
        $employeeDesignation=$this->newModel()->selectEmployeeDesignation($desID);
        return $employeeDesignation;
    }
    public function allTeacherFind()
    {
        $allTeacherData=$this->newModel()->allTeacherFind();
        return $allTeacherData;
    }
    public function saveAssignCourse($corData)
    {
        for($i=0;$i<count($corData[1]);$i++):
         $saveAssignCourse=$this->newModel()->saveAssignCourse(array($corData[0],$corData[1][$i],$corData[2],$corData[3]));
        endfor;
        return $saveAssignCourse;
    }
    public function saveExamInformation($examData)
    {
        $saveExamInformation=$this->newModel()->saveExamInformation($examData);
        return $saveExamInformation;
    }
    public function allExamInformation()
    {
        $allExamInfoData=$this->newModel()->allExamInformation();
        return $allExamInfoData;
    }
    public function saveFeesHead($feesHead)
    {
        $saveFeesHead=$this->newModel()->saveFeesHead($feesHead);
        return $saveFeesHead;
    }
    public function feesHeadList()
    {
        $feesHeadList=$this->newModel()->feesHeadList();
        return $feesHeadList;
    }
    public function findStudentData($stdID)
    {
        $studentFeesData=$this->newModel()->findStudentData($stdID);
        return $studentFeesData;
    }
     public function findGalleryData($gID)
    {
        $galleryData=$this->newModel()->findGalleryData($gID);
        return $galleryData;
    }
    public function findHeadData($hID)
    {
        $headFeesData=$this->newModel()->findHeadData($hID);
        return $headFeesData;
    }
    public function findChairmanData($cID)
    {
        $headFeesData=$this->newModel()->findChairmanData($cID);
        return $headFeesData;
    }

    public function findNoticeData($nID)
    {
        $headFeesData=$this->newModel()->findNoticeData($nID);
        return $headFeesData;
    }
    public function findNewsData($nID)
    {
        $headFeesData=$this->newModel()->findNewsData($nID);
        return $headFeesData;
    }
    public function findEventData($eID)
    {
        $headFeesData=$this->newModel()->findEventData($eID);
        return $headFeesData;
    }
    public function findVacancyData($vID)
    {
        $headFeesData=$this->newModel()->findVacancyData($vID);
        return $headFeesData;
    }
	public function findClassCourseSelected($classID)
	{
		$classCourseSelect=$this->newModel()->findClassCourseSelected($classID);
		return $classCourseSelect;
	}
	public function selectedCourseData($corID)
	{
		$findCourseData=$this->newModel()->selectedCourseData($corID);
		return $findCourseData;
	}
	public function findClassStudents($classID)
	{
		$findClassData=$this->newModel()->findClassStudents($classID);
		return $findClassData;
	}
	public function saveTeacherCourseData($courseData)
	{
		$saveTeacherCourseData=$this->newModel()->saveTeacherCourseData($courseData);
		return $saveTeacherCourseData;
	}
	public function allAssignedCourses()
	{
		$assignCoursesData=$this->newModel()->allAssignedCourses();
		return $assignCoursesData;
	}
	public function selectedEmployeeData($empID)
	{
		$employeeInformationData=$this->newModel()->selectedEmployeeData($empID);
		return $employeeInformationData;
	}
    public function saveRoutineData($doc)
    {
        $saveRoutineData=$this->newModel()->saveRoutineData($doc);
        return $saveRoutineData;
    }
    public function allClassRoutineList()
    {
        $classRoutineList=$this->newModel()->allClassRoutineList();
        return $classRoutineList;
    }
    public function saveExamRoutineData($examData)
    {
        $examRoutineData=$this->newModel()->saveExamRoutineData($examData);
        return $examRoutineData;
    }
    public function allExamRoutine()
    {
        $allExamRoutine=$this->newModel()->allExamRoutine();
        return $allExamRoutine;
    }
    public function saveEducationCalendarData($eduCal)
    {
        $saveEducationCalendarData=$this->newModel()->saveEducationCalendarData($eduCal);
        return $saveEducationCalendarData;
    }
    public function allEducationCalendar()
    {
        $allEducationCalendar=$this->newModel()->allEducationCalendar();
        return $allEducationCalendar;
    }
    public function saveHolidayCalendarData($holidayData)
    {
        $saveHolidayCalendar=$this->newModel()->saveHolidayCalendarData($holidayData);
        return $saveHolidayCalendar;
    }
    public function allHolidayCalendarList()
    {
        $holidayCalendarData=$this->newModel()->allHolidayCalendarList();
        return $holidayCalendarData;
    }
    public function saveNoticeData($notice)
    {
        $saveNoticeData=$this->newModel()->saveNoticeData($notice);
        return $saveNoticeData;
    }
    public function allNoticeInfo()
    {
        $allNotice=$this->newModel()->allNoticeInfo();
        return $allNotice;
    }
    public function saveNewsData($newsData)
    {
        $saveNewsData=$this->newModel()->saveNewsData($newsData);
        return $saveNewsData;
    }
    public function allNewsInfo()
    {
        $allNewsData=$this->newModel()->allNewsInfo();
        return $allNewsData;
    }
    public function allBannersInfo()
    {
        $allBannersData=$this->newModel()->allBannersInfo();
        return $allBannersData;
    }

    public function saveEventsData($eventsData)
    {
        $saveEventsData=$this->newModel()->saveEventsData($eventsData);
        return $saveEventsData;
    }
    public function allEventsInfo()
    {
        $allEvents=$this->newModel()->allEventsInfo();
        return $allEvents;
    }
    public function saveImageData($imageData)
    {
        $saveImage=$this->newModel()->saveImageData($imageData);
        return $saveImage;
    }
    public function saveBannerData($bannerData)
    {
        $saveImage=$this->newModel()->saveBannerData($bannerData);
        return $saveImage;
    }
    public function allImageData()
    {
        $allImage=$this->newModel()->allImageData();
        return $allImage;
    }
    public function allBannerData()
    {
        $allImage=$this->newModel()->allBannerData();
        return $allImage;
    }
    public function saveVacancyData($jobData)
    {
        $saveVacancyData=$this->newModel()->saveVacancyData($jobData);
        return $saveVacancyData;
    }
    public function allVacancyList()
    {
        $allVacancyList=$this->newModel()->allVacancyList();
        return $allVacancyList;
    }
    public function saveTenderData($tenderData)
    {
        $saveTenderData=$this->newModel()->saveTenderData($tenderData);
        return $saveTenderData;
    }
    public function allTenderList()
    {
        $tenderList=$this->newModel()->allTenderList();
        return $tenderList;
    }
    public function saveResultSheetData($resultData)
    {
        $saveResultSheetData=$this->newModel()->saveResultSheetData($resultData);
        return $saveResultSheetData;
    }
    public function savePublicResultData($resultData)
    {
        $savePublicResultData=$this->newModel()->savePublicResultData($resultData);
        return $savePublicResultData;
    }
    public function allPublicExamResult()
    {
        $publicExamResultData=$this->newModel()->allPublicExamResult();
        return $publicExamResultData;
    }
    public function allResultData()
    {
        $allResultSheet=$this->newModel()->allResultData();
        return $allResultSheet;
    }
    public function selectedExamData($examID)
    {
        $selectedExamData=$this->newModel()->selectedExamData($examID);
        return $selectedExamData;
    }
    public function assignedCourseList()
    {
        $assignedCourses=$this->newModel()->assignedCourseList();
        return $assignedCourses;
    }
    public function saveFormsData($formData)
    {
        $saveFormData=$this->newModel()->saveFormsData($formData);
        return $saveFormData;
    }
    public function allFormsData()
    {
        $allFormsData=$this->newModel()->allFormsData();
        return $allFormsData;
    }
    public function saveMemberInformation($memData)
    {
        $memberInformationSave=$this->newModel()->saveMemberInformation($memData);
        return $memberInformationSave;
    }
    public function allMemberInfo()
    {
        $memberDataFind=$this->newModel()->allMemberInfo();
        return $memberDataFind;
    }
    public function specificMemberInfo($memID)
    {
         $specificMemberData=$this->newModel()->specificMemberInfo($memID);
        return $specificMemberData;
    }
    public function updateMemberImageInfo($memData)
    {
        $updateMemberData=$this->newModel()->updateMemberImageInfo($memData);
        return $updateMemberData;
    }
    public function updateMemberInfo($memData)
    {
        $updateMemberData=$this->newModel()->updateMemberInfo($memData);
        return $updateMemberData;
    }
    public function updateGalleryImageInfo($headData)
    {
        $updateHeadData=$this->newModel()->updateGalleryImageInfo($headData);
        return $updateHeadData;
    }
    public function updateGalleryInfo($headData)
    {
        $updateHeadData=$this->newModel()->updateGalleryInfo($headData);
        return $updateHeadData;
    }
    public function updateHeadImageInfo($headData)
    {
        $updateHeadData=$this->newModel()->updateHeadImageInfo($headData);
        return $updateHeadData;
    }
    public function updateHeadInfo($headData)
    {
        $updateHeadData=$this->newModel()->updateHeadInfo($headData);
        return $updateHeadData;
    }
    public function updateChairmanImageInfo($headData)
    {
        $updateChairmanData=$this->newModel()->updateChairmanImageInfo($headData);
        return $updateChairmanData;
    }
    public function updateChairmanInfo($headData)
    {
        $updateChairmanData=$this->newModel()->updateChairmanInfo($headData);
        return $updateChairmanData;
    }
    public function saveContentInformation($contentData)
    {
        $saveContentInformation=$this->newModel()->saveContentInformation($contentData);
        return $saveContentInformation;
    }
    public function allContentList()
    {
        $allContentData=$this->newModel()->allContentList();
        return $allContentData;
    }
    public function saveLinkInformation($linkData)
    {
        $saveLinkInformation=$this->newModel()->saveLinkInformation($linkData);
        return $saveLinkInformation;
    }
    public function allLinkList()
    {
        $allLinkData=$this->newModel()->allLinkList();
        return $allLinkData;
    }
    public function saveHeadTeacherInformation($teacherData)
    {
        $saveHeadTeacherInformation=$this->newModel()->saveHeadTeacherInformation($teacherData);
        return $saveHeadTeacherInformation;
    }
    public function saveHeadMasterData($teacherData)
    {
        $saveHeadMasterMsg=$this->newModel()->saveHeadMasterData($teacherData);
        return $saveHeadMasterMsg;
    }
    public function saveChairmanMsg($teacherData)
    {
        $saveChairmanMsg=$this->newModel()->saveChairmanMsg($teacherData);
        return $saveChairmanMsg;
    }
    public function allHeadTeacherList()
    {
        $findHeadTeacherInfo=$this->newModel()->allHeadTeacherList();
        return $findHeadTeacherInfo;
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
    public function saveBrightStudentInformation($studentData)
    {
        $saveBrightStudentInformation=$this->newModel()->saveBrightStudentInformation($studentData);
        return $saveBrightStudentInformation;
    }
    public function allBrightStudentList()
    {
        $findBrightStudentData=$this->newModel()->findBrightStudentList();
        return $findBrightStudentData;
    }
    public function specificEmployeeInformation($empData)
    {
        $specificEmployeeInformation=$this->newModel()->specificEmployeeInformation($empData);
        return $specificEmployeeInformation;
    }
    public function editEmployeeImageInformation($employeeInfo)
    {
        $editEmployeeInfo=$this->newModel()->editEmployeeImageInformation($employeeInfo);
        return $editEmployeeInfo;
    }
    public function editEmployeeInformation($employeeInfo)
    {
        $editEmployeeInfo=$this->newModel()->editEmployeeInformation($employeeInfo);
        return $editEmployeeInfo;
    }
    public function deleteInformation($dID)
    {
        $sql="tbl_".$dID[0]."_info where ".$dID[1];
        $deleteInformation=$this->newModel()->deleteInformation($sql);
        return $deleteInformation;
    }
    public function studentPromotion($pData)
    {
        if($pData[1]=="Archive")
        {
            foreach($pData[0] as $sID):
                $findStudentData=$this->findStudentData($sID);
                $promoteData=$this->newModel()->saveStudentArchive(array($findStudentData[1],$findStudentData[2],$findStudentData[3],$findStudentData[4],$findStudentData[5],$findStudentData[6],$findStudentData[7],$findStudentData[8],$findStudentData[9],$findStudentData[10],$findStudentData[11],$findStudentData[12],$findStudentData[13],$findStudentData[14],$findStudentData[15],date('Y-m-d')));
                $deleteStudentData=$this->deleteInformation(array("student","id=$sID"));
            endforeach;
        }
        else
        {
            foreach($pData[0] as $sID):
              $promoteData=$this->newModel()->studentPromotion(array($sID,$pData[1]));
            endforeach;
        }
      return $promoteData;
    }
    public function allArchiveStudentList()
    {
        $allArchiveStudentList=$this->newModel()->allArchiveStudentList();
        return $allArchiveStudentList;
    }
    public function totalStudent()
    {
        $findTotalStudent=$this->newModel()->totalStudent();
        return $findTotalStudent;
    }
    public function totalEmployee()
    {
        $findTotalEmployee=$this->newModel()->totalEmployee();
        return $findTotalEmployee;
    }
    public function totalClass()
    {
        $findTotalClass=$this->newModel()->totalClass();
        return $findTotalClass;
    }
    public function totalExam()
    {
        $totalClass=$this->newModel()->totalExam();
        return $totalClass;
    }
}