<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="../css/global1.css" />
    <link rel="stylesheet" href="../css/sign-up.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
    />
  </head>
  <body>
    <div class="login-5-register">
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
          <div class="have-an-account-container">
            <p class="have-an-account">Have an Account ?</p>
            <a href="log-in.php" class="sign-in">Sign in</a>
          </div>
        </div>
        <h1 class="sign-up">Sign up</h1>
        <form action="../../index.php?act=signUp" method="post" enctype="multipart/form-data">
        <button name="btn-signUp" class="rectangle-group">
          <div class="group-item"></div>
          <div class="sign-up1">Sign up</div>
        </button>
        <div class="instance-parent">
          <div class="enter-your-username-or-email-a-parent">
            <div class="enter-your-username">
              Enter email address
            </div>
            <input name="email" class="instance-child" type="email" placeholder=" email address" />

          </div>
          <div class="enter-your-password-parent">
            <div class="enter-your-username">Enter your Password</div>
            <input name="pw" class="instance-item" type="password" placeholder="Password" />

            <div class="username-or-email"></div>
          </div>
          <div class="component-parent">
            <div class="user-name-parent">
              <div class="user-name">User name</div>
              <input name="username" class="component-child" type="text" placeholder="Enter Your Username" />

            </div>
            <div class="contact-number-parent">
              <div class="user-name">Contact Number</div>
              <input name="tel" class="component-child" type="number" placeholder="Contact Number" />

            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
