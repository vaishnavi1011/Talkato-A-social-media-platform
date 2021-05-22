<?php 
  session_start();
?>

<?php include_once "header.php"; ?>
<?php include_once "background.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header style="text-align:center; font-family:bold;">Log In</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Log In">
        </div>
      </form>
      <div class="link"><b>Not yet signed up?</b> <a href="sign_up.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
