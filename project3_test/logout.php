<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    
    echo("
        <script>
            location.href = '/project3_test/home.php';
        </script>
    ")
?>