<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";
	$table = $_GET["table"];
?>

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP+MySQL 입문</title>
<link rel="stylesheet" href="/project3_test/css/list.css">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500&display=swap" rel="stylesheet">

</head>
<body>
	<div class="board_wrap">
<?php
	if($table=="_review"){
		echo "<h2 class='board_title'>レビュー掲示板</h2>";
	}
	if($table=="_free"){
		echo "<h2 class='board_title'>自由掲示板</h2>";
	}
	if($table=="_art"){
		echo "<h2 class='board_title'>作品推薦</h2>";
	}
	if($table=="_story"){
		echo "<h2 class='board_title'>怪談</h2>
		<div class='board_box'>
			<div class='card_wrap'>";
	}

	if($table!="_story"){
		echo "<div class='board_box'>
		<ul class='board_list'>
		<div class='span_title'>
			<li class='col_list'>
				<span class='col1'>番号</span>
				<span class='col2'>掲示日</span>
				<span class='col3'>画像</span>
				<span class='img_icon'></span>
				<span class='col4'>題目</span>
				<span class='col5'>作成者</span>
			</li>
		</div>";
	}


?>

		<?php
			if (isset($_GET["page"]))
				$page = $_GET["page"];
			else
				$page = 1;

			$con = mysqli_connect("localhost", "yjin", "1234", "osorosiki");		// DB 연결
			$sql = "select * from osorosiki$table order by num desc";	// 일련번호 내림차순 검색
			$result = mysqli_query($con, $sql);			// SQL 명령 실행

			$total_record = mysqli_num_rows($result); // 전체 글 수

			$scale = 8;	// 한 화면에 표시되는 글 수

			// 전체 페이지 수($total_page) 계산 
			if ($total_record % $scale == 0)     
				$total_page = floor($total_record/$scale);      
			else
				$total_page = floor($total_record/$scale) + 1; 
		
			// 표시할 페이지($page)에 따라 $start 계산  
			$start = (intval($page) - 1) * $scale;      

			$number = $total_record - $start;
			for ($i=$start; $i<$start+$scale && $i < $total_record; $i++) {
				mysqli_data_seek($result, $i); 		// 가져올 레코드로 위치(포인터) 이동      	
				$row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

				$num         = $row["num"];			// 일련번호
				$id        	 = $row["id"];			// 아이디
				$name        = $row["name"];		// 이름
				$subject     = $row["subject"];		// 제목
				$regist_day  = $row["regist_day"]; 	// 작성일
				$file_copied = $row["file_copied"];
				// if ($row["file_name"])
				// 	$file_image = "<img src='./file.pngl'>";
				// else
				// 	$file_image = " ";		  
		?>
		<?php
			if($table!="_story"){
				echo 
				"<li class='col_list'>
					<span class='col1'>$number</span>		
					<span class='col2'><a href='/project3_test/view.php?table=$table&num=$num&page=$page'>$regist_day</a></span>";
					if(!$file_copied == null){
						echo "<span class='col3'><div class='img_box1'><a href='/project3_test/view.php?table=$table&num=$num&page=$page'><img src='/project3_test/data/$file_copied'></a></div></span>";
					}
					else{
						echo "<span class='col3_img'></span>";
					}
				echo "<span class='col4'><a href='/project3_test/view.php?table=$table&num=$num&page=$page'>$subject</a></span>
					<span class='img_icon'><a href='/project3_test/view.php?table=$table&num=$num&page=$page'><img src='/project3_test/img/file.png'></a></span>
					<span class='col5'>$name</span>
					<span class='col6'>$regist_day</span>
				</li>";
			}

			if($table=="_story"){
				if(!$file_copied == null){
					echo 
						"<div class='card'>
							<div class='card_body'>
								<a href='/project3_test/view.php?table=$table&num=$num&page=$page'>
									<div class='img_box2'>
										<img src='/project3_test/data/$file_copied'>
									</div>
									<div class='img_story'>
										<p class='card_title'>$subject</p>
										<small>$regist_day</small>
									</div>
								</a>
							</div>
						</div>";
				}
				else{
					echo
					"<div class='card'>
						<div class='card_body'>
							<a href='/project3_test/view.php?table=$table&num=$num&page=$page'>
								<div class='img_box2'>
									<img src='/project3_test/img/noimage.png'>
								</div>
								<div class='img_story'>
									<p class='card_title'>$subject</p>
									<small>$regist_day</small>
								</div>
							</a>
						</div>
					</div>";
				}
			}

		?>

		<?php
			$number--;
			}
			mysqli_close($con);

			if($table!="story"){
				echo "</ul>";
			}
		?>
				
		<?php
		if($table=="_story"){
			echo "</div>";
		}
		?>
		<!-- 페이지 번호 매김 -->
			<ul class="page_num"> 	
		<?php
			if ($total_page>=2 && $page >= 2) {
				$new_page = $page-1;
				echo "<li><a href='/project3_test/list.php?table=$table&page=$new_page'>◀ 이전</a> </li>";
			}		
			else 
				echo "<li>&nbsp;</li>";

			// 게시판 목록 하단에 페이지 링크 번호 출력
			for ($i=1; $i<=$total_page; $i++) {
				if ($page == $i)     // 현재 페이지 번호 링크 안함
					echo "<li><b> $i </b></li>";
				else
					echo "<li> <a href='/project3_test/list.php?table=$table&page=$i'> $i </a> <li>";
			}
			if ($total_page>=2 && $page != $total_page)	{
				$new_page = $page+1;	
				echo "<li> <a href='/project3_test/list.php?table=$table&page=$new_page'>다음 ▶</a> </li>";
			}
			else 
				echo "<li>&nbsp;</li>";		
		?>
			</ul> <!-- 페이지 번호 매김 끝 -->

			<ul class="buttons">
				<li><button onclick="location.href='/project3_test/list.php?table=<?=$table?>&page=<?=$page?>'">リスト</button></li>
				<li><button onclick="location.href='/project3_test/board_form.php?table=<?=$table?>'">アップロード</button></li>
			</ul>		
		</div>
	</div>
</body>
</html>
<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/footer.php";?>