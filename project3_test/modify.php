<?php
	$table = $_GET["table"];
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
	$regist_day = date("Y-m-d (H:i)");  // UTC 기준 현재의 '년-월-일 (시:분)'

	$con = mysqli_connect("localhost", "yjin", "1234", "osorosiki");	// DB 연결
	$sql = "update osorosiki$table set subject='$subject', ";	// 수정 명령
	$sql .= "content='$content', regist_day='$regist_day' where num=$num";
	mysqli_query($con, $sql);  // SQL 명령 실행

	mysqli_close($con);       // DB 연결 끊기

	echo "
	   <script>
	    location.href = '/project3_test/view.php?table=$table&num=$num&page=$page';
	   </script>
	";
?>