<?php
session_start();
function __autoload($className)
{
    $dr=array("controller","model");
    foreach($dr as $d):
        if(file_exists($d."/".$className.".php"))
        {
            include_once $d."/".$className.".php";
        }
    endforeach;
}
$controller=new Controller();
$model=new Model();

$allNotice=$controller->headerNoticeData();
$allNews=$controller->headerNewsData();
$findForms=$controller->findFormData();
$importantLink=$controller->findImportantLink();
$contentDownload=$controller->findContentDownload();
$allBannerList=$controller->allBannerData();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dalta Rahmania High School</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
    <script type="text/javascript" src="box_js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>
    <link rel="stylesheet" href="box_css/lightbox.css">
    
</head>
<body>
<div class="container">
    <div class="top_line"></div>
    <div class="header"></div>
    <div class="menu">
        <ul id="menu">
            <li><a href="index.php">HOME</a></li>
            <li>
                <a href="#">ABOUT</a>
                <ul>
                    <li><a href="?l=sh&pages=history">History</a></li>
                    <li><a href="?l=sh&pages=m_v">Mission & Vision</a></li>
                    <li><a href="?l=sh&pages=infrastructure">Infrastructure</a></li>
                    <li><a href="?l=sh&pages=student_classwise">Student Classwise</a></li>
                    <li><a href="?l=sh&pages=founders">Founders</a></li>
                    <li><a href="?l=sh&pages=governingbody">Governing Body</a></li>
                </ul>
            </li>
            <li>
                <a href="#">ACADEMIC</a>
                <ul>
                    <li><a href="?l=sh&pages=teacher">Teacher Information</a> </li>
                    <li><a href="?l=sh&pages=studentlist">Student Information</a></li>
                    <li><a href="?l=sh&pages=classroutine">Class Routine</a> </li>
                    <li><a href="?l=sh&pages=academic_calendar">Academic Calendar</a></li>
                    <li><a href="?l=sh&pages=holiday_calendar">Holiday Calendar</a></li>
                    <li><a href="?l=sh&pages=exam_calendar">Exam Calendar</a></li>
                    <li><a href="?l=sh&pages=officestaff">3rd/4th Class Employee</a> </li>
                    <li><a href="?l=sh&pages=exhead_teacher">Ex-Head Teacher</a></li>
                </ul>
            </li>
            <li>
                <a href="#"> Result </a>
                <ul>
                    <li><a href="?l=sh&pages=school_result">School Result</a></li>
                    <li><a href="?l=sh&pages=public_result">Public Exam Result</a> </li>
                </ul>
            </li>
            <li>
                <a href="#"> Admission </a>
                <ul>
                    <li><a href="?l=sh&pages=admission_requirements">Admission Requirement</a></li>
                    <li><a href="?l=sh&pages=online_admission">Online Admission Form</a> </li>
                </ul>
            </li>
            <li>
                <a href="#">Achievements</a>
                <ul>
                    <li><a href="?l=sh&pages=exstudent">Student Achievements</a></li>
                    <li><a href="?l=sh&pages=awards">Awards</a></li>
                </ul>
            </li>
            <li>
                <a href="?l=sh&pages=photos">Gallery</a>
            </li>
            <li>
                <a href="?l=sh&pages=contact">Contact</a>
            </li>
        </ul>
    </div>
    <!--menu end------------------------->
    <?php  if((isset($_GET['l']) && $_GET['pages']!="photos") || !isset($_GET['l']) && !isset($_GET['pages'])) {?>

    <div class="slider">
        <div id="coin-slider">
             <?php
             
                  foreach($allBannerList as $slider): 

                ?>
                      
                       <img src="schooladmin/<?php echo $slider[2] ?>" width="900" height="250" alt="collage" />
                <?php endforeach; ?>

            
        </div>

    </div>

    <?php } ?>

    <!--slider end-->
    <div class="marquee">
        <marquee scrolldelay="150" onmouseover="this.stop()" onmouseout="this.start()">
                   <?php foreach($allNotice as $notice): ?>
              <label><a href="?l=sh&pages=notice_details&id=<?php echo $notice[0]; ?>"><?php echo $notice[1]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?></a></label>
            <?php endforeach; ?>
        </marquee>
    </div>
    <!--News start-->
    <div class="right">
        <div class="menu_head">News</div>
        <div class="message">
            <marquee direction="up" scrolldelay="200" height="85%" onmouseover="this.stop()" onmouseout="this.start()">
            <?php
                  foreach($allNews as $news):
                ?>
                      <div><label class="fonset"><?php echo $news[1]; ?></label><hr/><?php $str=str_split($news[2],200); echo $str[0]."&nbsp;&nbsp;&nbsp; <a href='?l=sh&pages=news_details&id=$news[0]'>Read More..</a>"; ?><br/><br/></div>
                <?php endforeach; ?>
            </marquee>
        </div>
        <div class="menu_sub"><a href="?l=sh&pages=events"> Events </a></div>
        <div class="menu_sub"><a href="?l=sh&pages=vacancy">Vacancy</a></div>
        <div class="menu_sub"><a href="?l=sh&pages=tender">Tenders</a></div>
        <div class="menu_sub"><a href="?l=sh&pages=mobile_bank">Mobile Banking</a> </div>
        <div class="menu_head">Corner</div>
        <div class="menu_box">
            <div class="menu_sub"><a href="?l=sh&pages=public_exam_corner">Public Exam </a> </div>
            <div class="menu_sub"><a href="?l=sh&pages=">Internal Exam </a> </div>
            <div class="menu_sub"><a href="?l=sh&pages=">Teacher Corner </a> </div>
            <div class="menu_sub"><a href="?l=sh&pages=">Guardian Corner </a> </div>
        </div>
        <div class="menu_head">Forms</div>
          <div class="menu_box">
              <?php foreach($findForms as $form): ?>
              <div class="menu_sub">
                  <a href="<?php echo $form[2]; ?>"><?php echo $form[1]; ?></a>
              </div>
              <?php endforeach; ?>
          </div>

        <button class="menu_head" data-toggle="collapse" data-target="#demo">Important Link</button>
            <div class="menu_box collapse" id="demo">
                <?php foreach($importantLink as $im): ?>
                <div class="menu_sub">
                        <a href="<?php echo $im[2];  ?>" target="_blank"><?php echo $im[1]; ?></a>
                </div>
                <?php endforeach; ?>
            </div>

        <div class="menu_head">Content Download</div>
        <div class="menu_box">
            <?php foreach($contentDownload as $content): ?>
            <div class="menu_sub">
                   <a href="schooladmin/<?php echo $content[2]; ?>" target="_blank"><?php echo $content[1]; ?></a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="menu_head">Visitor</div>
        <div class="menu_box">
            <?php
            $count_my_page = ("hitcounter.txt");
            $hits = file($count_my_page);
            $hits[0] ++;
            $fp = fopen($count_my_page , "w");
            fputs($fp , "$hits[0]");
            fclose($fp);
            echo "Total Visitor: ". $hits[0];
            ?>
        </div>
    </div>
    <div class="about">

        <?php
        if(isset($_GET['l']) && $_GET['pages']!="")
        {
            $link=$controller->pageReDirect($_GET['pages']);
        }
        else
        {
            include_once "view/home.php";
        }
        ?>
    </div>
    <div class="footer_menu">
        <div class="f_menu_1">
            <div class="menu_head">Comment/Complain</div>
            <form action="#" method="post">
                <input id="name" name="name" class="in" placeholder="Name" />
                <input id="email" name="email" class="in" placeholder="Email" />
                <textarea id="message" name="message" class="textarea" placeholder="Your Message"></textarea>
                <input type="submit" value="submit" name="" class="submit" />
            </form>
        </div>
        <div class="f_menu_1">
            <div class="menu_head">Log In</div>
            <form action="#" method="post">
                <input id="u_name" name="user" class="u_name" placeholder="User Name" />
                <input type="password" id="p_word" name="password" class="p_word" placeholder="Password" />
                <input type="submit" value="Login" class="submit" />
            </form>
        </div>
        <div class="f_menu_2">
            <div class="menu_head">Contact Details</div>
            <div>
                <p><strong>দল্টা রহমানিয়া উচ্চ বিদ্যালয়</strong></p>
                <p>দল্টা, ভাটরা</p>
                <p> উপজেলা: রামগঞ্জ,জেলা- লক্ষ্মীপুর।</p>
<p>যোগাযোগ :+৮৮ ০১৭১৪৭৩২৪২৭</p>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="footer_text">&copy; Copyright @ Dalta Rahmania High School<br/>
        Powered by: <a href="http://www.asbict.com" target="_blank"><span style="color:#0F0;">ASB ICT Limited</span></a>    </div>
    </div>
</div>
<!--container end here-->

</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>