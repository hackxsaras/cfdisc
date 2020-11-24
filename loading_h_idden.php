<?php
    echo "
<style>
body{
    margin:0;
}
.lc{
    position:absolute;
    top:40vh;
    left:50vw;
    transform:translateX(-50%) translateY(-50%);
    height:80px;
    width:65px;
}
.load{
    height:80px;
    width:65px;
    /*-webkit-animation:rot 3s infinite ease-in-out;*/
    transform-style:preserve-3d;
    position:absolute;
}
.load div{
    width:15px;
    height:80px;
    position:absolute;
    border-radius:7.5px;
    background:#0f0;
    -webkit-animation:gs1 2s linear infinite;
    /*box-shadow:0px 0px 10px #000;*/
}
.load .fd{
    -webkit-animation:gs1 2s linear infinite, op 2s linear infinite;
    -webkit-animation-delay:0s, 1s;
    opacity:0;
}
.load .sd{
    left:16px;
    -webkit-animation-delay:1s;
}
.load .td{
    left:32px;
}
.load .qd{
    left:48px;
    -webkit-animation:gs1 2s linear infinite, op 2s linear infinite;
    -webkit-animation-delay:1s, 0s;
}
.random_text{
    color:#ccc;
    position:absolute;
    top:60vh;
    left:50vw;
    transform:translateX(-50%) translateY(-50%);
    height:80px;
    width:300px;
    text-align:center;
    font-size:20px;
}
@-webkit-keyframes gs1{
    from, to, 10%,90%{height:80px;transform:none;}
    40%,60%{height:15px; transform:translateY(32.5px);}
}
@-webkit-keyframes op{
    from, to, 10%,90%{opacity:0;}
    40%,60%{opacity:1;}
}
@-webkit-keyframes rot{
    from{transform:none;}
    to{transform:rotate(360deg);}
}
</style>
<div class=\"lc\">
    <div class=\"load\">
        <div class=\"fd\"></div>
        <div class=\"sd\"></div>
        <div class=\"td\"></div>
        <div class=\"qd\"></div>
    </div>
</div>
<p class=\"random_text\">
    I am too busy today. Some Long Long pretty pretty text.
</p>
";
?>