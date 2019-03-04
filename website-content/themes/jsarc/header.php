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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <?php wp_head(); ?>
    <?php if (function_exists('add_to_head')) { add_to_head(); } ?>
</head>

<body <?php body_class(); ?>>
    

    <nav class="nav">
        <div class="nav-content">
            <a class="visuallyhidden skip" href="#main">Skip to content</a>
            <ul class="nav-header">
                <li class="logo-wrapper">
                    <a class="jsarc-logo" href="/">JSaRC</a>
                </li>
                <li class="nav-menu-anchor">
                
                <span class="nav-menu-icon" aria-hidden="true">
                    <span class="nav-menu-icon-dash nav-menu-icon-dash-top"></span>
                        <span class="nav-menu-icon-dash nav-menu-icon-dash-middle"></span>
                        <span class="nav-menu-icon-dash nav-menu-icon-dash-bottom"></span>
                </span>
                    
                <a href="#menu-state" class="nav-menu-state nav-menu-state-open">Open Menu</a>
                <a href="#menu-state" class="nav-menu-state nav-menu-state-close">Close Menu</a>
                </li>

            </ul>
            <div class="menu-wrapper">
                <div class="search-small-placeholder-wrapper">
                    <a class="search-small-placeholder" href="#nav-searchform">Search jsarc.org</a>
                </div>
                <?php wp_nav_menu( array(
                // 'theme_location' => 'header-menu',
                'container' => '',
                'container_class' => '',
                'container_id'=> '',
                'menu_id' => ' ',
                'menu_class' => '',
                'echo' => true,
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'items_wrap' => '<ul class="menu">%3$s<li class="menu-item nav-search"><a class="menu-link-search" href="/search" aria-label="Search JSaRC" role="button" aria-haspopup="true"><span class="search-icon">Search JSaRC</span></a></li></ul>',
                // 'walker' => new description_walker()
                'walker' => new Walker_Quickstart_Menu()
                )); ?>
                <aside class="search" role="search">
                    <form id="nav-searchform" class="nav-searchform" action="/search" method="get">
                        <div class="nav-searchform-wrapper">
                            <input data-index="1" class="nav-searchform-input" type="text" aria-label="Search jsarc.org" placeholder="Search jsarc.org" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" />
                            <button class="nav-searchform-submit" type="submit" disabled aria-label="Submit Search"></button>
                            <button class="nav-searchform-reset" type="reset" disabled aria-label="Clear Search"></button>
                        </div>
                    </form>
                    <button class="nav-search-close">
                        <span class="nav-search-close-wrapper" aria-hidden="true">
                            <span class="nav-search-close-left"></span>
                            <span class="nav-search-close-right"></span>
                        </span>
                        <span class="nav-search-close-text" aria-label="Cancel Search">Cancel</span>
                    </button>
                </aside>
            </div>
            
        </div>
    </nav>
    <div class="nav-placeholder"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

        var html = document.querySelector('html'),
            menuAnchor = document.querySelectorAll('.nav-menu-state'),
            nav = document.querySelector('.nav'),
            dropdown = document.querySelectorAll('.dropdown, .nav-search'),
            searchIcon = document.querySelector('.nav-search'),
            searchForm = document.querySelector('.nav-searchform'),
            searchInput = searchForm.querySelector('.nav-searchform-input'),
            searchClose = document.querySelector('.nav-search-close'),
            searchSmallPlaceholder = document.querySelector('.search-small-placeholder'),
            munuLinks = nav.querySelectorAll('.menu-link'),
            desktop = window.matchMedia('(min-width: 1025px)');
    
    
    
        searchSmallPlaceholder.addEventListener('click', function( event ) {
            event.preventDefault();
            searchIsOpenFun();
        }, true);
    
        searchInput.addEventListener('focus', function( event ) {
            event.preventDefault();
            searchIsOpenFun();
        
        }, true);
    
        var searchIsOpenFun = function ( event ) {
            if(desktop.matches) {
                nav.classList.add('search-is-open');
            }
            else {
                nav.classList.add('search-small-is-open');
            }
        
            searchIsOpen = true;
        
            searchInput.focus();
        
            Array.prototype.forEach.call(dropdown, function(a, i){
                a.classList.remove('expanded');
                a.setAttribute('aria-expanded', 'false');
            });
        };
    
        var searchCloseFun = function ( event ) {
            if (desktop.matches) {
                nav.classList.remove('search-is-open');
            }
            else {
                nav.classList.remove('search-small-is-open');
                searchSmallPlaceholder.focus();
            }
            searchInput.value = '';
        };
    
        Array.prototype.forEach.call(munuLinks, function(a, i){
            a.addEventListener('focus', function( event ) {
                if (nav.classList.contains('search-small-is-open')) {
                    searchCloseFun();
                }
            }, true);
            a.addEventListener('click', function( event ) {
                if (nav.classList.contains('search-small-is-open')) {
                    searchCloseFun();
                }
            }, true);
        });
    
        searchIcon.addEventListener('click', function( event ) {
            event.preventDefault();
            searchIsOpenFun();
        }, true);
    
        searchClose.addEventListener('focus', function( event ) {
            event.preventDefault();
            searchIsOpen = true;
        }, true);
    
        searchClose.addEventListener('click', function( event ) {
            event.preventDefault();
            searchCloseFun();
        }, true);
    
        searchClose.addEventListener('blur', function( event ) {
            event.preventDefault();
            searchIsOpen = false;
            setTimeout(function() {
                if (!searchIsOpen) {
                    searchCloseFun();
                }
            }, 10);
        }, true);   
    
        Array.prototype.forEach.call(dropdown, function(a, i){

            var dropdownCloseFunFun = function ( event ) {
                Array.prototype.filter.call(a.parentNode.children, function(s){
            
                    if (s.classList.contains('expanded')) {
                        var sc = s.querySelectorAll('a')[0];
                        s.classList.remove('expanded');
                        sc.setAttribute('aria-expanded', 'false');
                    };
                });
            };
        
            var b = a.querySelectorAll('a');
            var bf =  b[0];
        
            Array.prototype.forEach.call(b, function(c, i){
            
                var dropdownOpen = function ( event ) {
                    dropdownCloseFunFun();
                    a.classList.add('expanded');
                    bf.setAttribute('aria-expanded', 'true');
                    isFocused = true;
                };
            
                var dropdownCloseFun = function ( event ) {
                    isFocused = false;
                    setTimeout(function() {
                      if (!isFocused) {
                            dropdownCloseFunFun();
                      }
                    }, 10);
                
                };
            
                c.addEventListener('mouseover', function( event ) {
                    if(desktop.matches && this.parentNode !== searchIcon) {
                        dropdownCloseFun();
                        dropdownOpen();
                    }
                }, true);
            
                c.addEventListener('mouseleave', function( event ) {
                    if(desktop.matches && this.parentNode !== searchIcon) {
                        dropdownCloseFun();
                    }
                }, true);
            
                c.addEventListener('focus', function( event ) {
                    dropdownCloseFun();
                    dropdownOpen();
                }, true);
            
                c.addEventListener('blur', function( event ) {
                    dropdownCloseFun();
                }, true);
            
                bf.addEventListener('click', function( event ) {
                    if (!desktop.matches) {
                        event.preventDefault();
                        el = this;
                        elHref = el.href;
                    
                        setTimeout(function() {
                        
                            if (!a.classList.contains('expanded')) {
                                dropdownOpen();
                            }
                            el.addEventListener('click', function( event ) {
                                window.location = elHref;
                            }, true);
                        }, 10);
                    }
                    
                }, true);
     
                 
                
            
                window.addEventListener('resize', function( event ) {
                    dropdownCloseFun();
                    searchCloseFun();
                }, true);
            
            });
    
        });
    
        window.addEventListener('scroll', function() {
    
            var y = window.pageYOffset | document.body.scrollTop | window.scrollY;

            if (y >= 200) {
                nav.classList.add('sticky');
            }
            else {
                nav.classList.remove('sticky');
            }
        });
    
        Array.prototype.forEach.call(menuAnchor, function(a, i){
    
            a.addEventListener('click', function( event ) {
        
                event.preventDefault();
            
                Array.prototype.forEach.call(dropdown, function(a, i){
                    
                    
                    if (a.classList.contains('expanded')) {
                        a.classList.remove('expanded');
                        a.querySelectorAll('a')[0].setAttribute('aria-expanded', 'false');
                    }
                    
                    var subMenuItems = a.querySelectorAll('.sub-menu-item');
                    Array.prototype.forEach.call(subMenuItems, function(item, i){
                        if (item.classList.contains('current-menu-item')) {
                            a.classList.add('expanded');
                            a.querySelectorAll('a')[0].setAttribute('aria-expanded', 'true');
                        }
                    });
                    
                });
            
                if (!nav.classList.contains('opened')) {
                    nav.classList.add('opened');
                    document.querySelector('.nav-menu-state-close').focus();
                    html.classList.add('noscroll');
                }
                else {
                    nav.classList.remove('opened');
                    document.querySelector('.nav-menu-state-open').focus();
                    html.classList.remove('noscroll');
                
                    if (nav.classList.contains('search-small-is-open')) {
                        searchCloseFun();
                    }
                }
        
            }, false);
        
        });
    
    });
    </script>
    <main id="main">