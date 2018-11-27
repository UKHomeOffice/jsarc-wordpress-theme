<style>

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

PAGE ABOUT / SECTION HEADER

----------------------------------*/
.section.section-header {
	background-color: #000;
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
	background-position: 80% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/about-header-bg.png");
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

PAGE ABOUT / SECTION INTRO

----------------------------------*/


.section-intro .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section-intro .section-headline {
	font-size: 24px;
	line-height: 32px;
	font-weight: bold;
	color: #4A4A4A;
	margin-bottom: 45px;
}

.section-intro .body-text {
	font-size: 18px;
	line-height: 28px;
	color: #4A4A4A;
	margin-bottom: 34px;
}
.section-intro ol {
	list-style-position: outside;
	margin: 0;
	padding: 0 24px;
}


.section-intro .box-link {
	display: block;
	min-height: 120px;
	width: 300px;
	background-color: #047989;
	margin-bottom: 50px;
	float: right;
	position: relative;
	padding-bottom: 50px;
}

.section-intro .box-link.blue {
	background-color: #01749F;
}

.section-intro .box-link .box-link-content {
	padding: 33px 25px;
	color: #fff;
	font-size: 19px;
	line-height: 30px;
}
.section-intro .box-link .arrow {
	content: '';
	display: block;
	width: 14px;
	height: 14px;
	border: 0 solid #fff;
	border-width: 4px 4px 0 0;
	transform: rotate(45deg);
	position: absolute;
	bottom: 33px;
	right: 25px;
	
}

@media only screen and (max-width: 1068px) {
	.section-intro .box-link {
		display: block;
		width: 200px;
		min-height: 205px;
	}
}

@media only screen and (max-width: 735px) {
	.section-intro .box-link {
		width: 300px;
		min-height: 120px;
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}

/*---------------------------------

PAGE ABOUT / SECTION MISSION

----------------------------------*/
.section.section-mission {
	background-color: #1E4289;
	min-height: 400px;
}
.section.section-mission .section-image {
	position: absolute;
	width: 50%;
	height: 400px;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/jsarc-mission-illustration.png");
}



.section.section-mission .section-content {
	padding-top: 100px;
}

@media only screen and (max-width: 735px) {
	.section.section-mission .section-image {
		width: 100%;
		height: 300px;
	}
	.section.section-mission .section-content {
		padding-top: 400px;
		min-height: 300px;
	}
}

.section.section-mission .section-headline {
	color: #fff;
	font-size: 36px;
	line-height: 43px;
	text-align: right;
	margin-bottom: 50px;
	max-width: 400px;
	float: right;
}

@media only screen and (max-width: 1068px) {
	.section.section-mission .section-headline {
		max-width: 300px;
	}
}

.section.section-mission .button.more {
	float: right;
	color: #5EC6EB;
	border: 2px solid #5EC6EB;
}

@media only screen and (max-width: 735px) {
	.section.section-mission .button.more {
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}

@media only screen and (max-width: 735px) {
	.section.section-mission .section-headline {
		text-align: center;
		max-width: 100%;
		float: none;
	}
	.section.section-mission .button.more {
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}

/*---------------------------------

PAGE ABOUT / SECTION ENGAGE

----------------------------------*/


.section-engage .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section-engage .section-headline {
	font-size: 36px;
	line-height: 42px;
	font-weight: bold;
	margin-bottom: 45px;
}
.section-engage .subheading {
font-size: 24px;
font-weight: bold;
line-height: 34px;
margin-bottom: 22px;
}
.section-engage .body-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 34px;
}

.section-engage ul.body-text {
	margin-top: -15px;
}

.section-engage ul.body-text li:before {
	content: "";
	display: inline-block;
	vertical-align: middle;
	margin: 0 20px 0 40px;
	width: 6px;
	height: 6px;
	background-color: #000;
	border-radius: 50%;
}
/*---------------------------------

PAGE ABOUT / SECTION BENEFITS

----------------------------------*/
.section.section-benefits {
	background-color: #E3E3E3;
}
.section.section-benefits .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}


.section.section-benefits .benefits-image {
	height: 600px;
	width: 100%;
	background-size: cover;
	background-position: 50% 50%;
}

.section.section-benefits .benefits-image.benefits-image-1 {
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/benefits-1.png");
}
.section.section-benefits .benefits-image.benefits-image-2 {
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/benefits-2.png");
}
.section.section-benefits .benefits-image.benefits-image-3 {
	background-image: url("/wp-content/themes/jsarc/img/v/about/b/benefits-3.png");
}

.section.section-benefits .section-headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

.section.section-benefits .block {
	background-color: #fff;
	margin-bottom: 50px;
	
}
.section.section-benefits .block-text-content {
	display: table;
	padding: 50px;
	min-height: 500px;
}
@media only screen and (max-width: 735px) {
	.section.section-benefits .benefits-image {
		height: 400px;
	}
	.section.section-benefits .block-text-content {
		padding: 50px;
		min-height: 300px;
	}
}

.section.section-benefits .block-text-inner {
	display: table-cell;
	vertical-align: middle;
}
.section.section-benefits .block-headline {
	font-size: 24px;
	font-weight: bold;
	line-height: 34px;
	margin-bottom: 22px;
}
.section.section-benefits .block-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 50px;
}
.section.section-benefits .block-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 28px;
}


/*--------------------------------------

SECTION LEADERSHIP

---------------------------------------*/



.section.section-leadership {

}

.section.section-leadership .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-leadership .section-headline {
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
    .section.section-leadership .section-headline {
        text-align: center;
    }
}


.section.section-leadership .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 75px;
}
.section.section-leadership .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
}


.section.section-leadership .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-leadership .tile-item,
    .section.section-leadership .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-leadership .tile-image {
    width: 100%;
    height: auto;
    padding-bottom: 63%;
    background-size: cover;
}

.section.section-leadership .tile-image.tile1 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile1.png");
}
.section.section-leadership .tile-image.tile2 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile2.png");
}
.section.section-leadership .tile-image.tile3 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile3.png");
}
.section.section-leadership .tile-image.tile4 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile4.png");
}
.section.section-leadership .tile-image.tile5 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile5.png");
}
.section.section-leadership .tile-image.tile6 {
    background-image: url("/wp-content/themes/jsarc/img/v/about/b/team-profile6.png");
}


.section.section-leadership .caption-wrapper {
    padding: 25px;
    min-height: 150px;
    background-color: #1E4289;
}

@media only screen and (max-width: 1068px) {
	.section.section-leadership .caption-wrapper {
		min-height: 90px;
	}
}

@media only screen and (max-width: 735px) {
	.section.section-leadership .caption-wrapper {
		min-height: 150px;
	}
}


.section.section-leadership .tile-headline {
    color: #fff;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 8px;
}

.section.section-leadership .tile-caption {
	color: #fff;
    font-size: 18px;
	line-height: 24px;
}

.section.section-leadership .button.more {
	border: 2px solid #000;
	width: 290px;
}

@media only screen and (max-width: 735px) {
	.section.section-leadership .button.more {
		float: none;
		margin-left: auto;
		margin-right: auto;
	}
}


/*---------------------------------

SECTION PROJECTS

----------------------------------*/

.section.section-projects {
    background-color: #e3e3e3;
}

.section.section-projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
}

.section.section-projects .section-content-inner {
    max-width: 840px;
    padding-left: 20px;
    padding-right: 20px;
    margin-left: auto;
    margin-right: auto;
}

@media only screen and (max-width: 1068px) {
    .section.section-projects .section-content-inner {
        max-width: 692px;
    }
}

@media only screen and (max-width: 735px) {
    .section.section-projects .section-content-inner {
        max-width: 90%;
    }
}
.section.section-projects .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

@media only screen and (max-width: 735px) {
    .section.section-projects .section-headline {
        text-align: center;
    }
}


.section.section-projects .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}
.section.section-projects .tile-item {
    float: left;
    display: block;
	width: 46%;
	margin-left: 5%;
    background-color: #fff;
}

.section.section-projects .tile-item .tile-link {
    display: block;
}


.section.section-projects .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-projects .tile-item,
    .section.section-projects .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}

.section.section-projects .tile-image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.section-projects .tile-image {
	position: absolute;
	top: 0;
	left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    transition: transform 0.5s;
    transform: scale(1);
    transform-origin: 50% 50%;
}

.section.section-projects .tile-item .tile-link:hover .tile-image {
    transform: scale(1.1);
}


.section.section-projects .tile-image.tile1 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb1.png");
}
.section.section-projects .tile-image.tile2 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb2.png");
}


.section.section-projects .caption-wrapper {
    padding: 25px;
}
.section.section-projects .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-projects .tile-caption {
    font-size: 18px;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-projects .more-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 1;
}

.section.section-projects .more-link:after {
	content: '';
	display: inline-block;
	vertical-align: middle;
	margin-left: 5px;
	width: 6px;
	height: 6px;
	transform: rotate(45deg);
	border: 1px solid #01749F;
	border-width: 0.1em 0.1em 0 0;
}

.section.section-projects .tile-item .tile-link:hover .more-link {
    text-decoration: underline;
}


.section.section-projects .button.more {
	width: 360px;
	min-width: 360px;
	border: 2px solid #000;
}

@media only screen and (max-width: 735px) {
	.section.section-projects .button.more {
		margin-left: auto;
		margin-right: auto;
	}
}



</style>


<section class="section section-header">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<h1 class="hero-headline">About JSaRC</h1>
	</div>
</section>

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item">About</li>
		</ul>
	</div>
</nav>

<section class="section section-intro">
	<div class="section-content">
		<div class="row">
			<div class="column large-8 small-12"> 
				<h2 class="section-headline">The primary aim of The Joint Security and Resilience Centre (JSaRC) is to combine government, academic and private sector expertise to provide security outcomes for the United Kingdom. JSaRC is a Home Office unit, established by the Office of Security and Counter-Terrorism (OSCT) in 2016.</h2>

				<p class="body-text">JSaRC works to overcome the traditional barriers that have prevented successful collaboration between the private and public sectors.</p>

				<p class="body-text">By improving the understanding that public and private sectors have of each other, the key issues and the trends that impact on the UK’s security and resilience, both sides can work together to counter the fast-moving and ever-evolving threats to our citizens, both here and abroad.</p>
				
				<p class="body-text">JSaRC’s aims are reflected in the national security framework as set out in SDSR 2015, which represents the UK’s national security interests through 3 National Security Objectives:</p>
				<ol class="body-text">
					<li><strong>Protect our people</strong> – At home, in our Overseas Territories and abroad, and to protect our
territory, economic security, infrastructure and way of life.</li>
					<li><strong>Project our global influence</strong> – Reducing the likelihood of threats materialising and affecting the UK, our interests, and those of our allies and partners.</li>
					<li><strong>Promote our prosperity</strong> – Seizing opportunities, working innovatively and supporting UK
industry.</li>
				</ol>
				<p class="body-text">JSaRC’s remit is threat agnostic. We work to support the UK’s National Security Objectives and to protect our people. We collaborate with any government department, academic institution or private sector organisation that has a requirement, idea, project or solution with the potential to improve, by designing out harm, the security and resilience of the United Kingdom.</p>
			</div>
			<div class="column large-4 small-12">
				<aside class="aside">
					<div class="aside content">
						<a class="box-link" href="">
							<div class="box-link-content">Tell JSaRC about your  security product, service or concept</div><span class="arrow"></span>
						</a>
						<a class="box-link blue" href="">
							<div class="box-link-content">See the latest opportunities for collaboration and JSaRC's Innovation Calls</div><span class="arrow"></span>
						</a>
					</div>
				
				</aside>
			</div>
		</div>
	</div>
</section>


<section class="section section-mission">
	<figure class="section-image"></figure>
	<div class="section-content">
		<div class="row">
			<div class="column large-6 large-push-6 small-12 small-push-0">
				<h2 class="section-headline">The JSaRC Mission, Strategy and Objectives</h2>
				<a class="button more" href="">Watch video</a>
			</div>
		</div> 
	</div>
</section>

<section class="section section-engage">
	<div class="section-content">
		<h2 class="section-headline">How to engage with JSaRC</h2>

		<p class="body-text">JSaRC has a number of principal mechanisms through which we engage with our
stakeholders. These include events such as the Security & Policing Home Office event, DSEI, and the International Security Expo.</p>
		<h3 class="subheading">Commencing a project</h3>
		<p class="body-text">Formal engagements and projects are the primary means by which we deliver upon our business objectives. Once a project is commenced it can last up to 1 year and can include:</p>
		
		<ul class="body-text">
			<li>Expression of interest</li>
			<li>Call to market</li>
			<li>Market Capability Assessment</li>
			<li>Live trial/testing support</li>
		</ul>
		
		<h3 class="subheading">JSaRC Open Days</h3>
		<p class="body-text">JSaRC holds regular open days at our Cambridge Headquarters. Our open days offer those in the industry and private sector, especially SMEs, the opportunity to gain advice and coaching on how best to work with government.</p>
		
		<h3 class="subheading">Secondees</h3>
		<p class="body-text">JSaRC is up to 50% staffed by Industry Secondees. Our partners within industry and academia supply experienced staff who have existing networks and expertise to work in the JSaRC team to help deliver projects.</p>
		
		<h3 class="subheading">Informal Scoping Discussions</h3>
		<p class="body-text">Prior to a formal engagement commencing, JSaRC will often hold several informal discussions with government departments to help clarify their requirements and what help they may need.</p>
		
		<h3 class="subheading">One-to-one meetings with JSaRC</h3>
		<p class="body-text">We hold one-to-one meetings with SMEs to build a familiarity with their products and to increase their understanding of how they can engage and collaborate with the government.</p>
		
		<h3 class="subheading">JSaRC meetings with Government Boards and Groups</h3>
		<p class="body-text">JSaRC attends a number of government boards and working groups to build awareness of our work and to better understand the requirements of our government partners.
We have meetings with bodies such as the Protective Security and Prepare Strategy Board, the Joint Overseas Protect and Prepare Board, the Home Office International Strategy Board and the Defence and Security Export Working Group.</p>
	</div>
</section>

<section class="section section-benefits">
	<div class="section-content">
		<h2 class="section-headline">Benefits of working with JSaRC</h2>
		
		<div class="block row">
			<div class="column large-5 large-last small-12">
				<figure class="benefits-image benefits-image-1"></figure>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">Industry cooperation</h3>
						<p class="block-text">If you work with us at JSaRC, you will be involved in important and rewarding projects. We make great use of the many fields of expertise that exist in the security sector in order to meet the UK’s security challenges and to ensure resilience for the country.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="block row">
			
			<div class="column large-5 small-12">
				<figure class="benefits-image benefits-image-2"></figure>
			</div>
			<div class="column large-7 small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">JSaRC brings people and innovation together</h3>
						<p class="block-text">Our team draws on a wide pool of expertise spanning security policy, academic and industry specialists. We pride ourselves on working collaboratively with diverse experts and industry leaders to encourage innovation and grow opportunities for the future in the security sector.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="block row">
			
			<div class="column large-5 large-last small-12">
				<figure class="benefits-image benefits-image-3"></figure>
			</div>
			<div class="column large-7 large-first small-12">
				<div class="block-text-content">
					<div class="block-text-inner">
						<h3 class="block-headline">Help to ensure security and national resilience</h3>
						<p class="block-text">If you are involved in industry, either in a larger company in the security sector or a small/medium enterprise, your business, products and acumen could prove to be enormously important to achieving JSaRC's aims and meeting security and resilience objectives.</p>
						<a class="block-link" href="">Read more</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="section section-leadership">
	<div class="section-content">
		<h3 class="section-headline">Meet the JSaRC Team</h3>

		<ul class="tiles-list">
			<li class="tile-item">
				<figure class="tile-image tile1"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Edward Brown</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile2"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Susan Smith</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile3"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Dan Bennett</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
		</ul>
		<ul class="tiles-list">
			<li class="tile-item">
				<figure class="tile-image tile4"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Steve Hyde</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile5"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Ben Harper</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile6"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Chris Collins</h3>
					<div class="tile-caption">Consultant</div>
				<div>
			</li>
		</ul>
		<a class="button more" href="">See all of the team</a>
	</div>
</section>

<?php get_template_part( 'template-parts/content', 'section-casestudies-no-animation'); ?>


<section class="section section-projects">
	<div class="section-content">
		<div class="section-content-inner">
			<ul class="tiles-list">
				<li class="tile-item">
					<a class="tile-link" href="">
						<div class="tile-image-box">
							<figure class="tile-image tile1"></figure>
						</div>
						<div class="caption-wrapper">
							<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
							<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
							<span class="more-link">Read the case study</span>
						</div>
					</a>
				</li>
				<li class="tile-item">
					<a class="tile-link" href="">
						<div class="tile-image-box">
							<figure class="tile-image tile2"></figure>
						</div>
						<div class="caption-wrapper">
							<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
							<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
							<span class="more-link">Read the case study</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<a class="button more" href="">Find out about more JSaRC projects </a>

	</div>
</section>

<?php get_template_part( 'template-parts/content', 'section-register'); ?>