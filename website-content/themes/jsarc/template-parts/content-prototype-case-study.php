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

}

.section.section-header .section-content {
	display: table;
	height: 300px;
}

.section.section-header .hero-image {
	position: absolute;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/case-study-header-bg.png"); 
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

@media only screen and (max-width: 1068px) {
	.section.section-header .hero-headline {
		font-size: 38px;
	}
}


/*---------------------------------

PAGE CASE STUDY / BREADCRUMBS

----------------------------------*/

.breadcrumbs {
	background-color: #E8EBF2;
}

.breadcrumbs .breadcrumbs-list {
	display: block;
	width: 100%;
}

.breadcrumbs .breadcrumbs-list .breadcrumbs-item {
	display: inline-block;
	margin-right: 10px;
	padding: 13px 0;
	height: 24px;
	font-size: 16px;
	line-height: 24px;
}
.breadcrumbs .breadcrumbs-list .breadcrumbs-item:after {
	content: "";
	display: inline-block;
	margin-left: 5px;
	vertical-align: middle;
	width: 5px;
	height: 5px;
	border: 1px solid #000;
	border-width: 1px 1px 0 0;
	transform: rotate(45deg) scale(1.3);
}

.breadcrumbs .breadcrumbs-list .breadcrumbs-item:last-child:after {
	display: none;
}

.breadcrumbs .breadcrumbs-list .breadcrumbs-item .breadcrumbs-link {

}

.breadcrumbs .breadcrumbs-list .breadcrumbs-item .breadcrumbs-link:hover {
	text-decoration: underline;
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

/*---------------------------------

PAGE CASE STUDY / SECTION PROJECTS

----------------------------------*/
.section.section-projects-and-case-studies {
	min-height: 400px;
	background-color: #000;
}

.section.section-projects-and-case-studies .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section.section-projects-and-case-studies .section-image-full-with {
	position: absolute;
	max-width: 2560px;
	width: 100%;
	height: 400px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/projects-image.png");
	opacity: 1;
	transition: opacity 1s;
}

.section.section-projects-and-case-studies.reveal .section-image-full-with {
	opacity: .5;
}

.section.section-projects-and-case-studies .section-headline {
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 90px;
}

.section.section-projects-and-case-studies .section-sub-heading {
	color: #fff;
	font-size: 30px;
	line-height: 42px;
	text-align: right;
	margin-bottom: 22px;
	font-weight: normal;
	opacity: 0;
	transform: 
}


.section.section-projects-and-case-studies.reveal .section-image-full-with {
	opacity: .5;
}

.button.more {
    display: block;
    font-size: 19px;
    line-height: 50px;
    width: 250px;
    text-align: center;
}

@media only screen and (max-width: 1068px) {
    .button.more {
        font-size: 17px;
        line-height: 45px;
        width: 230px;
    }
}

.section.section-projects-and-case-studies .button.more {
	color: #000;
	background-color: #fff;
	border:0;
	float: right;
}


.section.section-projects-and-case-studies .section-headline,
.section.section-projects-and-case-studies .section-sub-heading,
.section.section-projects-and-case-studies .button.more {
	transform: translateY(50px);
	transition: transform 1s, opacity 1s;
	opacity: 0;
}

.section.section-projects-and-case-studies.reveal .section-headline,
.section.section-projects-and-case-studies.reveal .section-sub-heading,
.section.section-projects-and-case-studies.reveal .button.more {
	transform: translateY(0);
	opacity: 1;
}


/*---------------------------------

PAGE CASE STUDY / SECTION PROGECTS / TILES

----------------------------------*/



.section.section-alt-projects {
    background-color: #e3e3e3;
}

.section.section-alt-projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-alt-projects .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

@media only screen and (max-width: 1068px) {
    .section-content {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section-content {
        max-width: 90%;
    }
    .section.section-alt-projects .section-headline {
        text-align: center;
    }
}


.section.section-alt-projects .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}
.section.section-alt-projects .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-alt-projects .tile-item .tile-link {
    display: block;
}


.section.section-alt-projects .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-alt-projects .tile-item,
    .section.section-alt-projects .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}

.section.section-alt-projects .tile-image {
    width: 100%;
    height: auto;
    padding-bottom: 63%;
    background-size: cover;
}


.section.section-alt-projects .tile-image.tile1 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb1.png");
}
.section.section-alt-projects .tile-image.tile2 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb2.png");
}
.section.section-alt-projects .tile-image.tile3 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb3.png");
}


.section.section-alt-projects .caption-wrapper {
    padding: 25px;
}
.section.section-alt-projects .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-alt-projects .tile-caption {
    font-size: 18px;
	line-height: 24px;
}

.section.section-alt-projects .more-link {
	color: #07a7e1;
	font-size: 19px;
	font-style: oblique;
	line-height: 1;
}


.section.section-alt-projects .button.more {
	width: 360px;
	min-width: 360px;
	border: 2px solid #000;
}







/*---------------------------------

PAGE CASE STUDY / SECTION STAY CONNECTED

----------------------------------*/

.section.section-alt-stay-connected {
    background-color: #982d46;
}

.section.section-alt-stay-connected .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-alt-stay-connected .section-headline {
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 32px;
}

.section.section-alt-stay-connected .button.more {
    display: inline-block;
    border: 2px solid #fff;
    color: #fff;
}
.section.section-alt-stay-connected .description {
    display: inline;
    vertical-align: middle;
	color: #fff;
	font-size: 19px;
	line-height: 24px;
	margin-left: 30px;
}

.section.section-alt-stay-connected .social {
    margin-top: 48px;
}

.section.section-alt-stay-connected .social-headline {
    display: inline;
	color: #fff;
	font-size: 19px;
	line-height: 24px;
	font-weight: normal;
}

.section.section-alt-stay-connected .social-list {
    display: inline-block;
    vertical-align: middle;
    margin-left: 50px;
}

.section.section-alt-stay-connected .social-list .social-item {
    display: inline-block;
    margin-right: 25px;
}

.section.section-alt-stay-connected .social-list .social-item .social-link {
    display: block;
    width: 36px;
    height: 36px;
    background-size: 36px 36px;
    border-radius: 50%;
    overflow: hidden;
    text-indent: -999px;
}

@media only screen and (max-width: 1068px) {
    .section-register .social-icons .icon {
        width: 30px;
        height: 30px;
    }
}

.section.section-alt-stay-connected .social-list .social-item .social-link.twitter {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-twitter.png");
}

.section.section-alt-stay-connected .social-list .social-item .social-link.youtube {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-youtube.png");
}

.section.section-alt-stay-connected .social-list .social-item .social-link.facebook {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-facebook.png");
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

<section class="section section-projects-and-case-studies" data-anim-classname='{"cssClass":"reveal"}'>
	<figure class="section-image-full-with"></figure>
	<div class="section-content">
		<h3 class="section-headline">JSaRC projects and case studies</h3>
		<h4 class="section-sub-heading">High Footfall Screening Trials</h4>
		<a class="button more" href="">Read the case study</a>
	</div>
</section>

<section class="section section-alt-projects">
	<div class="section-content">

		<ul class="tiles-list">
			<li class="tile-item">
				<a class="tile-link" href="">
					<figure class="tile-image tile1"></figure>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
						<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
						<span class="more-link">Read the case study ></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="">
					<figure class="tile-image tile2"></figure>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
						<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
						<span class="more-link">Read the case study ></span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="">
					<figure class="tile-image tile3"></figure>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
						<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
						<span class="more-link">Read the case study ></span>
					</div>
				</a>
			</li>
		</ul>
		
		<a class="button more" href="">Find out about more JSaRC projects </a>

	</div>
</section>

<section class="section section-alt-stay-connected">
	<div class="section-content">
		<h3 class="section-headline">Stay connected with JSaRC</h3>
		<a class="button more" href="/register/">Register with JSaRC</a>
		<p class="description">To receive the latest news and updates</p>
		<div class="social">
			<h4 class="social-headline">Follow us on</h4>
			<ul class="social-list">
				<li class="social-item"><a  class="social-link twitter" href="">Twitter</a></li>
				<li class="social-item"><a  class="social-link youtube" href="">YouTube</a></li>
				<li class="social-item"><a  class="social-link facebook" href="">Facebook</a></li>
			</ul>
		</div>
	</div>
</section>



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
