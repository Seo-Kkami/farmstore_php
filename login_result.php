<?php
  
?>

<!DOCTYPE html>
<html lang="ko" />
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kkami Farm</title>
  <!-- 아이콘 -->
  <link rel="icon" href="./favicon.png" />
  <!-- 스타일시트 css 초기화 -->
  <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
  <!-- 구글 material아이콘 가져오기 -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link rel="stylesheet" href="./css/main.css" />

  <!-- SWIPER -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>

  
  <script defer src="./js/main.js"></script>

</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="inner">
      <a href="/kkamifarm/login_result.php" class="logo"> <!-- 메인페이지로 이동 -->
        <img src="./images/logo.png" alt="FARM_LOGO">
      </a>

      <div class="sub-menu">
        <ul class="menu">
          <li>
              <a href="/kkamifarm/logout.php">로그아웃</a>
          </li>
          <li>
            <a href="/kkamifarm/mypage/mypage.php">마이페이지</a>
          </li>
        </ul>
        <div class="search">
          <input type="text" />
            <div class="material-icons">search</div>
        </div>
      </div>

      <ul class="main-menu">
        <li class="item">
          <div class="item__name">회사소개</div>
          <div class="item__contents">
            <div class="contents__menu">
              <ul class="inner">
                <li>
                  <h4>회사소개</h4>
                  <ul>
                    <li>회사방침</li>
                    <li>회사연혁</li>
                    <li>사업소개</li>
                    <li>사업장안내</li>
                  </ul>
                </li>
                <li>
                  <h4>STORE</h4>
                  <ul>
                    <li><a href="./slide.php">과일</a></li>
                    <li>채소</li>
                    <li>생산물</li>
                    <li>묘목</li>
                    <li>밀키트</li>
                  </ul>
                </li>
                <li>
                  <h4>생산과정</h4>
                  <ul>
                    <li>youtube</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                  </ul>
                </li>
                <li>
                  <h4>고객서비스</h4>
                  <ul>
                    <li>FAQ</li>
                    <li>고객의소리</li>
                  </ul>
                </li>
                <li>
                  <h4>오시는길</h4>
                  <ul>
                    <li>회사위치</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="item__name">MENU</div>
          <div class="item__contents">
            <div class="contents__menu">
              <ul class="inner">
                <li>
                  <h4>회사소개</h4>
                  <ul>
                    <li>회사방침</li>
                    <li>회사연혁</li>
                    <li>사업소개</li>
                    <li>사업장안내</li>
                  </ul>
                </li>
                <li>
                  <h4>STORE</h4>
                  <ul>
                    <li><a href="./slide.php">과일</a></li>
                    <li>채소</li>
                    <li>생산물</li>
                    <li>묘목</li>
                    <li>밀키트</li>
                  </ul>
                </li>
                <li>
                  <h4>생산과정</h4>
                  <ul>
                    <li>youtube</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                  </ul>
                </li>
                <li>
                  <h4>고객서비스</h4>
                  <ul>
                    <li>FAQ</li>
                    <li>고객의소리</li>
                  </ul>
                </li>
                <li>
                  <h4>오시는길</h4>
                  <ul>
                    <li>회사위치</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="item__name">STORE</div>
          <div class="item__contents">
            <div class="contents__menu">
              <ul class="inner">
                <li>
                  <h4>회사소개</h4>
                  <ul>
                    <li>회사방침</li>
                    <li>회사연혁</li>
                    <li>사업소개</li>
                    <li>사업장안내</li>
                  </ul>
                </li>
                <li>
                  <h4>STORE</h4>
                  <ul>
                    <li><a href="./slide.php">과일</a></li>
                    <li>채소</li>
                    <li>생산물</li>
                    <li>묘목</li>
                    <li>밀키트</li>
                  </ul>
                </li>
                <li>
                  <h4>생산과정</h4>
                  <ul>
                    <li>youtube</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                  </ul>
                </li>
                <li>
                  <h4>고객서비스</h4>
                  <ul>
                    <li>FAQ</li>
                    <li>고객의소리</li>
                  </ul>
                </li>
                <li>
                  <h4>오시는길</h4>
                  <ul>
                    <li>회사위치</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="item__name">고객서비스</div>
          <div class="item__contents">
            <div class="contents__menu">
              <ul class="inner">
                <li>
                  <h4>회사소개</h4>
                  <ul>
                    <li>회사방침</li>
                    <li>회사연혁</li>
                    <li>사업소개</li>
                    <li>사업장안내</li>
                  </ul>
                </li>
                <li>
                  <h4>STORE</h4>
                  <ul>
                    <li><a href="./slide.php">과일</a></li>
                    <li>채소</li>
                    <li>생산물</li>
                    <li>묘목</li>
                    <li>밀키트</li>
                  </ul>
                </li>
                <li>
                  <h4>생산과정</h4>
                  <ul>
                    <li>youtube</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                  </ul>
                </li>
                <li>
                  <h4>고객서비스</h4>
                  <ul>
                    <li>FAQ</li>
                    <li>고객의소리</li>
                  </ul>
                </li>
                <li>
                  <h4>오시는길</h4>
                  <ul>
                    <li>회사위치</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="item__name">오시는길</div>
          <div class="item__contents">
            <div class="contents__menu">
              <ul class="inner">
                <li>
                  <h4>회사소개</h4>
                  <ul>
                    <li>회사방침</li>
                    <li>회사연혁</li>
                    <li>사업소개</li>
                    <li>사업장안내</li>
                  </ul>
                </li>
                <li>
                  <h4>STORE</h4>
                  <ul>
                    <li><a href="./slide.php">과일</a></li>
                    <li>채소</li>
                    <li>생산물</li>
                    <li>묘목</li>
                    <li>밀키트</li>
                  </ul>
                </li>
                <li>
                  <h4>생산과정</h4>
                  <ul>
                    <li>youtube</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                  </ul>
                </li>
                <li>
                  <h4>고객서비스</h4>
                  <ul>
                    <li>FAQ</li>
                    <li>고객의소리</li>
                  </ul>
                </li>
                <li>
                  <h4>오시는길</h4>
                  <ul>
                    <li>회사위치</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>

    </div>
  </header>
    
  <!-- VISUAL -->
  <section class="visual">
    <div class="inner">

      <div class="title">
        <img src="./images/section1.png" alt="사진1">
      </div>
    </div>
  </section>


  <div class="notice">
    <div class="promotion">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="./slide.php"><img src="./images/slide1.png"></a>
          </div>
          <div class="swiper-slide">
            <a href="./slide.php"><img src="./images/slide2.png"></a>
          </div>
          <div class="swiper-slide">
            <a href="./slide.php"><img src="./images/slide3.png"></a>
          </div>
          <div class="swiper-slide">
            <a href="./slide.php"><img src="./images/slide4.png"></a>
          </div>
          
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-prev"></div>
      <div class="swiper-next"></div>
    </div>
  </div>

  <div class="last">
    <div class="last1">사업자등록번호 : 201-81-21515</div>
    <div class="last1">ⓒ 2022 Kkami Farm Company. All Rights Reserved.</div>
  </div>
  

</body>
</html>