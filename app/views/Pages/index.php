<?php echo "THE MAIN PAGE" ?>
<?php foreach ($data as $patient): ?>


    <h2>
        <?= $patient['name'] ?>
    </h2>


<?php endforeach ?>
<html>
<form action="index.php?url=doctors/logout" method="post">
    <button type='submit'>Log out</button>
</form>

</html>