<?php
// $validUserName = 'admin';
// $validPassword = '123';
// $userName = $_POST['userName'];
// $password = $_POST['password'];
// $isRight = false;
// if ($userName == $validUserName && $password == $validPassword){
//     $isRight = $validUserName;
// }else{
//     $isRight = 0;
// }
// echo $isRight;


// $db_connect = mysqli_connect('localhost', 'accounts', '', 'accounts');

// $login = $_POST['login'];
// $password = $_POST['password'];
// $name = $_POST['nickName'];
// $rand_index = rand(100000, 999999);

// $w = false;
// if($login.length > 4 and (string($password).length > 8) and $name.length > 4){
//     mysqli_query($db_connect, "INSERT INTO `accounts`(`id`, `login`, `password`, `name`) VALUES ('{$rand_index}','{$login}','{$password}','{$name}')");
//     $w = true;
// }
// echo $w;
session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'user');

if (!$db_connect){
    die("Total Error connecting databse");
}
$login = $_POST['input_login'];
$password = $_POST['input_password'];
$password_confirm = $_POST['input_repeated_password'];
$name = $_POST['input_nick'];
$rand_index = rand(100000, 999999);
$check_index = mysqli_query($db_connect, "SELECT * FROM user WHERE number='$rand_index'");
$check_user = mysqli_query($db_connect, "SELECT * FROM user WHERE login='$login'");
while (mysqli_num_rows($check_index) != 0){
    $rand_index = rand(100000, 999999);
    $check_index = mysqli_query($db_connect, "SELECT * FROM user WHERE number='$rand_index'");
}
$numberOfLogins = mysqli_num_rows($check_user);
if ($password === $password_confirm && $numberOfLogins == 0 && strlen($password) >= 3 && strlen($login) >= 3 && strlen($name) >= 3){
    $password = md5($password);
    mysqli_query($db_connect, "INSERT INTO `user` (`id`, `login`, `password`, `name`, `record`) VALUES ('$rand_index', '$login', '$password', '$name', 0)");
    header('Location: ../autorization/auto.php');
}
elseif (strlen($password) < 3){
    $_SESSION['message'] = "Пароль слишком короткий(I<3)";
    header('Location: auto.php');
}
elseif(strlen($login) < 3){
    $_SESSION['message'] = 'Логин слишком короткий(I<3)';
    header('Location: auto.php');
}
elseif(strlen($name) < 3){
    $_SESSION['message'] = 'Никнейм слишком короткий(I<3)';
    header('Location: auto.php');
}
elseif($numberOfLogins > 0){
    $_SESSION['message'] = 'такой логин уже существует';
    header('Location: auto.php');
}
elseif($password != $password_confirm){
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: auto.php');
}else{
    $_SESSION['message'] = 'Неккоректно введены данные';
    header('Location: auto.php');
};


?>