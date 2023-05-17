<script>
    localStorage.setItem('wpm', 0);
    localStorage.setItem('cpm', 0);
    localStorage.setItem('cpm', 0);
</script>
<?php
session_start();

if(isset($_SESSION['user']))
    unset($_SESSION['user']);
$_SESSION['delete'] = 2;
header('Location: autorization/auto.php');
?>
