<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global1.css" />
    <link rel="stylesheet" href="../css/log-in.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
    />
  </head>
  <body>
    <div class="login-5">
      <img
        class="the-interior-has-a-armchair-on-icon"
        alt=""
        src="../img/theinteriorhasaarmchaironemptywhitewallbackground3drendering-1@2x.png"
      />

      <div class="your-logo">Your Logo</div>
      <div class="rectangle-parent">
        <div class="group-child"></div>
        <div class="welcome-to-lorem-parent">
          <div class="welcome-to-lorem-container">
            <span>Welcome to </span>
            <span class="lorem">LOREM</span>
          </div>
          <div class="no-account-container">
            <p class="no-account">No Account ?</p>
            <a href="sign-up.php" class="sign-up">Sign up</a>
          </div>
        </div>
        <h1 class="sign-in">Sign in</h1>
        <div class="group-parent">
          <div class="rectangle-group">
            <div class="group-item"></div>
            <img class="google-icon" alt="" src="../img/google.svg" />

            <div class="sign-in-with">Sign in with Google</div>
          </div>
          <img class="group-inner" alt="" src="../img/group-52.svg" />

          <img class="group-icon" alt="" src="../img/group-51.svg" />
        </div>
        <form action="index.php?act=login" method="post">
        <div class="enter-your-username-or-email-a-parent">
          <div class="enter-your-username">
            Enter your username or email address
          </div>
          <input class="component-child" type="text" name="user-name" placeholder="Username or email address"/>

          <div class="username-or-email"></div>
        </div>
        <div class="enter-your-password-parent">
          <div class="enter-your-username">Enter your Password</div>
          <input class="instance-child" placeholder="Password" type="password" name="pw" />
 
        </div>
        <a href="index.php?act=forgotPw" class="forgot-password">Forgot Password</a>
        <button class="rectangle-container" name="btn-logIn">
          <div class="rectangle-div"></div>
          <div class="sign-in1">Sign in</div>
        </button>
      </form>
      </div>
    </div>
  </body>
</html>
