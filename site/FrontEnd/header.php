<style>
    *{
        margin:0;
    }
    a{
        all:unset;
        cursor:pointer;
    }
    body{
        padding:0 0 0 8px;
    }
    header{
        width:initial;
        height:116px;
        margin-right:8px;
        background-color: #171717;
        display:flex;
        justify-content: space-around;
        align-items:center;
    }
    nav{
        width:379px;
        display:flex;
        justify-content:space-between;
    }
    .logo{
        width:86px;
        height:23px;
        background-image: url(img/logo.svg);
    }
    .training{
        height:34%;
        width:100%;
        padding:5px 0;
        text-align:center;
        opacity: 64%;
    }
    .training:hover{
        background-color: #8338EC;
        opacity: 100;
    }
    .puncts{
        display:flex;
        align-items:center;
        height:50px;
    }
    .puncts__nav{
        
        position:absolute;
        width: 242px;
        height: 117px;
        top: 81px;
        margin-left:-70px;

        background: rgba(54, 54, 54, 0.64);
        backdrop-filter: blur(18px);

        border-radius: 24px;
        display:none;
        flex-direction:column;
        align-items:center;
        justify-content:space-around;
        overflow:hidden;
    }
    .punct_nav:hover{
        display:flex;
    }
    .puncts:hover .puncts__nav{
        display:flex;
    }
</style>

<header>
    <div class="logo"></div>
    <nav>
        <a href="forum.php"><div class="puncts">Home</div></a>
        <div class="puncts">TypeTraining
            <div class="puncts__nav">
                <div class="training">Speed training</div>
                <div class="training">Reaction training</div>
                <div class="training">Coding training</div>
            </div>
        </div>
        <a href=""><div class="puncts">Vocal tune</div></a>
    </nav>
    <a href="">autorization</a>
</header>