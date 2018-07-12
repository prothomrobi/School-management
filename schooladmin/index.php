<?php
  session_start();
    function __autoload($className)
    {
        $dir = array("model", "controller");
        for ($i = 0; $i<count($dir); $i++) {
            if (file_exists($dir[$i]."/".$className.".php")) {
                include_once $dir[$i]. "/" .$className.".php";
            }
        }
    }
    $model = new Model();
    $control = new Controller();
date_default_timezone_set("Asia/Dhaka");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>School Admin</title>

    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
    <script src="js/hideshow.js" type="text/javascript"></script>
    <script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.equalHeight.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
            {
                $(".tablesorter").tablesorter();
            }
        );
        $(document).ready(function() {

            //When page loads...
            $(".tab_content").hide(); //Hide all content
            $("ul.tabs li:first").addClass("active").show(); //Activate first tab
            $(".tab_content:first").show(); //Show first tab content

            //On Click Event
            $("ul.tabs li").click(function() {

                $("ul.tabs li").removeClass("active"); //Remove any "active" class
                $(this).addClass("active"); //Add "active" class to selected tab
                $(".tab_content").hide(); //Hide all tab content

                var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active ID content
                return false;
            });

        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.column').equalHeight();
        });
    </script>

    <link href="css/jquery-ui-1.10.1.css" rel="stylesheet">

    <link href="css/siena.datepicker.css" rel="stylesheet">
    <link href="css/santiago.datepicker.css" rel="stylesheet">
    <link href="css/latoja.datepicker.css" rel="stylesheet">
    <link href="css/lugo.datepicker.css" rel="stylesheet">
    <link href="css/cangas.datepicker.css" rel="stylesheet">
    <link href="css/vigo.datepicker.css" rel="stylesheet">
    <link href="css/nigran.datepicker.css" rel="stylesheet">

</head>


<body>
<header id="header">
    <hgroup>
        <h1 class="site_title"><a href="http://www.asbict.com"><img src="images/logo.png"></a></h1>
        <h2 class="section_title">Admin Section</h2><div class="btn_view_site"></div>
        <!-- <h2 style="padding-top: 15px;"><a href="?l=sch&p=logout">LOGOUT</a></h2> -->
    </hgroup>
</header> <!-- end of header bar -->
   <?php
   if(isset($_SESSION['asbUser']) && $_SESSION['asbUser']!="")
   {
      if($_GET['l']!="" && $_GET['p']!="")
      {
          ?>
          <section id="secondary_bar">
              <div class="user">
                  <p><?php echo $_SESSION['asbFname']; ?> (<a href="">0 Messages</a>)</p>
                  <a class="logout_user" href="?l=sch&p=logout" title="Logout">Logout</a>
              </div>
              <div class="breadcrumbs_container">
                  <article class="breadcrumbs"><a href="?l=sch&p=home">School Admin</a> <div class="breadcrumb_divider"></div></article>
                  <h3 style="float: right;margin-right: 5px;"><a href="?l=sch&p=logout">LOGOUT</a></h3>
              </div>
          </section><!-- end of secondary bar -->

          <aside id="sidebar" class="column">
              <form class="quick_search">
                  <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
              </form>
              <hr/>
              <h3>Banner</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=banner_form">Banner Form</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=banner_list">Banner List</a></li>
              </ul>
              <h3>Head Master</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=headMaster_message">Message</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=head_messageList">Message List</a></li>
                  
              </ul>
              <h3>Chairman</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=chairman_msg">Message</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=chairman_msgList">Message List</a></li>
              </ul>
              <h3>Student</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=student_form">Student Form</a></li>
                  <li class="icn_edit_article"><a href="?l=sch&p=student_list">Student List</a></li>
                  <li class="icn_jump_back"><a href="?l=sch&p=student_class">Class Wise Student</a></li>
                  <li class="icn_categories"><a href="?l=sch&p=student_attendance">Student Attendance</a></li>
              </ul>
              <h3>Teacher</h3>
              <ul class="toggle">
                  
                  <li class="icn_add_user"><a href="?l=sch&p=teacher_list">Teacher List</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=assign_course">Assign Course</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=courses_assign">Courses Assigned</a></li>
              </ul>
              <h3>Exam</h3>
              <ul class="toggle">
                  <li class="icn_jump_back"><a href="?l=sch&p=exam_create">Exam Create</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=exam_list">Exam List</a></li>
                  <li class="icn_profile"><a href="?l=sch&p=grade_entry">Grade Entry</a></li>
                  <li class="icn_categories"><a href="?l=sch&p=student_marks">Marks Entry</a></li>
                  <li class="icn_categories"><a href="?l=sch&p=result_sheet_upload">Result Sheet Upload</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=all_result_sheet_list">All Result Sheet List</a></li>
                  <li class="icn_categories"><a href="?l=sch&p=public_result_upload">Public Exam Result</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=all_public_result_list">All Public Exam Result List</a></li>
              </ul>
              <h3>Employee</h3>
              <ul class="toggle">
                  <li class="icn_view_users"><a href="?l=sch&p=employee_info">Employee Information</a></li>
                  <li class="icn_add_user"><a href="?l=sch&p=employee_list">Employee List</a></li>
                  <li class="icn_add_user"><a href="?l=sch&p=employee_attendance">Employee Attendance</a></li>
                  <li class="icn_add_user"><a href="?l=sch&p=attendance_list">Attendance List</a></li>
              </ul>
              <h3>Fees Collection</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=fees_head">Fees Head</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=fees_head_list">Fees Head List</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=collect_fees">Collect Fees</a></li>
              </ul>
              <h3>Accounts</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=daily_collection">Daily Collection</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=daily_">Daily </a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=staff_salary">Staff Salary</a></li>
              </ul>
              <h3>Settings</h3>
              <ul class="toggle">
                  <li class="icn_settings"><a href="?l=sch&p=create_class">Create Class</a></li>
                  <li class="icn_jump_back"><a href="?l=sch&p=class_list">Class List</a></li>
                  <li class="icn_security"><a href="?l=sch&p=create_course">Create Course</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=course_list">Course List</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=employee_category">Employee Category</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=employee_category_list">Employee Category List</a></li>
                  <li class="icn_photo"><a href="?l=sch&p=designation">Designation</a></li>
                  <li class="icn_profile"><a href="?l=sch&p=designation_list">Designation List</a> </li>
                  <li class="icn_new_article"><a href="?l=sch&p=class_course">Assign Course To Class</a></li>
                  <li class="icn_folder"><a href="?l=sch&p=assigned_courses">Assigned Courses </a> </li>
              </ul>
              <h3>Routine</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=class_routine">Class Routine</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=class_routine_list">Class Routine List</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=exam_routine">Exam Routine</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=exam_routine_list">Exam Routine List</a></li>
              </ul>
              <h3>Calendar</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=education_calendar">Academic Calendar</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=education_calendar_list">Academic Calendar List</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=holiday_calendar">Holiday Calendar</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=holiday_calendar_list">Holiday Calendar List</a></li>
              </ul>
              <h3>School Forms</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_forms">New Forms</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=forms_list">Forms Lists</a></li>
              </ul>
              <h3>Notice</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_notice">New Notice</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=notice_list">Notice Lists</a></li>
              </ul>
              <h3>News</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_news">New News</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=news_list">News Lists</a></li>
              </ul>
              <h3>Events</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_event">New Events</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=event_list">Events Lists</a></li>
              </ul>
              <h3>Gallery</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_image">New Image</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=image_list">Image Lists</a></li>
              </ul>
              <h3>Vacancy</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_vacancy">New Vacancy</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=vacancy_list">Vacancy List</a></li>
              </ul>
              <h3>Download Corner</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_content">New Content</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=content_list">Content List</a></li>
              </ul>
              <h3>Tender</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_tender">New Tender</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=tender_list">Tender List</a></li>
              </ul>
              <h3>SMS Panel</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=send_sms">Send SMS</a></li>
              </ul>
              <h3>Governing Body</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_member">New Member</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=member_list">Member List</a></li>
              </ul>
              <h3>Important Link</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=new_important_link">Important Link</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=link_list">Important Link List</a></li>
              </ul>
              <h3>Archive</h3>
              <ul class="toggle">
                  <li class="icn_new_article"><a href="?l=sch&p=head_teacher">Head Teacher</a></li>
                  <li class="icn_new_article"><a href="?l=sch&p=head_teacher_list">Head Teacher List</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=bright_students">Bright Students</a></li>
                  <li class="icn_view_users"><a href="?l=sch&p=bright_students_list">Bright Students List</a></li>
                  <!-- <li class="icn_new_article"><a href="?l=sch&p=archieve_student_form">Student Form</a></li> -->
                  <li class="icn_view_users"><a href="?l=sch&p=archive_students_list">Students List</a></li>
              </ul>
              <footer>
                  <hr />
                  <p><strong>Copyright &copy; 2015</strong></p>
                  <p>Design by <a href="http://www.asbict.com">ASB ICT Limited</a></p>
              </footer>
          </aside><!-- end of sidebar -->

          <section id="main" class="column">
          <?php
          $findPage=$control->PageRedirect(array($_GET['l'],$_GET['p']));
      }
      else
      {
          include_once "view/home.php";
      }
          ?>
          </section>
       <?php
   }
   else
   {
      include_once "view/login.php";
   }
?>
</body>

</html>