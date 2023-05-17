<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='speed.css'>
    <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

</head>
<body style="background-image: url(noise.png);">
    <div><div></div><br/><div class="showResult"></div><div class="showRecord"></div></div>
    <header></header>  
    <div class="wrapper">
        <div class="header">
            <div class="header_place">
                <div class="logo"></div>
                <div class="menu">
                    <a href="speed.php"><div class="menu_punct">Home</div></a>
                    <a href="autorization/auto.php"><div class="menu_punct">autorisation</div></a>
                    <a href="registration/auto.php"><div class="menu_punct">registration</div></a>
                    <a href="leader/leader.php"><div class="menu_punct">leaders</div></a>
                </div>
                <div class="auto">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <?= $_SESSION['user']['name'] ?>
                        <lord-icon
                            src="https://cdn.lordicon.com/bhfjfgqz.json"
                            trigger="hover"
                            colors="primary:#121331"
                            state="hover"
                            style="width:30px;height:250px">
                        </lord-icon>
                        <a class="navigation" href="logout.php">exit</a>
                    <?php } else { ?>
                        autorization
                        <a class="navigation" style="display:none;" href="autorization/auto.php">try</a>
                    <?php } ?>
                </div>
                
            </div>
        </div>
        <div class="main">
            <div class="main_texting">
                <div class="speedTest">Speed typing test</div>
                <div class="typeTest">Fast Type For 1 Minute</div>
                <div class="circleSquare">
                    <div class="indicator"><div class="circle" id="second"></div><div class="indicator_font">second</div></div>
                    <div class="indicator"><div class="circle" id="wpm"></div><div class="indicator_font">WPM</div></div>
                    <div class="indicator"><div class="circle" id="cpm"></div><div class="indicator_font">CPM</div></div>
                    <div class="indicator"><div class="circle" id="accuracy"></div><div class="indicator_font">accurace</div></div>
                </div>
                <div class="string">
                    <div class="enter" onclick=" speed(word);document.getElementById('myInput').focus(); return false;">
                        <input type="text" id="myInput">
                        <div class="mainDiv"><div class="bg"></div></div>
                        <div class="invis">
                            <div id="textAfter">
                            </div>
                            <div id="textNow"></div>
                        </div>
                        <div  id="text" class="text"></div>

                    </div>
                </div>
                <div class="Reboot" onclick="Reboot()">
                    <lord-icon
                        src="https://cdn.lordicon.com/akuwjdzh.json"
                        trigger="hover"
                        colors="primary:#ffffff"
                        style="width:50px;height:50px">
                    </lord-icon>
                </div>
                <div class="nowRecord"></div>
            </div>
        </div>
        <footer>
            Contact with us<br>
            <a href="https://mail.google.com/mail/u/0/#inbox">hdvdj7257@gmail.com</a>
        </footer>
    </div>
    <script type="text/javascript" src="speed.js"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</body>
</html>