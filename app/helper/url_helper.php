<?php
function redirect($page)
{
    header('location:index.php?url=' . $page);
}
?>