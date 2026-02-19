<?Php
session_start();

//hapus semua session
session_destroy();

//redirect ke login page
echo "<script>window.location.replace('../index.php')</script>";
?>