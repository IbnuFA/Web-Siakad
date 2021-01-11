<?php
// mulai session
session_start();
 
// untuk menghancurkan session awal
session_destroy();

header("Location: index.php");
?>