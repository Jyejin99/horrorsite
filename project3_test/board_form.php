<?php include $_SERVER['DOCUMENT_ROOT']."/project3_test/header.php";
	$table = $_GET["table"];

?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP+MySQL 입문</title>
<link rel="stylesheet" href="/project3_test/css/form.css">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500&display=swap" rel="stylesheet">

<script>
  	function check_input() {	
      	if (!document.board.subject.value) {	// 제목 체크
          	alert("題目を入力してください!");
          	document.board.subject.focus();
          	return;
		}
      	if (!document.board.content.value) {	// 내용 체크
          	alert("内容を入力してください!");    
          	document.board.content.focus();
          	return;
      	}
      	document.board.submit();
   	}
</script>
</head>
<body>
    <div class="board_wrap">
<?php
    if($table=="_review"){
        echo "<h2 class='board_title'>レビュー掲示板 &nbsp> &nbspアップロード</h2>";
    }
    if($table=="_free"){
        echo "<h2 class='board_title'>自由掲示板 &nbsp> &nbspアップロード</h2>";
    }
    if($table=="_art"){
        echo "<h2 class='board_title'>作品推薦 &nbsp> &nbspアップロード</h2>";
    }
    if($table=="_story"){
        echo "<h2 class='board_title'>怪談 &nbsp> &nbspアップロード</h2>";
    }

?>
        <div class="board_box">
            <form class="board" name="board" method="post" action="/project3_test/board_insert.php?table=<?=$table?>" enctype="multipart/form-data">
                <ul class="board_form">
                    <li>
                        <span class="col1">作成者</span>
                        <span class="col2"><?=$username?></span>
                    </li>					
                    <li>
                        <span class="col1">題目</span>
                        <span class="col2"><input name="subject" type="text"></span>
                    </li>	    	
                    <li class="area">	
                        <span class="col1">内容</span>
                        <span class="col2">
                            <textarea name="content"></textarea>
                        </span>
                    </li>
                    <li>
                        <span class="col1">添付ファイル</span>
                        <span class="col2"><input type="file" name="upfile"></span>
                    </li>			
                </ul>
                <ul class="buttons">
                    <li><button type="button" onclick="check_input()">貯蔵</button></li>
                    <li><button type="button" onclick="location.href='/project3_test/list.php?table=<?=$table?>'">リスト</button></li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>
