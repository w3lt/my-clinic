<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link type="text/css" rel="stylesheet" href=<?= "/css/styles.css" ?> />
  <script src="/js/script.js"></script>
</head>

<body>
  <h2>Login to monitor patient details</h2>

  <button onclick="formOpen('id01')" style="width:auto;">Login</button>

  <div id="id01" class="modal">

    <form class="modal-content animate" action="index.php?url=doctors/login" method="post">
      <div class="imgcontainer">
        <span onclick="formClose('id01')" class="close" title="Close">&times;</span>
      </div>

      <div class="container">
        <label for="email"><b>Email</b></label>
        <input id="email" type="email" placeholder="doctor@hospital.com" name="email" required>

        <label for="password"><b>Password</b></label>
        <input id="login-password" type="password" placeholder="Password" name="password" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>

  <footer>Not having an account ?</footer>

  <button onclick="formOpen('id02')" style="width:auto;">Sign Up</button>

  <div id="id02" class="modal">
    <span onclick="formClose('id02')" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="index.php?url=doctors/register" method="post">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name<b></label>
        <input type="text" placeholder="Your name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="doctor@hospital.com" name="email" required>

        <label for="password"><b>Password</b></label>
        <input id="register-password" type="password" placeholder="Enter Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input id="confirm-password" type="password" placeholder="Repeat Password" name="psw-repeat" onkeyup="check();"
          required>
        <span id='message'></span>
        <br />


        <label for="gender">Gender :</label>
        <input type="radio" class="gender" name="gender" value="male" required="required">
        <label for="male">Male</label>
        <input type="radio" class="gender" name="gender" value="female">
        <label for="female">Female</label>
        <br />
        <label for="specialist">Speciality :</label>
        <input type="radio" id="heart" name="specialist" value="heart" required="required">
        <label for="heart">Heart</label>
        <input type="radio" id="neuron" name="specialist" value="neuron">
        <label for="neuron">Neuron</label>
        <input type="radio" id="skeleton" name="specialist" value="skeleton">
        <label for="skeleton">Skeleton</label>
        <br />
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="https://policies.google.com/terms?hl=en-US"
            style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </div>

</body>


</html>