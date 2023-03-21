<?php require_once(APPROOT.'views/inc/header.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href=<?=ROOT."/public/css/styles.css"?>/> 
  </head>

  <body>
      <h1>Login</h1>
      <p id="waiting"></p>
      <div class="divider"></div>
      <form action="/index.php?url=doctors/login" method="post" onsubmit="validationForm()">
        <label for="input-email">Email</label>
        <br />
        <input id="input-email" name="email" value=""/>
        <p id="validationEmailResponse"></p>
        <label for="input-password">Password</label>
        <br />
        <input id="input-password" name="password" type="password" value=""/>
        <input id="submit-btn" type="submit" value="Login" />
        <p id="validationPasswordResponse"></p>
      </form>
    </div>
    <script src="public/js/index.js"></script>
  </body>

</html>
 <?php require_once(APPROOT.'views/inc/footer.php'); ?>