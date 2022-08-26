<?php
include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";

$name = $_POST['name'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];

$con = mysqli_connect("localhost", "yjin", "1234", "osorosiki");	// DB 연결
$sql = "update osorosiki_members set name='$name', nickname='$nickname', email='$email' where id='$userid'";
mysqli_query($con, $sql);  // SQL 명령 실행

mysqli_close($con);       // DB 연결 끊기
echo "<script>alert('정보변경이 완료되었습니다.'); location.href = '/project3_test/mypage.php';</script>";
?>