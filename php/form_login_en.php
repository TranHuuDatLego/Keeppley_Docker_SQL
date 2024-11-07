<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reaction Login Form</title>
  <!-- Thêm favicon vào đây -->
  <link rel="icon" href="../images/keeppley_logo.webp" type="image/x-icon">

  <?php include '../php/login.php'; ?>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto|K2D');

    /* SVG */
    @keyframes blink {
      0% { ry: 5; }
      49% { ry: 5; }
      50% { ry: 0; }
      51% { ry: 5; }
    }

    .skin {
      fill: #eab38f;
    }

    .eyes {
      fill: #1f1f1f;
      animation: blink 10s alternate infinite;
    }

    .hair {
      fill: #2f1b0d;
    }

    .line {
      fill: none;
      stroke: #2f1b0d;
      stroke-width: 2px;
    }

    .arm, #mouth, #smile, .eyes, .hand, .eyebrow {
      transition: all 0.25s;
    }

    html, body {
      --light-main-color: #b0d2e5;
      --dark-main-color: rgba(102, 153, 204, 0.4);
      --darker-main-color: rgba(51, 102, 153, 0.9);
      background: var(--light-main-color);
      font-size: 16px;
      margin: 0;
      padding: 0;
      font-family: K2D, Roboto, Arial, Verdana, sans-serif;
    }

    form {
      display: inline-block;
      background: #fafafa;
      padding: 1.5rem;
      padding-top: 1rem;
      border: 1px solid var(--dark-main-color);
      position: absolute;
      top: 50%;
      left: 50%;
      width: 350px;
      transform: translate(-50%, -50%);
      box-sizing: border-box;
      border-radius: 4px;
      box-shadow: 0px 20px 20px -20px rgba(0, 0, 0, 0.25);
    }

    form svg {
      margin: auto;
      display: block;
    }

    fieldset {
      border: 0;
      padding: 0;
      margin: 1.2rem 0 0 0;
      position: relative;
      padding-top: 1rem;
    }

    legend {
      margin: 0;
      padding: 0;
      color: var(--darker-main-color);
      user-select: none;
      position: absolute;
      top: 0;
      left: 0;
    }

    fieldset>div {
      border: 1px solid var(--dark-main-color);
      border-radius: 3px;
      position: relative;
      margin-top: 0.5rem;
      background: white;
    }

    fieldset#submit-field {
      padding-top: 0;
    }

    fieldset#submit-field>div {
      border-color: var(--darker-main-color);
      background: var(--darker-main-color);
    }

    fieldset .placeholder {
      position: absolute;
      top: 50%;
      left: 1rem;
      transform: translate(0, -50%);
      z-index: 5;
      font-size: 1.1rem;
      transition: all 0.25s;
      color: #89a;
      pointer-events: none;
    }

    fieldset .placeholder.active {
      font-size: 0.6rem;
      color: #abc;
      margin-top: -0.8rem;
    }

    fieldset input {
      display: block;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      background: transparent;
      border: 0;
      padding: 1rem;
      font-size: 1.1rem;
      position: relative;
      z-index: 3;
      outline-color: var(--dark-main-color);
    }

    #show-password-container {
      color: var(--darker-main-color);
      display: block;
      position: absolute;
      top: 0rem;
      right: 0rem;
      height: 0.9rem;
      background: #fff;
      cursor: pointer;
      font-size: 0.9rem;
      user-select: none;
    }

    #show-password-container span {
      display: inline-block;
      width: 0.75rem;
      height: 0.75rem;
      border: 1px solid var(--dark-main-color);
      border-radius: 2px;
      vertical-align: -1px;
      position: relative;
      cursor: pointer;
    }

    #show-password-container.active span::before {
      content: "";
      background: var(--darker-main-color);
      display: block;
      width: 75%;
      height: 75%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 2px;
      opacity: 0.75;
    }

    fieldset.with-placeholder input {
      padding: 1.3rem 1rem 0.7rem 1rem;
    }

    fieldset input[type=submit] {
      border: 0;
      color: white;
      cursor: pointer;
      font-family: Roboto, K2D, Arial, Verdana, Sans-serif;
    }

    footer {
      position: absolute;
      bottom: 5px;
      left: 5px;
      font-size: 0.75rem;
    }

    .error-message {
      color: red;
      font-size: 14px;
    }
  </style>
</head>

<body>


  <form method="post" action="login.php">
    
    <svg width="250" height="250" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img"
      aria-labelledby="title  desc">
      <title id="title">Teacher</title>
      <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white
        collar.</desc>
      <defs>
        <clipPath id="scene">
          <circle cx="125" cy="125" r="115" />
        </clipPath>
        <clipPath id="lips">
          <path
            d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
        </clipPath>
      </defs>
      <g stroke="none" stroke-width="0" clip-path="url(#scene)">
        <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
        <g id="head">
          <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
          <path class="hair"
            d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
          <circle cx="125" cy="100" r="55" class="skin" />
          <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
          <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
          <rect x="119" y="140" width="12" height="40" class="skin" />
          <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
          <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right" />
          <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
          <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
          <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
          <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
          <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
          <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)"
            d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
          <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)"
            d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
          <path class="hair"
            d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
          <path id="mouth" fill="#d73e3e"
            d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
          <path id="smile" fill="white"
            d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z"
            clip-path="url(#lips)" />
        </g>
        <g id="shirt">
          <path fill="#8665c2"
            d="M 132,170 C 146,170 154,200 154,200 154,200 158,245 158,245 158,245 92,245 92,245 92,245 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z" />
          <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14"
            d="M 118,178 C 94,179 66,220 65,254" />
          <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14"
            d="M 132,178 C 156,179 184,220 185,254" />
          <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
          <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
          <circle cx="125" cy="188" r="4" fill="#5a487b" />
          <circle cx="125" cy="202" r="4" fill="#5a487b" />
          <circle cx="125" cy="216" r="4" fill="#5a487b" />
          <circle cx="125" cy="230" r="4" fill="#5a487b" />
          <circle cx="125" cy="244" r="4" fill="#5a487b" />
          <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left"
            d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" />
          <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right"
            d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278" />
        </g>
      </g>
    </svg>

    <!-- Enter Form here  -->
    <!-- <fieldset id="email-field" class="with-placeholder">
        
        <legend>Username</legend>
          <div>
            <input type="text" name="username" id="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required />
            <div class="placeholder">e.g. ABC123</div>
          </div>
          </fieldset> -->

          <fieldset id="email-field" class="with-placeholder">
        <legend>Username</legend>
        <div>
            <input type="text" name="username" id="email" autocomplete="off" autocorrect="off" autocapitalize="off"
                spellcheck="false" required />
            <div class="placeholder">e.g. ABC123</div>
        </div>
    </fieldset>
    <!-- <div class="error-message">Lỗi</div> -->
    <?php
    
     if (isset($_SESSION['error0'])): ?>
        <div class="error-message"><?php echo $_SESSION['error0']; ?></div>
    <?php endif; ?>

    <fieldset id="password-field">
        <legend>Password</legend>
        <span id="show-password-container">
            <span></span> Show Password
        </span>
        <div>
            <input type="password" name="password" id="password" autocomplete="nope" autocorrect="off" autocapitalize="off"
                spellcheck="false" required />
        </div>
    </fieldset>
    <fieldset id="submit-field">
        <legend></legend>
        <div>
            <input type="submit" name="submit" id="submit" value="Login" />
        </div>
    </fieldset>
    <p class="text-muted-foreground mt-4 text-center">You don't have account <a href="Signup_en.php" class="text-primary">Click here</a></p>
</form>

  <script>
    let svg = document.querySelector("svg");
    let email = document.querySelector("#email");
    let password = document.querySelector("#password");
    let mouth = document.querySelector("#mouth");
    let smile = document.querySelector("#smile");
    let eyeRight = document.querySelector("#eye-right");
    let eyeLeft = document.querySelector("#eye-left");
    let eyebrowRight = document.querySelector("#eyebrow-right");
    let eyebrowLeft = document.querySelector("#eyebrow-left");
    let armRight = document.querySelector("#arm-right");
    let armLeft = document.querySelector("#arm-left");
    let handRight = document.querySelector("#hand-right");
    let handLeft = document.querySelector("#hand-left");
    let showPassword = document.querySelector("#show-password-container");

    // logic for typing on the email field
    function updateMouthEyes(e) {
      let movePos = e.target.value.length > 30 ? 13.33 : e.target.value.length / 2.15;
      eyeRight.setAttribute("cy", 112);
      eyeLeft.setAttribute("cy", 112);
      eyeRight.setAttribute("cx", 142 + movePos)
      eyeLeft.setAttribute("cx", 96 + movePos);

      if (e.target.value.length < 4) {
        eyebrowLeft.style.transform = "translate(0, 0)";
        eyebrowRight.style.transform = "translate(0, 0)";
        mouth.setAttribute("d", "M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,138  140,143  125,143  110,143 109,138 106,132 Z");
        smile.setAttribute("d", "M125,138 C 140,138 143.5,132 143.5,132 143.5,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,138 125,138 Z");
      } else if (e.target.value.indexOf("@") > 0) {
        eyebrowLeft.style.transform = "translate(0, -2px)";
        eyebrowRight.style.transform = "translate(0, -2px)";
        mouth.setAttribute("d", "M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,149  125,149  116,149 109,142 106,132 Z");
        smile.setAttribute("d", "M125,144 C 140,144 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,144 125,144 Z");
      } else {
        eyebrowLeft.style.transform = "translate(0, -0.5px)";
        eyebrowRight.style.transform = "translate(0, -0.5px)";
        mouth.setAttribute("d", "M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z");
        smile.setAttribute("d", "M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z");
      }
    }

    // reset the eyes and eyebrows to their original position after leaving a field
    function resetEyesMouth(e) {
      let eyeRight = document.querySelector("#eye-right");
      let eyeLeft = document.querySelector("#eye-left");
      eyeRight.setAttribute("cy", 107);
      eyeLeft.setAttribute("cy", 107);
      eyeRight.setAttribute("cx", 148)
      eyeLeft.setAttribute("cx", 102);
      eyebrowLeft.style.transform = "translate(0, 0)";
      eyebrowRight.style.transform = "translate(0, 0)";
      if (e.target.value.indexOf("@") < 0) {
        mouth.setAttribute("d", "M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z");
        smile.setAttribute("d", "M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z");
      }
    }

    // generic: inputs with placeholder will have some animation to minimize the placeholder
    document.querySelectorAll("fieldset.with-placeholder input").forEach(function (el, idx) {
      el.addEventListener("focus", function () {
        this.parentNode.querySelector(".placeholder").classList.add("active");
      });
      el.addEventListener("blur", function () {
        if (this.value == "") {
          this.parentNode.querySelector(".placeholder").classList.remove("active");
        }
      })
    });

    // emails animations
    email.addEventListener("focus", updateMouthEyes);
    email.addEventListener("keyup", updateMouthEyes);
    email.addEventListener("blur", resetEyesMouth);

    // password animation: move arms to cover eyes on focus, and return to original position on blur
    password.addEventListener("focus", function (e) {
      svg.classList.add("arms-up");
      if (svg.classList.contains("looking")) {
        updateMouthEyes(e);
        armLeft.setAttribute("d", "M 118,178 C 64,206 49,145 86,106");
        armRight.setAttribute("d", "M 132,178 C 186,206 201,145 164,106");
        handLeft.setAttribute("d", "M 81,103 C 76,96 90,76 93,79 95,80 96,81 91,88 102,76 106,71 109,73 112,76 102,87 99,90 102,87 112,74 116,77 119,80 105,94 103,96 107,91 114,84 116,86 119,89 100,120 89,111");
        handRight.setAttribute("d", "M 169,103 C 174,96 160,76 157,79 155,80 154,81 159,88 148,76 144,71 141,73 138,76 148,87 151,90 148,87 138,74 134,77 131,80 145,94 147,96 143,91 136,84 134,86 131,89 150,120 161,111");
      } else {
        armLeft.setAttribute("d", "M 118,178 C 64,206 49,145 86,115");
        armRight.setAttribute("d", "M 132,178 C 186,206 201,145 164,115");
        handLeft.setAttribute("d", "M 81,110 C 76,103 90,83 93,86 95,87 96,88 91,95 102,83 106,78 109,80 112,83 102,94 99,97 102,94 112,81 116,84 119,87 105,101 103,103 107,98 114,91 116,93 119,96 100,127 89,118");
        handRight.setAttribute("d", "M 169,110 C 174,103 160,83 157,86 155,87 154,88 159,95 148,83 144,78 141,80 138,83 148,94 151,97 148,94 138,81 134,84 131,87 145,101 147,103 143,98 136,91 134,93 131,96 150,127 161,118");
      }
    });
    password.addEventListener("input", function (e) {
      if (showPassword.classList.contains("active")) { updateMouthEyes(e) }
    });
    password.addEventListener("blur", function (e) {
      svg.classList.remove("arms-up");
      resetEyesMouth(e);
      armLeft.setAttribute("d", "M 118,178 C 94,179 66,220 65,254");
      armRight.setAttribute("d", "M 132,178 C 156,179 184,220 185,254");
      handLeft.setAttribute("d", "M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278");
      handRight.setAttribute("d", "M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278");
    });

    // logic for the password show/hide value
    showPassword.addEventListener("click", function () {
      this.classList.toggle("active");
      svg.classList.toggle("looking");
      password.type = this.classList.contains("active") ? "text" : "password";
    });


  </script>


</body>

</html>