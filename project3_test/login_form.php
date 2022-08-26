<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project3_test/css/member.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
      <a href="/project3_test/home.php"><img src="/project3_test/img/osorosiki_white.png" alt="home"></a>
    </div>
    <div class="form_wrap">
        <form id="login" action="/project3_test/login.php" method="POST" class="joinForm">                                                                    
            <h2 class="form_title">ログイン</h2>
            <div class="textForm">
              <input type="text" class="id" id="id" name="id" placeholder="id">
            </div>
            <div class="textForm">
              <input type="password" class="pw" id="pw" name="pw" onchange="check_pw()" placeholder="password">
            </div>
            <div class="submit_wrap">
              <input class="submit" type="button" value="Login" onclick="check_input();">
            </div>
          </form>
    </div>
    <script>
      function check_input(){
        const id = document.getElementById('id').value;
        const pw = document.getElementById('pw').value;

        if(id==""){
          alert("아이디를 입력하세요!");
          return;
        }
        if(pw==""){
          alert("비밀번호를 입력하세요!");
          return;
        }
        document.getElementById('login').submit();
      }
    </script>
</body>
</html>
