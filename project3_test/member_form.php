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
        <form id="member" action="/project3_test/insert.php" method="POST" class="joinForm">                                                                    
            <h2 class="form_title">会員加入</h2>
            <div class="textForm">
              <div class = " idform_text">
                <input type="text" class="id" id="id" name="id" placeholder="id">
              </div>
              <div class = "idform_btn">
                <input type="button" onclick="check_id()" value='중복체크'>
              </div>
            </div>
            <div class="textForm">
              <input type="password" class="pw" id="pw" name="pw" onchange="check_pw()" placeholder="password">
            </div>
             <div class="textForm">
              <input type="password" class="pw" id="pw_confirm" onchange="check_pw()" placeholder="password-confirm">
            </div>
            <span id="check" class="check"></span>
            <div class="textForm">
              <input type="text" class="name" id="name" name="name" placeholder="name">
            </div>
             <div class="textForm">
              <input type="text" class="email" id="email" name="email" placeholder="email">@<input type="text" class="emailaddress" id="emailaddress" name="emailaddress" placeholder="emailaddress">
            </div>
            <div class="textForm">
              <input type="text" class="nickname" id="nickname" name="nickname" placeholder="nickname">
            </div>
            <div class="submit_wrap">
              <input class="submit" type="button" value="sign-up" onclick="check_input();">
            </div>
        </form>
    </div>
    <script>
      function check_pw(){
        const pw = document.getElementById('pw').value;
        const pw_confirm = document.getElementById('pw_confirm').value;
        if(pw!=''&&pw_confirm!=''){
          if(pw==pw_confirm){
            document.getElementById('check').innerHTML='パスワードが一致します。';
            document.getElementById('check').style.color = 'blue';
            document.getElementById('check').style.fontSize = '0.8rem';
          }
          else{
            document.getElementById('check').innerHTML='パスワードが一致しません。';
            document.getElementById('check').style.color = 'red';
            document.getElementById('check').style.fontSize = '0.8rem';
          }
        }
      }

      function check_input(){
        const id = document.getElementById('id').value;
        const pw = document.getElementById('pw').value;
        const pw_confirm = document.getElementById('pw_confirm').value;
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const emailaddress = document.getElementById('emailaddress').value;
        const nickname = document.getElementById('nickname').value;

        if(id==""){
          alert("아이디를 입력하세요!");
          return;
        }
        if(pw==""){
          alert("비밀번호를 입력하세요!");
          return;
        }
        if(pw_confirm==""){
          alert("비밀번호 확인을 입력하세요!");
          return;
        }
        if(name==""){
          alert("이름을 입력하세요!");
          return;
        }
        if(email==""){
          alert("이메일을 입력하세요!");
          return;
        }
        if(emailaddress==""){
          alert("이메일주소를 입력하세요!");
          return;
        }
        if(nickname==""){
          alert("닉네임을 입력하세요!");
          return;
        }
        if(nickname==""){
          alert("닉네임을 입력하세요!");
          return;
        }
        document.getElementById('member').submit();
      }

      function check_id(){
        window.open("/project3_test/check_id.php?id="+document.getElementById('id').value, "IDcheck", "left=700, top=300, width=380, height=160, scrollbars=no, resizable=yes");
      }
    </script>
</body>
</html>
