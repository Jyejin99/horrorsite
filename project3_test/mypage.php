<?php  
    include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";
    if(isset($userid)){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="/project3_test/css/mypage.css">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">

    <?php
        $con = mysqli_connect("localhost","yjin","1234","osorosiki");

        $sql = "select * from osorosiki_members where id='$userid'";

        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        $row=mysqli_fetch_array($result);
        $password = $row["pass"];
        $name = $row["name"];
        $email = $row["email"];
        $nickname = $row["nickname"];

    ?>
    <script>
        function check_input() {		
            let pw = document.getElementById('pw').value;
            <?php echo "var input_pw = '$password';"?>;
            if (pw=="") {
                alert("비밀번호를 입력하세요!");
                return;
            }
            if (input_pw!=pw){
                alert("비밀번호가 일치하지 않습니다!");
                return;
            }
            document.getElementById('board').submit();
        }
    </script>

</head>

<body>
	<div class="mypage_wrap">
        <div class="mypage_box">
            <form name="board" method="post" action="/project3_test/mypage_update.php" id="board" class="mypage_form">
                <legend class="mypage_field">mypage</legend>
                    <table class="mypage_table">
                        <tr class="mypage_list">
                            <td>id</td>
                            <td><input type="text" name="id" value="<?=$userid?>" disabled></td>
                        </tr>
                        <tr class="mypage_list">
                            <td>password</td>
                            <td><input type="password" name="pw" placeholder="password" id="pw"></td>
                        </tr>
                        <tr class="mypage_list">
                            <td>name</td>
                            <td><input type="text" name="name" placeholder="name" value="<?=$name?>"></td>
                        </tr>
                        <tr class="mypage_list">
                            <td>email</td>
                            <td><input type="text" name="email" placeholder="email" value="<?=$email?>"></td>
                        </tr>
                        <tr class="mypage_list">
                            <td>nickname</td>
                            <td><input type="text" name="nickname" placeholder="nickname" value=<?=$nickname?>></td>
                        </tr>
                    </table>
                    <div class="btn">
                        <button type="button" onclick="check_input()">변경하기</button>	
                        <button type="button" onclick="location.href='/project3_test/home.php'">홈으로</button>
                    </div>
            </form>

        </div>
	</div>
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/project3_test/footer.php";
?>