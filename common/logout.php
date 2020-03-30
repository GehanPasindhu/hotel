<?php

session_start();
if (session_destroy()) {
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
       
}
?>