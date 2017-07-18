<?php
include('signin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
<br><br><br><br><br><br><br><br>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <form action="" method="post">
        <label>
          <span>Username</span>
            <input id="name" name="username" type="text" required/>
        </label>
        <label>
          <span>Password</span>
          <input id="password" name="password" type="password" required/>
        </label>
        <input type="submit" class="submit" name="submit"  value=" Login ">
        <span><?php echo $error; ?></span>
    </form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
    <form name="registration" method="post" action="register.php">
          <label>
            <span>Full Name</span>
            <input type="text" name="fullname" value="">
          </label>
          <label>
            <span>Username</span>
            <input type="text" name="username" value="">
          </label>
          <label>
            <span>Email</span>
            <input type="text" name="email" value="">
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" value="">
          </label>
        <input type="submit" class="submit" name="submit" value="Submit">
    </form>
    </div>
  </div>
</div>




<a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">
  <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
</a>
<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>

    <script src="js/index.js"></script>

</body>
</html>
