/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */

document.addEventListener('DOMContentLoaded', function() { 

	document.getElementsByTagName('html')[0].classList.add('js');

	var w = window;

	w.onscroll = function () {
		var wH = w.innerHeight;
		var wS  = w.pageYOffset || document.documentElement.scrollTop;
		

		var $dataAnimation = document.querySelectorAll('[data-animation]');
		
		for (var element of $dataAnimation) {
			
			var hT = element.offsetTop;
			if ((wS - wH / 1.15) > hT){
				element.classList.add('animated');
				
			}

		};
		
	};

});