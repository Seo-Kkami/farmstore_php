<?php

session_start();

?>



<!DOCTYPE html>
<html lang="ko">
<head>
	<title>즐코 My Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="../logout.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-20 p-t-27">My Page</span>
					<div class="text-center p-t-10">
						<span class="welcome"><?php echo $_SESSION['mb_nick']; ?> 회원님 환영합니다!</span>
					</div>

					<table class="type02">
						<tr>
							<th scope="row">가입 순서</th>
							<td><?php echo $_SESSION['no']; ?></td>
						</tr>
						<tr>
							<th scope="row">아이디</th>
							<td><?php echo $_SESSION['mb_id']; ?></td>
						</tr>
					</table>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">로그아웃</button>
					</div>
				</form>
				<br>
				<center>
					<a href="/kkamifarm/login_result.php">메인화면으로 돌아가기</a>
				</center>
			</div>
		</div>
	</div>
	


</body>
</html>