	var mouseX = 0;
	var mouseY = 0; 

	function getMousePosition(e){
		var eObj = window.event? window.event : e; // IE, FF 에 따라 이벤트 처리 하기
		mouseX = eObj.clientX;
		mouseY = eObj.clientY + document.documentElement.scrollTop; // 화면을 스크롤 했을때를 위한 처리 (스크롤 한 만큼 마우스 Y좌표에 + )
		// documentElement 가 안된다면 body 바꿔야 한다. 크롬의 경우.. (자동파악 로직 필요)
	}

	function moveImg(){
		// 이미지 위치 파악하기
		var m_x = parseInt(document.getElementById('img1').style.left.replace('px', ''));
		var m_y = parseInt(document.getElementById('img1').style.top.replace('px', ''));

		// 이미지 움직이기
		document.getElementById('img1').style.left = Math.round(m_x + ((mouseX - m_x) / 25)) + 'px';
		document.getElementById('img1').style.top = Math.round(m_y + ((mouseY - m_y) / 25)) + 'px';
	}

	document.onmousemove = getMousePosition; // 마우스가 움직이면 getMousePosition 함수 실행
	setInterval("moveImg()", 50); // moveImg 함수 반복 실행하여 이미지 움직이기