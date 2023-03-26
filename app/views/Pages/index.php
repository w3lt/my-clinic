<html>

<head>
    <title>Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href=<?= "/css/styles.css" ?> />
    <script src="/js/script.js"></script>
</head>

<h1>Main Page </h2>

    <h2>Patient Monitors</h2>

    <button onclick="formOpen('id01')" style="width:auto;">Add new Patient</button>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="index.php?url=pages/index" method="post">
            <div class="imgcontainer">
                <span onclick="formClose('id01')" class="close" title="Close">&times;</span>
            </div>

            <div class="container">

                <label for="name"><b>Name<b></label>
                <input type="text" placeholder="Patient name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input id="email" type="email" placeholder="patient@hospital.com" name="email" required>

                <label for="phone"><b>Phone number<b></label>
                <input type="text" placeholder="Patient number" name="phone" required>

                <label for="health_condition"><b>Description<b></label>
                <input type="text" placeholder="Health condition of patient" name="health_condition" required>

                <button type="submit">Create Patient</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            </div>
        </form>
    </div>

</html>

<?php foreach ($data as $key => $value): ?>

    <td>
        <?php echo "<br> Name : " . $value['name'] . "<br>" ?>
    </td>
    <td>
        <?php echo "Email : " . $value['email'] . "<br>" ?>
    </td>
    <td>
        <?php echo "Phone number : " . $value['phone'] . "<br>" ?>
    </td>
    <td>
        <?php echo "Description : " . $value['health_condition'] . "<br>" ?>
    </td>
    <td><a href="javascript:confirmDelete('index.php?url=pages/delete/<?php echo $value['id']; ?>')"
            class="btn btn-primary btn-sm" role="button">Delete</a></td>


<?php endforeach ?>


<html>
<form action="index.php?url=doctors/logout" method="post">
    <button type='submit'>Sign out</button>
</form>

</html>