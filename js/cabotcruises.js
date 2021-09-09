/*jslint node:true*/
"use strict";

/*global alert*/




/*
fetch ('./data/cabotcruises.json') 
.then((mydata) => mydata.json())
.then((mydata) => {
  console.log(mydata); 
}); 
*/


function toggleMenu() {
  document.getElementById("primaryNav").classList; 
  document.getElementById("primaryNav").classList.toggle('hide');
}



function toggleMenu2() {
  document.getElementById("secondaryNav").classList.toggle; 
  document.getElementById("secondaryNav").classList.toggle('parent');
}



$(document).ready(function(){
  $('.my-class').slick({
   slidesToShow: 1, 
   autoplay: true, 
   autoplaySpeed: 5000,
   dots: true, 
   arrows: false
  });
});





var activeLI = document.querySelectorAll("ul#mainmenu li a"); 
console.log(activeLI); 

var Page = "_top.php" 

var i; 
for (i=0; i < activeLI.length; i++) {
  var myPage = test[i].getAttribute("href"); 
  console.log(myPage); 

  if (Page === myPage) {
    test[i].className="active"; 
    alert("Wow we have a match" + myPage); 
  }
}








