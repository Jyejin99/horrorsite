<?php
	$table = $_GET["table"];
    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "yjin", "1234", "osorosiki");  
    $sql = "delete from osorosiki$table where num=$num"; // 레코드 삭제 명령
    mysqli_query($con, $sql);     // SQL 명령 실행

    mysqli_close($con);           // DB 접속 해제

    // 목록보기 이동
    echo "<script>
	         location.href = '/project3_test/list.php?table=$table&page=$page';      
	     </script>";
?>