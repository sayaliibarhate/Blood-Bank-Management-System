<?php
session_start();
session_destroy();

echo "<script>alert('You have been logged out')</script>";
echo "<script>location.href='alogin.php'</script>";
exit();
?>