// 
// var searchAnchor = document.getElementById('searchAnchor');
// var primaryNav = document.getElementById('primaryNav');
// var primaryNavSearch = document.getElementById('primaryNavSearch');
// 
// 
// document.addEventListener('DOMContentLoaded', function() {
// 
// 
// /*
// // primary nav list item dropdown
// 
// let dropDowns = Array.from(document.querySelectorAll('.dropdown'));
// 
// const handleClick = (e) => {
//   e.preventDefault();
//   const active = document.querySelector('.dropdown.active');
//   if(active) {
//     active.classList.remove('active');
//   }
//   e.currentTarget.classList.add('active');
// }
// 
// dropDowns.forEach(node => {
//   node.addEventListener('click', handleClick)
// });
// 
// 
// var specifiedElement = document.getElementById('a');
// */
// 
// 
// 
// // search field trigger
// 
// searchAnchor.addEventListener('click', function() {
// 
// 	primaryNav.classList.toggle('searchActive');
// 	primaryNavSearch.focus();
// /*
// 	// close dropdown submenu
// 	const active = document.querySelector('.dropdown.active');
// 	if(active) {
// 		active.classList.remove('active');
// 	}
// */
// });
// 
// /*
// // close dropdown field on scroll
// window.addEventListener('scroll', function() {
// 	// close dropdown submenu
// 	const active = document.querySelector('.dropdown.active');
// 	if(active) {
// 		active.classList.remove('active');
// 	}
// 	
// });
// */
// 
// 
// // close dropdown & serach field if clicked outside the nav 
//  
// document.addEventListener('click', function(event) {
//   var isClickInside = primaryNav.contains(event.target);
// 
//   if (!isClickInside) {
//     // the click was outside the specifiedElement
//     /*
//     // close dropdown submenu
// 	const active = document.querySelector('.dropdown.active');
// 	if(active) {
// 		active.classList.remove('active');
// 	}
// 	*/
// 	// close search field
// 	primaryNav.classList.remove('searchActive');
// 	
//   }
// });
// 
// 
// 
// 
// // video overlay trigger
// 
// var videoOverlayTrigger = document.getElementById('videoOverlayTrigger');
// var videoOverlay = document.getElementById('videoOverlay');
// var videoOverlayClose = document.getElementById('videoOverlayClose');
// 
// 
// 
// videoOverlayTrigger.addEventListener('click', function(e) {
// 	
// 	e.preventDefault();
// 	videoOverlay.classList.add('active');
// });
// 
// videoOverlayClose.addEventListener('click', function() {
// 
// 	videoOverlay.classList.remove('active');
// 	
// 
// });
// 
// 
// }, false);
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
