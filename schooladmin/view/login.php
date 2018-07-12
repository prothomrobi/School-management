<?php
  $control=new Controller();
  if(isset($_POST['btnLogin']) && $_POST['userName']!="")
  {
    $userData=array($_POST['userName'],$_POST['userPass']);
    $userFetchData=$control->findUserData($userData);

      if($userFetchData[1]==$userData[0])
      {
         $_SESSION['asbUser']=$userFetchData[1];
         $_SESSION['asbFname']=$userFetchData[3];

          echo "<meta http-equiv='refresh' content='0;url=?l=sch&p=home'>";
      }
  }
?>
<section id="main" class="column">
<article class="module width_center">
    <form class="post_message" method="post" action="" autocomplete="off">
    <header><h3>Login</h3></header>
    <div class="module_content">

        <fieldset>
            <label>Username</label>
            <input type="text" name="userName" placeholder="Username">
        </fieldset>
        <fieldset>
            <label>Password</label>
            <input type="password" name="userPass" placeholder="Password">
        </fieldset>
    </div>
    <footer>
        <div class="submit_link">
            <input type="submit" value="Login" name="btnLogin" class="alt_btn">
            <input type="reset" value="Reset">
        </div>
    </footer>
    </form>
</article><!-- end of post new article -->
    </section>