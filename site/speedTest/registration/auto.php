<?php
    session_start();

    if (isset($_SESSION['user'])){
        header('location: ../speed.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='auto.css'>
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>
    <script src="user.js"></script>
</head>
<body style="background-image: url(../noise.png);">
    <div><div></div></div>
    <header></header>  
    <div class="wrapper">
        <div class="header">
            <div class="header_place">
                <div class="logo"></div>
                <div class="menu">
                    <a href="../speed.php"><div class="menu_punct">Home</div></a>
                    <a href="../autorization/auto.php"><div class="menu_punct">autorisation</div></a>
                    <a href="#"><div class="menu_punct">registration</div></a>
                    <a href="../logout.php"><div class="menu_punct">exit</div></a>
                </div>
                <div class="auto"></div>
            </div>
        </div>
        <div class="main">
            <div class="regis" id="main_heading">
                <h2>SpeedType</h2>
                <span style="font-size:20px;letter-spacing: 0.1em;">Create your own account</span>
            </div>
            <form action="server.php" method="post" enctype="multipart/form-data">
                <div class="enterText">
                        <div class="regis">
                            Login
                            <input type="text" name="input_login" placeholder="Enter login" >
                        </div>
                        <div class="regis" >
                            Nickname
                            <input type="text" name="input_nick" placeholder="Enter nickname">
                        </div>
                        <div class="regis">
                            Password
                            <input type="password" name="input_password" placeholder="Enter password" >
                        </div>
                        <div class="regis">
                            Repeat Password
                            <input type="password" name="input_repeated_password"  placeholder="Repeat password">
                            
                                <?php
                                if (isset($_SESSION['message'])){
                                    echo '<p class="pasError">' . $_SESSION['message'] .  '</p>';
                                }
                                unset($_SESSION['message']);
                                ?>
                             
                            
                        </div>
                    
                </div>
                <button class="create">Create account</button>
            </form>
        </div>
        <footer>
            Contact with us<br>
            <a href="https://mail.google.com/mail/u/0/#inbox">hdvdj7257@gmail.com</a>
        </footer>
    </div>
</body>
</html>