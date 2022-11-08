<?php

require_once 'init.php';

// accessible uniquement si tu es connecte
if (!isset($_SESSION['email'])) {
    header('Location: form.php');
    die();
}
else {
    echo $_SESSION['email'] .'<br>';
}
?>
<ul>
    <li>
        <a href="form.php">
            Login
        </a>
    </li>
    <li>
        <a href="logout.php">
            Se deconnecter
        </a>
    </li>
</ul>   
