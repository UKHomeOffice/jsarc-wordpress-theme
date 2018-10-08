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


<div class="primary-nav-placehoder"></div>
<nav id="primary-nav" role="navigation">
    <div class="nav-spacer"></div>
    <div class="primary-nav-content">
        <ul class="primary-nav-header">
            <li class="primary-nav-item">
                <a class="primary-nav-jsarc-logo" href="/">JSaRC</a>
            </li>
            <li class="primary-nav-menuicon">
                <label class="primary-nav-menuicon-label" for="primary-nav-menustate" aria-hidden="true">
                <span class="primary-nav-menuicon primary-nav-menuicon-top"></span>
                <span class="primary-nav-menuicon primary-nav-menuicon-middle"></span>
                <span class="primary-nav-menuicon primary-nav-menuicon-bottom"></span>
                </label>
                <a href="#primary-nav-menustate" class="primary-nav-menuanchor primary-nav-menuanchor-open" id="primary-nav-menuanchor-open">
                <span class="primary-nav-menuanchor-label">Open Menu</span>
                </a>
                <a href="#" class="primary-nav-menuanchor primary-nav-menuanchor-close" id="primary-nav-menuanchor-close">
                <span class="primary-nav-menuanchor-label">Close Menu</span>
                </a>
            </li>
        </ul>
        <div class="primary-nav-list-wrapper">
            <?php wp_nav_menu( array(
                // 'theme_location' => 'header-menu',
                'container' => '',
                'container_class' => '',
                'container_id'=> '',
                'menu_id' => ' ',
                'menu_class' => 'primary-nav-list',
                'echo' => true,
                'before' => '',
                'after' => '',
                // 'link_before' => '<span class="primary-nav-link-text">',
                // 'link_after' => '</span>',
                'depth' => 0,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="primary-nav-item primary-nav-search">
                	<a id="primary-nav-link-search" class="primary-nav-link primary-nav-link-search" href="/search" aria-label="Search JSaRC" role="button" aria-haspopup="true"><span class="search-icon">Search JSaRC</span></a></li></ul>',
                // 'items_wrap'  => '<ul class="%2$s">%3$s</ul>',
                // 'walker' => new description_walker()
                'walker' => new Walker_Quickstart_Menu()
                )); ?>
        </div>
        <form id="primary-nav-searchform" class="primary-nav-searchform" action="/search" method="get">
            <div class="primary-nav-searchform-wrapper">
                <input id="primary-nav-searchform-input" class="primary-nav-searchform-input" type="text" aria-label="Search Search JSaRC" placeholder="Search JSaRC" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" />
                <button id="primary-nav-searchform-submit" class="primary-nav-searchform-submit" type="submit" disabled aria-label="Submit Search"></button>
                <button id="primary-nav-searchform-reset" class="primary-nav-searchform-reset" type="reset" disabled aria-label="Clear Search"></button>
            </div>
        </form>
        <button id="primary-nav-searchview-close" class="primary-nav-searchview-close">
        <span class="primary-nav-searchview-close-wrapper">
        <span class="primary-nav-searchview-close-left"></span>
        <span class="primary-nav-searchview-close-right"></span>
        </span>
        </button>
    </div>
    <div class="nav-spacer"></div>
</nav>
<!-- 
    <div id="primary-nav-curtain" class="primary-nav-curtain"></div>
    <div id="primary-nav-placeholder" class="primary-nav-placeholder"></div>
    -->


<script>
document.addEventListener('DOMContentLoaded', function() {

    var primaryNav = document.querySelector('#primary-nav'),
        searchAnchor = primaryNav.querySelector('#primary-nav-link-search'),
        primaryNavSearch = primaryNav.querySelector('#primary-nav-searchform-input'),
        searchX = primaryNav.querySelector('#primary-nav-searchview-close'),
        navAnchor = primaryNav.querySelector('.primary-nav-menuicon');

    searchAnchor.addEventListener('click', function(e) {
        e.preventDefault();
        primaryNav.classList.add('searchform-open');
        primaryNavSearch.focus();
    });

    searchX.addEventListener('click', function(e) {
        e.preventDefault();
        primaryNav.classList.remove('searchform-open');
    });

    searchAnchor.addEventListener('click', function(e) {
        e.preventDefault();
        primaryNav.classList.add('searchform-open');
        primaryNavSearch.focus();
    });

    p = 50;

    window.addEventListener('scroll', function() {

        //var y = window.pageYOffset | document.body.scrollTop;
        var y = window.scrollY;

        if (y > p) {
            primaryNav.classList.add('sticky');
        }
        else {
            primaryNav.classList.remove('sticky');
        }
    });

    navAnchor.addEventListener('click', function() {
        primaryNav.classList.toggle('nav-active');
    });
});
</script>