<?php require_once(APPROOT . 'views/inc/header.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href=<?= ROOT . "/public/css/styles.css" ?> />
</head>

<body>
    <h1>Register</h1>
    <p id="waiting"></p>
    <div class="divider"></div>
    <form action="/index.php?url=doctors/register" method="post" onsubmit="validationForm()">
        <label for="input-name">Your name</label>
        <br />
        <input id="input-name" name="name" value="" />
        <p id="validationEmailResponse"></p>
        <label for="input-email">Email register</label>
        <br />
        <input id="input-email" name="email" type="email" value="" />
        <p id="validationEmailResponse"></p>
        <label for="input-password">Password</label>
        <br />
        <input id="input-password" name="password" type="password" value="" />
        <p id="validationPasswordResponse"></p>
        <label for="gender">Gender :</label>
        <input type="radio" class="gender" name="gender" value="male">
        <label for="male">HTML</label>
        <input type="radio" class="gender" name="gender" value="female">
        <label for="female">CSS</label>
        <br />
        <label for="specialist">Speciality :</label>
        <input type="radio" id="heart" name="specialist" value="heart">
        <label for="heart">Heart</label>
        <input type="radio" id="neuron" name="specialist" value="neuron">
        <label for="neuron">Neuron</label>
        <input type="radio" id="skeleton" name="specialist" value="skeleton">
        <label for="skeleton">Neuron</label>
        <br />
        <input id="submit-btn" type="submit" value="Register" />
    </form>
    </div>
    <script src="public/js/index.js"></script>
    <footer>Already have an account ? <a href='index.php?url=doctors/login'>Login</a></footer>
</body>

</html>
<?php require_once(APPROOT . 'views/inc/footer.php'); ?>