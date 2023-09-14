<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./css/order.css" />
	<title> 주문서 작성하기</title>
</head>
<body>
	<div class="container">
		<h1>상품 주문서</h1>


		<form action="slide_server.php" method="post">
		<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		
		<?php if (isset($_GET['success'])) { ?>
		<p class="success"><?php echo $_GET['success']; ?></p>
		<?php } ?>
			<fieldset>
				<legend>개인 정보</legend>
				<ul>
					<li>
						<label for="uname" class="title">이름</label>
						<input type="text" name="name1" placeholder="여백없이 입력" required>
					</li>
					<li>
						<label for="tel1" class="title">연락처</label>
						<input type="tel" name="tel1" placeholder="연락가능한 번호">
					</li>
				</ul>
			</fieldset>
			<fieldset>
				<legend>배송지 정보</legend>
				<ul>
					<li>
						<label for="name" class="title">이름</label>
						<input type="text" size="20" name="name2" required>
					</li>
					<li>
						<label for="addr" class="title">주소</label>
						<input type="text" size="40" name="addr" required>
					</li>
					<li>
						<label for="tel2" class="title">전화번호</label>
						<input type="tel" value=" " name="tel2" required>
					</li>
					<li>
						<label for="comment" class="title">메 모</label>
						<input type="text" size="40" value="(기본)메모가 없습니다" name="memo" required>
					</li>
				</ul>
			</fieldset>
			<fieldset>
				<legend>주문 정보</legend>
				<ul>
					<li>
						사과 (1kg) 10,000원 : 
						<label><input type="number" value="0"  min="0" max="5" name="applenum">개 </label>
					</li>
					<li>
						오렌지 (1kg) 10,000원 : 
						<label><input type="number" value="0" min="0" max="5" name="orangenum">개 </label>
					</li>
					<li>
						딸기 (800g) 10,000원 : 
						<label><input type="number" value="0" min="0" max="5" name="strawberrynum">개 </label>
					</li>
					<li>
						블루베리 (500g) 10,000원 : 
						<label><input type="number" value="0" min="0" max="5" name="blueberrynum">개 </label>
					</li>
				</ul>
			</fieldset>
			<div class="centered">
				<input type="submit" name="order_submit" value="주문하기">
				<input type="reset" value="다시 작성">
			</div>
			<center><a href="/kkamifarm/login_result.php">메인화면으로 돌아가기</a></center>
		</form>
	</div>
</body>
</html>