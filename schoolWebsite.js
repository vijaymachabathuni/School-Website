var slides = document.querySelector('.sli').children;
var nextSlide = document.querySelector('.ra');
var prevSlide = document.querySelector('.la');
var radioButton1 = document.querySelector('.rb1');
var radioButton2 = document.querySelector('.rb2');
var radioButton3 = document.querySelector('.rb3');
var radioButton4 = document.querySelector('.rb4');
var radioButton5 = document.querySelector('.rb5');
var radioButton6 = document.querySelector('.rb6');
var radioButton7 = document.querySelector('.rb7');
var radioButton8 = document.querySelector('.rb8');
var radioButton9 = document.querySelector('.rb9');
var radioButton10 = document.querySelector('.rb10');
var radioButton11 = document.querySelector('.rb11');
var radioButton12 = document.querySelector('.rb12');
/*
var radioButton13 = document.querySelector('.rb13');
var radioButton14 = document.querySelector('.rb14');
var radioButton15 = document.querySelector('.rb15');
var radioButton16 = document.querySelector('.rb16');
var radioButton17 = document.querySelector('.rb17');
var radioButton18 = document.querySelector('.rb18');
var radioButton19 = document.querySelector('.rb19');
var radioButton20 = document.querySelector('.rb20');
var radioButton21 = document.querySelector('.rb21');
*/
var totalSlides= slides.length;
var index = 0;

nextSlide.onclick = function (){
  next("next");
}

prevSlide.onclick = function (){
  next("prev");
}

radioButton1.onclick = function (){
  current(0);
  index = 0;
}
radioButton2.onclick = function (){
  current(1);
  index = 1;
}
radioButton3.onclick = function (){
  current(2);
  index = 2;
}
radioButton4.onclick = function (){
  current(3);
  index = 3;
}
radioButton5.onclick = function (){
  current(4);
  index = 4;
}
radioButton6.onclick = function (){
  current(5);
  index = 5;
}
radioButton7.onclick = function (){
  current(6);
  index = 6;
}
radioButton8.onclick = function (){
  current(7);
  index = 7;
}
radioButton9.onclick = function (){
  current(8);
  index = 8;
}
radioButton10.onclick = function (){
  current(9);
  index = 9;
}
radioButton11.onclick = function (){
  current(10);
  index = 10;
}
radioButton12.onclick = function (){
  current(11);
  index = 11;
}
/*
radioButton13.onclick = function (){
  current(12)
}
radioButton14.onclick = function (){
  current(13);
}
radioButton15.onclick = function (){
  current(14);
}
radioButton16.onclick = function (){
  current(15);
}
radioButton17.onclick = function (){
  current(16);
}
radioButton18.onclick = function (){
  current(17);
}
radioButton19.onclick = function (){
  current(18);
}
radioButton20.onclick = function (){
  current(19);
}
radioButton21.onclick = function (){
  current(20);
}
*/

function next(direction){
  if(direction == "next"){
    index++;
    if(index == totalSlides){
      index = 0;
    }
  }
  else if(direction == "prev"){
    if(index == 0){
      index = totalSlides-1;
    }
    else {
      index--;
    }
  }

  for(i=0; i<slides.length; i++){
    slides[i].classList.remove("active");
  }
  slides[index].classList.add("active");
  changeColor(index);
}

function current(index){
  for(i=0; i<slides.length; i++){
    slides[i].classList.remove("active");
  }
  slides[index].classList.add("active");
  changeColor(index);
}

function changeColor(index){
  if(index == 0){
    removeColor();
    radioButton1.classList.add("cb");
  }
  if(index == 1){
    removeColor();
    radioButton2.classList.add("cb");
  }
  if(index == 2){
    removeColor();
    radioButton3.classList.add("cb");
  }
  if(index == 3){
    removeColor();
    radioButton4.classList.add("cb");
  }
  if(index == 4){
    removeColor();
    radioButton5.classList.add("cb");
  }
  if(index == 5){
    removeColor();
    radioButton6.classList.add("cb");
  }
  if(index == 6){
    removeColor();
    radioButton7.classList.add("cb");
  }
  if(index == 7){
    removeColor();
    radioButton8.classList.add("cb");
  }
  if(index == 8){
    removeColor();
    radioButton9.classList.add("cb");
  }
  if(index == 9){
    removeColor();
    radioButton10.classList.add("cb");
  }
  if(index == 10){
    removeColor();
    radioButton11.classList.add("cb");
  }
  if(index == 11){
    removeColor();
    radioButton12.classList.add("cb");
  }
  /*
  if(index == 12){
    removeColor();
    radioButton13.classList.add("cb");
  }
  if(index == 13){
    removeColor();
    radioButton14.classList.add("cb");
  }
  if(index == 14){
    removeColor();
    radioButton15.classList.add("cb");
  }
  if(index == 15){
    removeColor();
    radioButton16.classList.add("cb");
  }
  if(index == 16){
    removeColor();
    radioButton17.classList.add("cb");
  }
  if(index == 17){
    removeColor();
    radioButton18.classList.add("cb");
  }
  if(index == 18){
    removeColor();
    radioButton19.classList.add("cb");
  }
  if(index == 19){
    removeColor();
    radioButton20.classList.add("cb");
  }
  if(index == 20){
    removeColor();
    radioButton21.classList.add("cb")
  }
  */

}

function removeColor() {
  radioButton1.classList.remove("cb");
  radioButton2.classList.remove("cb");
  radioButton3.classList.remove("cb");
  radioButton4.classList.remove("cb");
  radioButton5.classList.remove("cb");
  radioButton6.classList.remove("cb");
  radioButton7.classList.remove("cb");
  radioButton8.classList.remove("cb");
  radioButton9.classList.remove("cb");
  radioButton10.classList.remove("cb");
  radioButton11.classList.remove("cb");
  radioButton12.classList.remove("cb");
  /*
  radioButton13.classList.remove("cb");
  radioButton14.classList.remove("cb");
  radioButton15.classList.remove("cb");
  radioButton16.classList.remove("cb");
  radioButton17.classList.remove("cb");
  radioButton18.classList.remove("cb");
  radioButton19.classList.remove("cb");
  radioButton20.classList.remove("cb");
  radioButton21.classList.remove("cb");
  */
}

/*end*/
