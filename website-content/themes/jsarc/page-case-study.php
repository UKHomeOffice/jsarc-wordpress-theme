<?php
/*
 * Template Name: Case Study Page Template
 * The template for displaying Case Study page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>


<style>

.section {
	position: static !important; /* Fixing issue with scroll animation */
}

.section-content {
    width: 980px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 20px;
    padding-right: 20px;
}



@media only screen and (max-width: 1068px) {
    .section-content {
        width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section-content {
        width: 90%;
    }
}



/*---------------------------------

PAGE CASE STUDY / SECTION HEADER

----------------------------------*/
.section.section-header {
	height: 300px;
	background-color: #000;
}

.section.section-header .section-content {
	display: table;
	height: 300px;
	position: relative;
	z-index: 1;
}

.section.section-header .hero-image {
	position: absolute;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-header-bg.png");
	opacity: .5;
}

.section.section-header .hero-image {
	animation: background-opacity 1s forwards;
}

@keyframes background-opacity {
    0% {
		opacity: 1;	
    }
    100% {
		opacity: 0.5;
    }
}

.section.section-header .hero-headline {
	display: table-cell;
	vertical-align: middle;
	color: #fff;
	font-size: 48px;
	font-weight: bold;
	line-height: 1.2;
	text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
}


.section.section-header .hero-headline {
	transform: translateY(50px);
	opacity: 0;
	animation: headline-reveal 1s forwards;
}

@keyframes headline-reveal {
    0% {
    	transform: translateY(50px);
		opacity: 0;	
    }
    100% {
    	transform: translateY(0);
		opacity: 1;
    }
}


@media only screen and (max-width: 1068px) {
	.section.section-header .hero-headline {
		font-size: 38px;
	}
}


/*---------------------------------

PAGE CASE STUDY / SECTION CASE-STUDY-CONTENT

----------------------------------*/
.section.section-case-study-content {

}

.section.section-case-study-content.dark {
	background-color: #000;
}
.section.section-case-study-content.light {
	background-color: #fff;
}

.section.section-case-study-content .section-image-full-with {
	width: 100%;
	height: 100vh;
	min-height: 568px;
	background-size: cover;
}

.section.section-case-study-content .section-image-full-with.case-study-1 {
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-1.png");
}

.section.section-case-study-content .section-image-full-with.case-study-2 {
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-2.png");
}


.section.section-case-study-content .section-content .section-image.case-study-results {
	width: 100%;
	height: auto;
	padding-bottom: 50%;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-results.png");
	margin-bottom: 75px;
}

.sticky-container {
    min-height: 100vh;
    position: relative;
}

.sticky-item {
    position: relative;
    top: 0;
    left: 0;
}

.section.section-case-study-content .section-content {
	max-width: 800px;
	padding-top: 87px;
	padding-bottom: 87px;
}

@media only screen and (max-width: 1068px) {
	.section.section-case-study-content .section-content {
		max-width: 600px;
		padding-top: 60px;
		padding-bottom: 60px;
	}
}

.section.section-case-study-content .section-headline {
	color: #0C0B0B;
	font-size: 24px;
	line-height: 24px;
	margin-bottom: 24px;
	font-weight: bold;
}

.section.section-case-study-content .section-text {
	color: #0C0B0B;
	font-size: 18px;
	line-height: 24px;
	margin-bottom: 24px;
}

.section.section-case-study-content.dark .section-headline,
.section.section-case-study-content.dark .section-text {
	color: #fff;
}

</style>


<section class="section section-header">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<h1 class="hero-headline">Securing Crowded Places</h1>
	</div>
</section>

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="">Our work</a></li>
			<li class="breadcrumbs-item">Securing crowded spaces</li>
		</ul>
	</div>
</nav>

<section class="section section-case-study-content">
	<div class="section-content">
		<h3 class="section-headline">The challenge</h3>
		<p class="section-text">Due to the developing global terrorist threat, as demonstrated in Manchester and London, preventing mass casualty attacks is a priority. Although the UK is considered a leader in the security field, there is an appetite in the Home Office and other government departments to work more closely with industry to improve the detection capabilities and security of crowded places in the UK.</p>
		<p class="section-text">The aim is to allow companies to promote an understanding and awareness of how innovative technologies and operational concepts can be combined to reduce the risk of attacks. This can be achieved without inconveniencing the public or impeding business.</p>
		<p class="section-text">JSaRC wants venues to provide an enhanced visitor experience through easy access combined with assuring visitors about their own security. This involves screening large numbers of people quickly, cost-effectively and proportionately whilst retaining the confidence that no-one entering a crowded space represents a security threat.</p>  
		<p class="section-text">JSaRC is looking to show an alternative to airport-style security. This will provide an insight into the developments in security technology to a previously unused audience.</p>
	</div>
</section>

<section class="section section-case-study-content dark">
	<div class="sticky-container">
		<figure class="section-image-full-with case-study-1 sticky-item"></figure>
	</div>
	<div class="section-content">
		<h3 class="section-headline">Solutions implemented</h3>
		<p class="section-text">JSaRC, partnered with CPNI, Iconal and Fenley Martel, held a series of trials showcasing high footfall screening technologies at various crowded places across the UK. This event took place following a successful initial Innovation Call.</p>
		<p class="section-text">The focus of the trials was to provide an insight into how imaginative and proportional approaches can manage risks related to detecting threat items in crowds. The trials explored how this could be achieved without the usual delays caused by intrusive security processes, such as divesting clothing, which inconvenience visitors and businesses.</p>
		<p class="section-text">While innovative technologies are becoming more available, their adoption has been limited. This is partly due to a lack of understanding of what benefits these technologies offer and how they can be used in real world applications.</p>
		<p class="section-text">Consequently, the limited take-up of new approaches and technologies is often inhibiting, delaying or completely preventing the exploitation of new capabilities that may succeed in mitigating security threats.</p>
	</div>
</section>

<section class="section section-case-study-content">
	<div class="section-content">
		<figure class="section-image case-study-results"></figure>
		<h3 class="section-headline">Results</h3>
		<p class="section-text">In total, 5 sites and 6 technology providers volunteered to participate in trials.</p>
		<p class="section-text">The trials involved real users, which demonstrated a real world impact. This helped to engage all stakeholder groups.</p>
		<p class="section-text">The chosen sites represented typical crowded places. The sites all sought to combine a high level of security assurance with minimum interference for their visitors and existing security procedures. Each site was individually informed as to how to develop the optimal concepts of their operation; this was a process that combined people, processes and technology.</p>
		<p class="section-text">The technology providers sought to understand how their equipment worked best in the field. These demonstrations provided business stakeholders with an important opportunity as ‘the point of the trial is not just the kit, but everything around the kit.’</p>
		<p class="section-text">The trials directed product design and development in a totally unique way, leading one technology provider to comment that the product development lessons learned in a 6 week trial is equivalent to a year of market research.</p>
		<p class="section-text">Another stakeholder commented that the trials give them ‘knowledge of real life applications in front of customers’ and were the most productive use of government support they had had over the 12 year period their product has been in development.</p>
		<p class="section-text">It was the first time that they had seen their system used in test for true high footfall screening, despite having many tens of systems in the field. They estimated that the knowledge gained had accelerated the time to market of their latest version by 18 months (with a £1-2M potential payback).</p>
	</div>
</section>

<section class="section section-case-study-content light">
	<div class="sticky-container">
		<figure class="section-image-full-with case-study-2 sticky-item"></figure>
	</div>
	<div class="section-content">
		<h3 class="section-headline">Outcomes</h3>
		<p class="section-text">The trials proved to be a success and proved that a small lightweight programme can deliver useful and worthwhile trials. They have given manufacturers valuable exposure and have provided site operators with useful insight. Additionally, CPNI is using the learning from the trials to inform guidance development.</p>
		<p class="section-text">Exposure was of great importance to the manufacturers. The trials provided a great opportunity to raise their profile and build relationships with potential customers. The trials enabled the identification of new areas where existing equipment can be adapted. There is now a greater understanding of end user requirements through realistic operational data, which feeds into product development.</p>
		<p class="section-text">For venues, the trials provided valuable insight into a technology’s capabilities and its limitations. This lead to improved confidence in the robustness of the technology and its fitness for service. The trials showed that it is possible for venues to improve customer safety seamlessly, unobtrusively and affordably.  This in turn provided reassurance that high footfall screening is feasible. The opportunity to be able to communicate requirements to developers was also critical.</p>
		<p class="section-text">The interest being shown by major attractions, shopping centres and arenas is now far greater, which will no doubt support the growth of the security sector.</p>
		<p class="section-text">Stakeholders are starting to buy-in to the ‘screen everyone for something’ approach. If this is coupled with the priceless feedback given to manufacturers who are addressing the need for high footfall, low interference and cost-effective technologies, the trials can be said to have successfully driven the delivery of the right solution as well as supporting the growth of the security sector.</p>
	</div>
</section>


<?php get_template_part( 'template-parts/content', 'section-casestudies'); ?>

<?php get_template_part( 'template-parts/content', 'section-projects'); ?>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>



<script>
document.addEventListener('DOMContentLoaded', function() {


    var isInViewPort = function (el) {
    
        var y = window.scrollY || window.pageYOffset;
        
            elT = el.offsetTop,
            elH = el.offsetHeight,
            elB = elT + elH;
            
        return (y > elT && y < elB);
        
        
    };
 

	var a = '.sticky-container',
		b = '.sticky-item';

    document.querySelectorAll(a).forEach(function(el) {

    	var stickyItem = el.querySelector(b);
    
        window.addEventListener('scroll', function() {
        
			if (isInViewPort(el)) {
				var y = window.scrollY || window.pageYOffset,
				
					elT = el.offsetTop,
					elH = el.offsetHeight,
					calc = (elH - y + elT) / elH;
					
				stickyItem.style.position = 'fixed';
				
				if (calc > 1) { stickyItem.style.opacity = 1; }
				else if (calc < 0) { stickyItem.style.opacity = 0; }
				else { stickyItem.style.opacity = calc; }
			
			}
		
			else {
				stickyItem.style.opacity = 1;
				stickyItem.style.position = 'relative';
			} 
    	});
	});

	var isInViewPortPlusWH = function (el) {
	
			var y = window.scrollY || window.pageYOffset;
		
				elT = el.offsetTop,
				elH = el.offsetHeight,
				elB = elT + elH,
				
				wh = window.innerHeight;
				
				
				
				
				
			
			return (y+wh/2 > elT);
		
		
		};
 
	
	// Array.prototype.forEach.call(a, function(el, i){
	document.querySelectorAll('[data-anim-classname]').forEach(function(el) {
    
    	var alldata = JSON.parse(el.dataset.animClassname);
    
    	var elClassName = alldata['cssClass'];
		

		
		

        window.addEventListener('scroll', function() {
        
			if (isInViewPortPlusWH(el)) {
				el.classList.add(elClassName);
			}
			else {
				el.classList.remove(elClassName);
			}
    	});
	});
	
	

	
});
</script>



<?php
get_footer();