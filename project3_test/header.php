<?php
  session_start();

  if(isset($_SESSION["userid"]))
    $userid = $_SESSION["userid"];
  else{
    $userid = "";
  }

  if(isset($_SESSION["username"]))
    $username = $_SESSION["username"];
  else
    $username = "";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="/project3_test/css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <ul class="myMenu">
            <li class="menu1" id="menu1">ホラー体験
                <ul class="menu1_s submenu">
                    <li><a href="/project3_test/map.php">ホラースポット</a></li>
                </ul>
            </li>
            <li class="menu2">掲示板
                <ul class="menu2_s submenu">
                    <li><a href="/project3_test/list.php?table=_review">レビュー掲示板</a></li>
                    <li><a href="/project3_test/list.php?table=_free">自由掲示板</a></li>
                    <li><a href="/project3_test/list.php?table=_art">作品推薦</a></li>
                    <li><a href="/project3_test/list.php?table=_story">怪談</a></li>
                </ul>
            </li>
        </ul>
        <div class="burger_wrap">
            <a href="javascript:burgermenu();"><img src="/project3_test/img/burgermenu.png" alt="menu" id="burger"></a>
        </div>
        <div class="Menu_max" id="Menu_max">
<?php
  if(!$userid){
?>
            <ul class="myMenu_max">
                <li><a href="/project3_test/login_form.php">LOGIN</a></li>
                <li><a href="/project3_test/member_form.php">JOIN</a></li>
            </ul>
<?php
  }else{
    $logged = $username;
?>
            <ul class="myMenu_max">
                <li><a href="/project3_test/mypage.php"><?=$logged?>様, ようこそ</a></li>
                <li class="menu2_s submenu"><a href="/project3_test/logout.php">LOGOUT</a></li>
            </ul>
<?php
  }
?>
            <ul class="myMenu_max">ホラー体験
                <li><a href="/project3_test/map.php">- ホラースポット</a></li>
            </ul>
            <ul class="myMenu_max">掲示板
                <li><a href="/project3_test/list.php?table=_review">- レビュー掲示板</a></li>
                <li><a href="/project3_test/list.php?table=_free">- 自由掲示板</a></li>
                <li><a href="/project3_test/list.php?table=_art">- 作品推薦</a></li>
                <li><a href="/project3_test/list.php?table=_story">- 怪談</a></li>
            </ul>
        </div>
        <script src="/project3_test/js/burgermenu.js"></script>
        <ul class="logo_wrap">
            <li class="logo">
                <a href="/project3_test/home.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="/project3_test/img/osorosiki_white.png">
                </a>
            </li>
        </ul>
<?php
  if(!$userid){
?>
        <ul class="myMenu">
            <li class="menu2_s submenu"><a href="/project3_test/login_form.php">LOGIN</a></li>
            <li class="menu2_s submenu"><a href="/project3_test/member_form.php">JOIN</a></li>
        </ul>
<?php
  }else{
    $logged = $username;
?>
        <ul class="myMenu">
            <li class="menu2_s submenu"><a href="/project3_test/mypage.php" class='logged'><?=$logged?>様, ようこそ</a></li>
            <li class="menu2_s submenu"><a href="/project3_test/logout.php">LOGOUT</a></li>
        </ul>
<?php
  }
?>
    </div>
    <script></script>
</body>

</html>