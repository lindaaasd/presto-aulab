require('bootstrap');
document.Dropzone = require('dropzone');
Dropzone.autoDiscover= false;
document.$=document.jQuery=require('jquery');
import Swiper from 'swiper';


require('./announcementImages');


// document.$=document.jQuery=require('jquery');

// window.$=window.jQuery=require('jquery');

// bubbly button

var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');
    
    e.target.classList.add('animate');
    setTimeout(function(){
      e.target.classList.remove('animate');
    },700);
  };
  
  var bubblyButtons = document.getElementsByClassName("bubbly-button");
  
  for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('mouseover', animateButton, false);
  }


// let background = document.querySelector('#bg-category');
// switch (background){
//   case 
// }
// window.onload=function(){
//   let vinili=1;
//   let elettronica=2;
//   let immobili=3;
//   let lavoro=4;
//   let games=5;
//   let sport=6;
//   let musica=7;
//   let artigianato=8;

//   let backgroundColorBasedOnCategory="";
//   switch (categoryId){
//     case 1:
//       backgroundColorBasedOnCategory="blue";
//       break;
//     case 2:
//       backgroundColorBasedOnCategory="green";
//       break;
//     default:
//       backgroundColorBasedOnCategory="pink";
//       }
//   $('#bg-category').css({'background-color',backgroundColorBasedOnCategory});
// }

