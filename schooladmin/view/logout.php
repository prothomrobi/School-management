<?php
if(isset($_SESSION['asbUser']) && $_SESSION['asbUser']!="")
{
  unset($_SESSION['asbUser']);
  unset($_SESSION['asbFname']);
    session_destroy();
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
else
{
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}