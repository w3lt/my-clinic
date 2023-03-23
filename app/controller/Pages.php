<?php
class Pages extends Controller
{
    public function index()
    {
        if (!isLoggedIn()) {
            redirect('doctors/login');
        }
    }
}
?>