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



