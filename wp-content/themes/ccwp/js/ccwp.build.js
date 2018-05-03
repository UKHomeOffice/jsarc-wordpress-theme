/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */

document.addEventListener('DOMContentLoaded', function(e) { 

	document.getElementsByTagName('html')[0].classList.add('js');

	var w = window;

	w.onscroll = function (e) {
		var wH = w.innerHeight;
		var wS  = w.pageYOffset || document.documentElement.scrollTop;
		

		var elements = document.querySelectorAll('[data-animation]');
		
	  	var i;
    	for (i = 0; i < elements.length; i++) {
  			var element = elements[i];
			
			var hT = element.offsetTop;
			if ((wS - wH / 1.15) > hT){
				element.classList.add('animated');
				
			}

		};
		
	};

});