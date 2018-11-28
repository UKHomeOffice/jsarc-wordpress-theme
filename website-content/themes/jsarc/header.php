<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSaRC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="nav" role="navigation" aria-label="Main Navigation">

    <div class="nav-content">
        
        <ul class="nav-header">
            <li class="list-item">
                <a class="jsarc-logo" href="/">JSaRC</a>
            </li>
      
		<li class="list-item nav-menu-icon">
       
<label class="nav-menu-icon-label" for="nav-menu-state" aria-hidden="true">
					<span class="nav-menu-icon nav-menu-icon-top"></span>
					<span class="nav-menu-icon nav-menu-icon-middle"></span>
					<span class="nav-menu-icon nav-menu-icon-bottom"></span>
                </label>
                <!-- 
<a href="#nav-menu-state" class="nav-menu-anchor nav-menu-anchor-open">
                	<span class="nav-menu-anchor-label">Open Menu</span>
                </a>
                <a href="/" class="nav-menu-anchor nav-menu-anchor-close">
                	<span class="nav-menu-anchor-label">Close Menu</span>
                </a>
 -->

            </li>

        </ul>
        
        <div class="menu-wrapper">
            <ul class="menu">
                
                <li class="menu-item dropdown">
                
                    <a class="menu-link" aria-haspopup="true" aria-expanded="false" href="/">National Security Priorities</a>
                    
                    <ul class="submenu">
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/">Counterterrorism</a>
                        </li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/">Economic crime</a>
                        </li>
                    </ul>
                    
                </li>
                
                <li class="menu-item dropdown">
                    <a class="menu-link" aria-haspopup="true" aria-expanded="false" href="/our-work/">Our Work</a>
                    <ul class="submenu">
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/case-study/">Overseas Protect &#038; Prepare (OPP)</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/case-study/">Securing crowded places</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/case-study/">Future aviation security solutions</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/case-study/">Border Force Coaches &#038; Cars</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/case-study/">Video Analytics Showcase</a>
                    	</li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a class="menu-link" aria-haspopup="true" aria-expanded="false" href="/register/">News and Events</a>
                    <ul class="submenu">
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/register/">News Article or Event Promotion</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/register/">Securities &#038; Policing</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/register/">JSaRC Open Days</a>
                    	</li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a class="menu-link" aria-haspopup="true" aria-expanded="false" href="/about">About JSaRC</a>
                    <ul class="submenu">
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/about/">Our team</a>
                    	</li>
                        <li class="submenu-item">
                        	<a class="submenu-link" href="/about/">Ethical policy</a>
                    	</li>
                    </ul>
                </li>
                <!-- 
<li class="menu-item nav-search">
                    <a menu-link-search" class="menu-link menu-link-search" href="/search" aria-label="Search JSaRC" role="button" aria-haspopup="true"><span class="search-icon">Search JSaRC</span></a>
                </li>
 -->
            </ul>
        </div>
        <!-- 
<form id="nav-searchform" class="nav-searchform" action="/search" method="get">
            <div class="nav-searchform-wrapper">
                <input class="nav-searchform-input" type="text" aria-label="Search Search JSaRC" placeholder="Search JSaRC" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" />
                <button class="nav-searchform-submit" type="submit" disabled aria-label="Submit Search"></button>
                <button class="nav-searchform-reset" type="reset" disabled aria-label="Clear Search"></button>
            </div>
        </form>
        
        <button class="nav-searchview-close" aria-hidden="true">
			<span class="nav-searchview-close-wrapper">
				<span class="nav-searchview-close-left"></span>
				<span class="nav-searchview-close-right"></span>
			</span>
        </button>
 -->
    </div>

</nav>
<div class="nav-curtain"></div>
<div class="nav-placeholder"></div>


<script>

document.addEventListener('DOMContentLoaded', function() {



	// Navigate through the nav with a tab
	
	

	var dropdown = document.querySelectorAll('.dropdown');
	

	
	

	Array.prototype.forEach.call(dropdown, function(el, i){
	
		
		
		
		
		

		
		
		var aa = el.querySelectorAll('a')[0];
		var a = el.querySelectorAll('a');
		
		

		
			
		aa.addEventListener('click', function( event ) {
			
			if (window.matchMedia('(max-width: 1024px)').matches) {
				

				if (el.classList.contains('expanded')) {
					/*
					aa.setAttribute('aria-expanded', 'false');
					el.classList.remove('expanded');
					*/
				}
				else {
					event.preventDefault();
					// siblings
					Array.prototype.filter.call(el.parentNode.children, function(el){
					
						var siblingsaa = el.children[0];
						
						el.classList.remove('expanded');
						siblingsaa.setAttribute('aria-expanded', 'false');
						console.log(el);
					});
					
					aa.setAttribute('aria-expanded', 'true');
					el.classList.add('expanded');
				}
				
			}


		});
		
		
		Array.prototype.forEach.call(a, function(el, i){
			el.addEventListener('focus', function( event ) { 
			cel.classList.add('expanded');
				aa.setAttribute('aria-expanded', 'true');
			
			}, true);
		});
		

		var ullia = el.querySelectorAll('ul li a');
		 
		var lastchild = ullia[ullia.length-1];
		


		lastchild.addEventListener('blur', function( event ) { 

		 	
			aa.setAttribute('aria-expanded', 'false');
			el.classList.remove('expanded');
		 
			
		}, true);
		
		/*
		var blurred, focused;
		Array.prototype.forEach.call(blurred, function(el, i){
			a.addEventListener('blur', function( event ) {
			
				console.log(blurred);
			
				blurred = this;
		
			}, true);
		});
		*/

		
		
	
	});
	
	
	
	
	
	
	
	
	
	var nav = document.querySelector('.nav'),
		navAnchor = document.querySelector('.nav-menu-icon');
		 
	
	
	window.addEventListener('scroll', function() {

        //var y = window.pageYOffset | document.body.scrollTop;
        var y = window.scrollY;

        if (y > 50) {
            nav.classList.add('sticky');
        }
        else {
            nav.classList.remove('sticky');
        }
    });

    navAnchor.addEventListener('click', function() {
        nav.classList.toggle('nav-active');
    });
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});







</script>