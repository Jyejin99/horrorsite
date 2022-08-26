<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project3_test/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1&display=swap" rel="stylesheet">
    <title>main</title>
</head>
<body>
    <img id="img1" style="position:absolute; left:0; top:0; z-index:999; width: 50px; opacity: 70%;" src="/project3_test/img/ghost.png">
    <script src="/project3_test/js/mouse.js"></script>
    <main>
        <div class = "info_wrap">
            <div class = "info">
                <div class = info_logo>
                    <img src="/project3_test/img/osorosiki_white.png" width="60%" height="60%" >
                </div>
                <div class = info_story>
                    <h3>
                        ホラーマニア向けサイトで、怖い場所に直接行くことができ、<br>
                        同じ趣味を持つ人と趣味を共有することができます。
                    </h3>
                </div>
            </div>
            <div class ="map">
                <a href="/project3_test/map.php"><img src = "/project3/img/map.png" id = "map_i"></a>
            </div>
        </div>
        <div class="info_wrap2">
            <div class = "board_box" >
                <a href="/project3_test/list.php?table=_review"><img src="/project3_test/img/review.png" alt="" class="reveiw"></a>
            </div>
            <div class = "board_box" >
                <a href="/project3_test/list.php?table=_free"><img src="/project3_test/img/free.png" alt=""></a>
            </div>
            <div class = "board_box">
                <a href="/project3_test/list.php?table=_art"><img src="/project3_test/img/art.png" alt=""></a>
            </div>
            <div class = "board_box">
                <a href="/project3_test/list.php?table=_story"><img src="/project3_test/img/story.png" alt=""></a>
            </div>
        </div>

    </main>
</body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/footer.php";?>