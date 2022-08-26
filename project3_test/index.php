<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project3_test/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet"></head>
<body>
    <div class="comment">
        <img src="/project3_test/img/osorosiki_white.png" alt="로고">
    </div>
    <audio src="/project3_test/video/spooky.mp3" autoplay loop type="audio/mp3"></audio>
    <div class="background">
        <video src="/project3_test/video/Halloween.mp4" autoplay loop muted class="video"></video>
    </div>

    <div class="pop_container">
        <div class="pop_start">
            <a href="#pop_info_1" class="btn_open">入場</a>      
        </div>
      
        <div id="pop_info_1" class="pop_wrap" style="display:none;">
        <div class="pop_inner">
            <p class="dsc">まだ遅くないです<br>本当にご入場いたしますか？</p>
            <button type="button" class="btn_yes" onclick="location.href='/project3_test/home.php';">はい</button>
            <button type="button" class="btn_close">いいえ</button>    
        </div>
    </div>
    </div>
    <script>
        var target = document.querySelectorAll('.btn_open');
        var btnPopClose = document.querySelectorAll('.pop_wrap .btn_close');
        var targetID;

        // 팝업 열기
        for(var i = 0; i < target.length; i++){
        target[i].addEventListener('click', function(){
            targetID = this.getAttribute('href');
            document.querySelector(targetID).style.display = 'block';
        });
        }

        // 팝업 닫기
        for(var j = 0; j < target.length; j++){
        btnPopClose[j].addEventListener('click', function(){
            this.parentNode.parentNode.style.display = 'none';
        });
        }
    </script>
</body>
</html>