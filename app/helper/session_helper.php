<?php
session_start();
function isLoggedIn()
{
    if (isset($_SESSION['doctor_id'])) {
        return true;
    }
    return false;
}
?>