<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link type="text/css" rel="stylesheet" href=<?= ROOT . "/public/css/styles.css" ?> />
  <script src="public/js/script.js"></script>
</head>

<body>
  <h1>Login</h1>
  <p id="waiting"></p>
  <div class="divider"></div>
  <form action="/index.php?url=doctors/login" method="post">
    <label for="input-email">Email</label>
    <br />
    <input id="input-email" name="email" value="" required="required" />
    <p id="validationEmailResponse"></p>
    <label for="input-password">Password</label>
    <br />
    <input id="input-password" name="password" type="password" value="" required="required" />
    <input id="submit-btn" type="submit" value="Login" />
    <p id="validationPasswordResponse"></p>
  </form>
  </div>
  <footer>Not having an account ? Sign up <a href='index.php?url=doctors/register'>here</a></footer>
</body>


</html>