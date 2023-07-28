
/*const slider = document.querySelector('.slider');
const sliderImages = document.querySelectorAll('slider_img');
const sliderLine = document.querySelector('.slider_line');

const sliderBtnNext = document.querySelector('.slider_btn-next');
const sliderBtnPrev = document.querySelector('.slider_btn-prev');

let sliderCount=0;
let sliderWidth = slider.offsetWidth;

sliderBtnNext.addEventListener('click',nextSlide);
sliderBtnPrev.addEventListener('click',prevSlider);

function nextSlide(){
	sliderCount++;
	if (sliderCount >=sliderImages.length){
		sliderCount=0;
	}

	rollSlider();
}

function prevSlider(){
	sliderCount--;
	if (sliderCount<0){
		sliderCount= sliderImages.length-1;
	}

	rollSlider();
}

function rollSlider(){
	sliderLine.style.transform = `translateX(${-sliderCount*sliderWidth}px)`;
}

setInterval(()=>{
	nextSlide()
},3000);*/

var counter = 1;
  setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
  counter = 1;
  }
  }, 2000);

