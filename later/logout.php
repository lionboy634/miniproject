<?php
    session_start();
    session_unset($_SESSION['id']);
    session_destroy();
?>