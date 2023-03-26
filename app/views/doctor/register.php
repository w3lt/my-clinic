<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href=<?= "/css/styles.css" ?> />
    <script src="js/script.js"></script>
</head>

<body>
    <h1>Register</h1>
    <p id="waiting"></p>
    <div class="divider"></div>
    <form action="/index.php?url=doctors/register" method="post">
        <label for="input-name">Your name</label>
        <br />
        <input id="input-name" name="name" value="" required="required" />
        <p id="validationEmailResponse"></p>
        <label for="input-email">Email register</label>
        <br />
        <input id="input-email" name="email" type="email" value="" required="required" />
        <p id="validationEmailResponse"></p>
        <label for="input-password">Password</label>
        <br />
        <input id="input-password" name="password" type="password" value="" required="required" />
        <p id="validationPasswordResponse"></p>
        <label for="gender">Gender :</label>
        <input type="radio" class="gender" name="gender" value="male" required="required">
        <label for="male">HTML</label>
        <input type="radio" class="gender" name="gender" value="female">
        <label for="female">CSS</label>
        <br />
        <label for="specialist">Speciality :</label>
        <input type="radio" id="heart" name="specialist" value="heart" required="required">
        <label for="heart">Heart</label>
        <input type="radio" id="neuron" name="specialist" value="neuron">
        <label for="neuron">Neuron</label>
        <input type="radio" id="skeleton" name="specialist" value="skeleton">
        <label for="skeleton">Skeleton</label>
        <br />
        <input id="submit-btn" type="submit" value="Register" />
    </form>
    </div>
    <footer>Already have an account ? <a href='index.php?url=doctors/login'>Login</a></footer>
</body>

</html>