<?php

session_start();
$isThere = 1;
if(isset($_SESSION['user'])){
    $db_connect = mysqli_connect('localhost', 'root', '', 'user');

    ?>
    <?= $id = $_SESSION['user']['id'] ?>
    <?php

    $cpm = $_POST['cpm'];
    $wpm = $_POST['wpm'];
    $acc = $_POST['acc'];
    // $words = mysqli_query($db_connect, "SELECT `record`, 'wpm', 'accuracy' FROM `user` WHERE `id` = '{$id}'");
    // $word = mysqli_fetch_assoc($words);
    // print_r($word);
    // $wpmN = int($word['wpm']);
    // $cpmN = $word['record'];
    // $accN = int($word['accuracy']);
    $words = mysqli_query($db_connect, "SELECT * FROM `user` WHERE `id` = '{$id}'");
    $word = mysqli_fetch_assoc($words);
    $accN = $word['accuracy'];
    
    $words = mysqli_query($db_connect, "SELECT `record` FROM `user` WHERE `id` = '{$id}'");
    $word = mysqli_fetch_assoc($words);
    $cpmN = $word['record'];

    $mysql = new mysqli('localhost', 'root', '', 'user');
    $words = $mysql->query("SELECT * FROM `user` WHERE `id` = '{$id}'");
    $word = $words->fetch_assoc();
    $wpmN = $word['wpm'];
    
    // $result = $mysql->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");
    // $user = $result->fetch_assoc();

    if($cpm > $cpmN){
        $record == mysqli_query($db_connect, "UPDATE user SET `record` = '{$cpm}', `wpm` = '{$wpm}', `accuracy` = '{$acc}'  WHERE `id` = '{$id}'");
        echo $wpm . ' ' . $cpm . ' ' . $acc . ' ' . $isThere;
    }else if($cpmN == 0){
        echo 0 . ' ' . 0 . ' ' . 0 . ' ' . $isThere;
    }
    else{
        echo $wpmN . ' ' . $cpmN . ' ' . $accN . ' ' . $isThere;
    }
}elseif($_SESSION['delete'] == 2){
    echo $_SESSION['delete'];
    echo $_SESSION['delete'] = 0;
}
echo $_SESSION['delete'];
    // $words = mysqli_query($db_connect, "SELECT `record`, FROM `user` WHERE `id` = '{$id}'");
    // $word = mysqli_fetch_assoc($words);
    // $cpmN = $word['record'];

    // $words = mysqli_query($db_connect, "SELECT 'wpm' FROM `user` WHERE `id` = '{$id}'");
    // $word = mysqli_fetch_assoc($words);
    // $wpmN = int($word['wpm']);

    // $words = mysqli_query($db_connect, "SELECT 'accuracy' FROM `user` WHERE `id` = '{$id}'");
    // $word = mysqli_fetch_assoc($words);
    // $accN = int($word['accuracy']);
?>
