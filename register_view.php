<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 구글 material아이콘 가져오기 -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>회원가입</title>
  <link rel="stylesheet" href="./css/join.css" />
</head>


<body>
  <!-- HEADER -->
  <header>
    <div class="inner">
      <a href="/kkamifarm/index.php" class="logo"> <!-- 메인페이지로 이동 -->
        <img src="./images/logo.png" alt="FARM_LOGO">
      </a>

      <div class="sub-menu">
        <ul class="menu">
          <li>
              <a href="/kkamifarm/login_view.php">로그인</a>
          </li>
          <li>
            <a href="/kkamifarm/register_view.php">회원가입</a>
          </li>
          <li>
            <a href="javascript:void(0)">마이페이지</a>
          </li>
        </ul>
        
      </div>

      <ul class="main-menu">
        <li class="item">
          <div class="item__name">회사소개</div>
        </li>
        <li class="item">
          <div class="item__name">MENU</div>
        </li>
        <li class="item">
          <div class="item__name">STORE</div>
        </li>
        <li class="item">
          <div class="item__name">고객서비스</div>
        </li>
        <li class="item">
          <div class="item__name">오시는길</div>
        </li>
      </ul>

    </div>
  </header>
  
  
  </header>

  <section class="visual">
    <form action="register_server.php" method="post">
  
      <h2>회원가입</h2>

      <?php if(isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <?php if(isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>
      
  
      <label>아이디</label>
      <input type="text" placeholder="아이디..." name="user_id">
  
      <label>이름</label>
      <input type="text" placeholder="이름..." name="user_nick">
  
      <label>비밀번호</label>
      <input type="password" placeholder="비밀번호..." name="pass1">
  
      <label>비밀번호 확인</label>
      <input type="password" placeholder="비밀번호..." name="pass2">
  
      <button type="submit" name="save">저장</button>
      <a href="login_view.php" class="save">이미 회원이신가요? (로그인 페이지)</a>
    </form>
  
  </section>

  
  

</body>
</html>