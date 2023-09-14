
const searchEl = document.querySelector('.search');
const searchInputEl = searchEl.querySelector('input');

searchEl.addEventListener('click', function () {
  searchInputEl.focus(); 
});// input 요소에 focus 돋보기 클릭 활성화

searchInputEl.addEventListener('focus', function () {
  searchEl.classList.add('focused');
  searchInputEl.setAttribute('placeholder', '통합검색');
});

searchInputEl.addEventListener('blur', function () {
  searchEl.classList.remove('focused');
  searchInputEl.setAttribute('placeholder', '');
});

new Swiper('.promotion .swiper-container',{
  slidesPerView: 3,
  spaceBetWeen: 10,
  centeredSlides: true,
  loop: true,
  //autoplay: {
  //  delay: 5000,
  //},
  pagination: {
    el: '.promotion .swiper-pagination', //페이지 번호 요소 선택자
    clickable: true
  },
  navigation: {
    prevEl:'.promotion .swiper-prev',
    nextEl:'.promotion .swiper-next'
  }
});

function clickEvent(){
	alert('알람창 활성화');
}