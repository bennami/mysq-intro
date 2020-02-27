<?php ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="../CSS/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://img.icons8.com/carbon-copy/100/000000/user-male-circle.png" class=" max-width: 20%" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="?login=login" method="post">
      <input type="text" id="login" class="fadeIn second" name="loginEmail" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="loginPassword" placeholder="password">
      <input type="submit" class="fadeIn fourth"  name="submitLogin" value="Log In">
    </form>

    <!-- Remind Passowrd -->
      <form action="register" method="get">
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
            <br>
            <a class="underlineHover" name="register" href="?reg" >REGISTER</a>
    </div>
      </form>
  </div>
</div>