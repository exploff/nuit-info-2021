<?php
session_start();


unset($_SESSION['id']);
unset($_SESSION['double_auth']);

header('Location: ../index.php');
exit();