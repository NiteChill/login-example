<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="./assets/interface/login.module.css">
  <link rel="stylesheet" href="./default.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
  <div class="container">
    <p class="title display-medium">Welcome back!</p>
    <form method="post">
      <div class="text-field" id="mailField">
        <div class="state-layer" style="padding-right: 1rem" id="mailStateLayer">
          <div class="leading-icon">
            <span class="material-symbols-outlined">alternate_email</span>
          </div>
          <div class="content">
            <p class="label body-large" id="mailLabel">Email</p>
            <input type="email" name="email" class="input body-large" id="mailInput">
          </div>
        </div>
        <div class="active-indicator">
          <div class="indicator" id="mailIndicator"></div>
        </div>
      </div>
      <div class="text-field" id="passwordField">
        <div class="state-layer" id="passwordStateLayer">
          <div class="leading-icon">
            <span class="material-symbols-outlined">key</span>
          </div>
          <div class="content">
            <p class="label body-large" id="passwordLabel">Password</p>
            <input type="password" name="password" class="input body-large" id="passwordInput">
          </div>
          <div class="trailing-icon" style="display: none" id="passordIcon">
            <span class="material-symbols-outlined">
              visibility
            </span>
          </div>
        </div>
        <div class="active-indicator">
          <div class="indicator" id="passwordIndicator">
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="text-button">
          <div class="state-layer">
            <p class="label label-large">Sign up</p>
          </div>
        </div>
        <button class="button" type="submit">
          <div class="state-layer">
            <p class="label label-large">Log in</p>
          </div>
        </button>
      </div>
    </form>
  </div>
</body>
<script src="./assets/interface/login.module.js"></script>
</html>