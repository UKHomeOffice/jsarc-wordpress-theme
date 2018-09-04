<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php get_locale(); ?>" lang="<?php get_locale(); ?>" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="Description" content="<?php bloginfo('description'); ?>" />
	<?php require get_template_directory() . '/inc/meta-open-graph-protocol.php'; ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ccwp.build.css" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/js/ccwp.build.js" type="text/javascript" charset="utf-8"></script>
	
<!-- wp_head -->
	<?php wp_head(); ?>
<!--/wp_head -->
<style>
	html { margin-top: 0 !important; }
	* html body { margin-top: 0 !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0 !important; }
		* html body { margin-top: 0 !important; }
	}
	.footer {
		display: block;
	}
</style>

</head>


<body <?php body_class(); ?>>
	


	
	
	
	<main id="main" class="main" role="main">
	
		<a class="logo" href="/">JSaRC</a>
		
		<section class="section section-hero">
			<figure class="hero-image"></figure>
			<div class="section-content hero-headline">
				<div class="hero-headline-inner">
					<h1 class="headline" data-animation="reveal">Joint Security and Resilience Centre</h1>
					<h2 class="sub-headline" data-animation="reveal" data-delay-group="1">Wordpress Core Theme</h2>
					
				</div>
			</div>
			
			
			<nav id="topnav" role="navigation" aria-label="Website Navigation">
				<div class="topnav-content">
					<ul class="topnav-header">
						<li class="topnav-item topnav-menuicon">
							<a href="#topnav-menustate" class="topnav-menuanchor topnav-menuanchor-open" id="topnav-menuanchor-open">
								<span class="topnav-menuanchor-label">Open Menu</span>
							</a>
							<a href="#" class="topnav-menuanchor topnav-menuanchor-close" id="topnav-menuanchor-close">
								<span class="topnav-menuanchor-label">Close Menu</span>
							</a>
						</li>
					</ul>

					<?php wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'container' => '',
						'container_class' => '',
						'container_id'=> '',
						'menu_id' => ' ',
						'menu_class' => 'topnav-list',
						'echo' => true,
						'before' => '',
						'after' => '',
						'link_before' => '<span class="topnav-link-text">',
						'link_after' => '</span>',
						'depth' => 0,
						//'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'items_wrap'  => '<ul class="%2$s">%3$s</ul>',
						'walker' => new description_walker()
					 )); ?>
 
				</div>
			</nav>
			
		</section>
		<section class="section section-second">
			<div class="section-content">
					<div class="column first">
						<h2>Joint Security and Resilience Centre</h2>
						<h3>Igentias venimaio vendellis sequae.</h3>
						<p>Faceatium quis eictem qui ad mi, que plat quas ullaut quo of catquam rerchil iquossusa prae pelis ilit volumquiae quatiis alis de sitis sam facerfe riorit prae sim dolorro reictur aut pro moluptat as quam, sitions endebis num labo. Pudam rem. Ut eos repedigent veritatur simus, optat a que nobit re volupta tiustiam fugias doluptas.</p>
						<p>Que nobitia ndaeprendi omnimaior sundantum voluptusam, uta que voluptur mil inctur a net quide cus dus rem qui
aut velessitae ne nobisci consed quam facessimus reria pelibus anihilit, sed es volenda dolores maiorec temporiore pliquatem erferum as et experiberae</p>
						<p>Ipsanis nis alitem endem laccust porunte cus doles dolorro molupta tempor reiunt acea duciatuscit et optatis versped iciisci ut doloritae eatium venditi onseditaqui beari verfero reicat volorae volum quossequodit fugia digendis namus enit exerovit hitis excepuditiat rectae. Ut vendellis endios sequae pel mi, quasit laut molum ditisci lignam rehenit, aspicia sperit utet estrum exeribeario voluptation pro bla.</p>
						<p>Boreptatur puda pra qui quam sedionsequi ommodit of ci re as duciminti a vel id moluptatur sam este.</p>
						<p>Quis et quis et ut ad explam vel ipsae derspel ipsam ape eaquis es alit dolorem rem rem fuga. Nem fugitem ulpa solent pore pore nimusti buscimi, sundici psandam usciendit que eseceaquam etur? Itatini hitiunt odi occulli asimpost ea qui ium abo. Borepro recest et voluptionem idi ute nonem accupta quaerestoris ad modi que nimin reperov ideniendit, sinulpa volesse quatur, consequi voluptatis omnis.</p>
					</div>
					<?php get_sidebar(); ?>
			</div>
		</section>
		
		<div class="section footnotes">
			<div class="section-content">
				<p>* Boreptatur puda pra qui quam sedionsequi ommodit of ci re as duciminti a vel id moluptatur sam este.</p>
				<ol>
					<li>Que nobitia ndaeprendi omnimaior sundantum voluptusam, uta que voluptur mil inctur a net quide cus dus rem qui.</li>
					<li>Faceatium quis eictem qui ad mi, que plat quas ullaut quo of catquam rerchil iquossusa prae pelis ilit volumquiae quatiis alis de sitis sam facerfe riorit prae sim dolorro reictur aut pro moluptat as quam.</li>
				</ol>
				
			</div>

		</div>
	
	

<?php get_footer(); ?>






