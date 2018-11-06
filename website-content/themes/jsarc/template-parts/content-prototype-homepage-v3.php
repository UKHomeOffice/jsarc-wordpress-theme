<style>


.section {
    position: relative;
    overflow: hidden;
    max-width: 100%;
}



.section-content {
    max-width: 980px;
    margin-right: auto;
    margin-left: auto;
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
}






.section.section-hero .section-content {
    padding-top: 100px;
    padding-bottom: 100px;
}
.section.section-hero .intro-wrapper {
    display: table;
    width: 100%;
    height: 80vh;
    min-height: 568px;
}

.section.section-hero .intro-wrapper .intro {
     display: table-cell;
     vertical-align: middle;
}


.section.section-hero .hero-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 0;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/homepage-hero.png");
    position: absolute;
    background-repeat: no-repeat;
}

.section.section-hero {
	background-color: #000;
}
.section.section-hero .hero-image {
	opacity: .5;
}

.section.section-hero .hero-image {
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



.section.section-hero .hero-headline {
    color: #fff;
    font-size: 64px;
    font-weight: bold;
    line-height: 75px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 36px;
}




.section.section-hero .hero-intro {
    color: #fff;
    font-size: 19px;
    line-height: 28px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 40px;
    max-width: 676px;
}

@media only screen and (max-width: 1068px) {
    .section.section-hero .hero-headline {
        max-width: 500px;
        font-size: 50px;
        line-height: 1.1;
        margin-bottom: 25px;
    }
    .section.section-hero .hero-intro {
        max-width: 450px;
    }
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

.section.section-hero .button.more  {
    background-color: #fff;
}






.section.section-hero .hero-headline {
    opacity: 0;
    -webkit-animation: headline-reveal 1s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    will-change: transform;
}

.section.section-hero .hero-intro,
.section.section-hero .more  {
    opacity: 0;
    -webkit-animation: headline-reveal 1s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    will-change: transform;
}



@keyframes headline-reveal {
    0% {
        opacity: 0;
        -webkit-transform: translateY(25px);
        transform: translateY(25px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
    }
}


/*--------------------------------------

HOMEPAGE / SECTION INNOVATION CALL

---------------------------------------*/


.section.section-innovation-call {
    background-color: #982d46;
}
.section.section-innovation-call .section-content {
    padding-top: 50px;
    padding-bottom: 50px;
}
.section.section-innovation-call .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}
.section.section-innovation-call .eyebrow:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/call-icon.png");
    margin-left: 15px;
}


.section.section-innovation-call .section-headline {
    color: #fff;
    max-width: 500px;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-innovation-call .section-body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	float: left;
	margin-bottom: 40px;

}

.section.section-innovation-call .button.more {
    float: right;
    border: 2px solid #fff !important;
    color: #fff;
    margin-bottom: 76px;


}


/*--------------------------------------

HOMEPAGE / SECTION WORKING

---------------------------------------*/

.section.section-working {
    background-color: #047989;
}

.section.section-working .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-working .section-headline {
	max-width: 655px;
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 40px;
}

.section.section-working .section-body-text {
    max-width: 800px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 30px;
}
.section.section-working .section-body-text + .section-body-text {
    margin-bottom: 50px;
}

@media only screen and (max-width: 1068px) {
    .section.section-working .section-body-text {
        max-width: 800px;
    }
}

.section.section-working .button.more {
    border: 2px solid #fff;
    color: #fff;
}

/*--------------------------------------

HOMEPAGE / SECTION VIDEO

---------------------------------------*/
.section.section-video {
    background-color: #000;
}
.section.section-video .section-content {
    max-width: 2560px;
    width: auto !important;
}

@media only screen and (max-width: 1068px) {
    .section.section-video .section-content {
       max-width: 2560px;
        width: auto !important;
    }
}

@media only screen and (max-width: 735px) {
    .section.section-video .section-content {
        max-width: 100%;
         width: auto !important;
    }
}

.section.section-video .section-image {
    width: 100%;
    height: 400px;
    background-size: cover;
    background-position: 50% 0;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/section-video-bg.png");
    position: relative;
}


@media only screen and (min-width: 1442px) {
    .section.section-video .section-image {
        height: 550px;
    }
}

.section.section-video .section-image:after {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    right: 0;
    height: 100%;
    width: 50px;
    background-image: linear-gradient(to right, transparent 0%, #000 100%);

}

@media only screen and (max-width: 735px) {
    .section.section-video .section-image:after {
        height: 50px;
        width: 100%;
        background-image: linear-gradient(to bottom, transparent 0%, #000 100%);
    }
}


.section.section-video .content-wrapper {
    padding-top: 100px;
    max-width: 500px;
    padding-right: 20px;
}

.section.section-video .section-headline {
    color: #fff;
    font-size: 36px;
	line-height: 42px;
	max-width: 500px;
}
.section.section-video .speaker {
    color: #fff;
    font-size: 20px;
    line-height: 42px;
    margin-bottom: 60px;
}
.section.section-video .button.more {
    color: #fff;
    border: 2px solid #fff;
}

@media only screen and (max-width: 735px) {
    .section.section-video .content-wrapper {
        margin-top: 360px;
        padding-bottom: 60px;
    }
}


/*--------------------------------------

HOMEPAGE / SECTION BENEFITS

---------------------------------------*/

.section.section-benefits {
    background-color: #e3e3e3;
}
.section.section-benefits .section-headline {
    font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 50px;
}

@media only screen and (max-width: 735px) {
    .section.section-benefits .section-headline {
        text-align: center;
    }
}

.section.section-benefits .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-benefits .section-headline {
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
    .section.section-benefits .section-headline {
        text-align: center;
    }
}


.section.section-benefits .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
    margin-bottom: 62px;
}
.section.section-benefits .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-benefits .tile-item .tile-link {
    display: block;
    overflow: hidden;
}


.section.section-benefits .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-benefits .tile-item,
    .section.section-benefits .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-benefits .tile-image-box {
	position: relative;
	padding-bottom: 63%;
	overflow: hidden;
}

.section.section-benefits .tile-image {
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

.section.section-benefits .tile-item .tile-link:hover .tile-image {
    transform: scale(1.1);
}


.section.section-benefits .tile-image.tile1 {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/tile1.png");
}
.section.section-benefits .tile-image.tile2 {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/tile2.png");
}
.section.section-benefits .tile-image.tile3 {
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/tile3.png");
}


.section.section-benefits .caption-wrapper {
    padding: 25px;
}
.section.section-benefits .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-benefits .tile-caption {
    font-size: 18px;
	line-height: 24px;
	margin-bottom: 1em;
}

.section.section-benefits .more-link {
	color: #01749F;
	font-size: 19px;
	font-style: oblique;
	line-height: 1;
}

.section.section-benefits .more-link:after {
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

.section.section-benefits .tile-item .tile-link:hover .more-link {
    text-decoration: underline;
}


.section.section-benefits .button.more {
	width: 360px;
	min-width: 360px;
	border: 2px solid #000;
}

/*--------------------------------------

HOMEPAGE / SECTION CASESTUDY

---------------------------------------*/

.section.section-casestudy {
    height: 400px;
    background-color: #000;
}

.section.section-casestudy .section-image:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
	height: 100%;
	width: 100%;
	background: linear-gradient(to right, rgba(0,0,0,.9) 0%, rgba(0,0,0,0) 100%);
}

.section.section-casestudy .section-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url("/wp-content/themes/jsarc/img/v/homepage/b/case-study-1.png");
}


.section.section-casestudy .section-content {
    padding-top: 83px;
    padding-bottom: 81px;
    position: relative;
    z-index: 1;
}
.section.section-casestudy .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}

.section.section-casestudy .section-headline {
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-casestudy .section-body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 50px;

}

.section.section-casestudy .button.more {
    background-color: #fff;
    color: #000;
}





/*---------------------------------

HOMEPAGE / SECTION PROGECTS

----------------------------------*/



.section.section-projects {
    background-color: #e3e3e3;
}

.section.section-projects .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-projects .section-headline {
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
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
}

.section.section-projects .tile-item .tile-link {
    display: block;
    overflow: hidden;
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
.section.section-projects .tile-image.tile3 {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/project-thumb3.png");
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
	margin-bottom: 1em;
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








</style>



<section class="section section-hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<div class="intro-wrapper">
			<div class="intro">
				<h1 class="hero-headline">The Joint Security and Resilience Centre</h1>
				<p class="hero-intro">Providing a centralised service to coordinate, shape, evolve and grow the security industry to address the UK’s national security priorities.</p>
				<a style="border:none;" class="button more" href="">Current Security Priorities</a>
			</div>
  		</div>
	</div>
</section>


	<section class="section section-innovation-call">
		<div class="section-content">
			<h2 class="eyebrow">Innovation Call</h2>
			<h3 class="section-headline">The Overseas Protect and Prepare programme</h3>
			<p class="section-body-text">This call to industry seeks to explore what industry can do to help deliver OPP’s goals.</p>
			<a class="button more" href="">Find out more</a>
		</div>
	</section>


<section class="section section-working">
	<div class="section-content">
		<h3 class="section-headline">What we do</h3>
		<p class="section-body-text">The Joint Security and Resilience Centre (JSaRC) is a government department that brings together government representatives, members of academia and the security sector to form a joint response to national security challenges.</p>
		<p class="section-body-text">
		Drawing on a wide pool of expertise, JSaRC works collaboratively with these diverse specialists to encourage innovation and to grow future opportunities in the security sector.</p>
		<a class="button more" href="">Find out more</a>
	</div>
</section>


<section class="section section-video">
	<div class="section-content">
		<div class="row">
			<div class="column large-6 small-12">
				<figure class="section-image"></figure>
			</div>
			<div class="column large-6 small-11 small-centered">
				<div class="content-wrapper">
					<h3 class="section-headline">How JSaRC is changing the face of National Security</h3>
					<p class="speaker">Shaun Hipgrave, Head of JSaRC</p>
					<a class="button more" href="">Find out more</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section section-benefits">
	<div class="section-content">
	
		<h3 class="section-headline">Benefits of engaging with JSaRC</h3>

		<ul class="tiles-list">
			<li class="tile-item">
				<a class="tile-link" href="">
					<div class="tile-image-box">
						<figure class="tile-image tile1"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Funding opportunities</h3>
						<div class="tile-caption">Ensuring the development of the right solutions for today’s security priorities</div>
						<span class="more-link">Read about funding opportunities</span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="">
					<div class="tile-image-box">
						<figure class="tile-image tile2"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Research Support</h3>
						<div class="tile-caption">Support for the research and development of products and services</div>
						<span class="more-link">Read about research support</span>
					</div>
				</a>
			</li>
			<li class="tile-item">
				<a class="tile-link" href="">
					<div class="tile-image-box">
						<figure class="tile-image tile3"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Access to Expertise</h3>
						<div class="tile-caption">Access to industry, academic and government experience and expertise</div>
						<span class="more-link">Read about access to expertise</span>
					</div>
				</a>
			</li>
		</ul>

	</div>
</section>











<section class="section section-casestudy">
	<figure class="section-image"></figure>
	<div class="section-content">
		<h2 class="eyebrow">Case study</h2>
		<h3 class="section-headline">High Footfall Screening Trials</h3>
		<p class="section-body-text">Exploring solutions for securing large, high footfall spaces.

</p>
		<a style="border:none;" class="button more" href="/case-study/">Read the case study</a>
	</div>
</section>


<section class="section section-projects">
	<div class="section-content">

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
			<li class="tile-item">
				<a class="tile-link" href="">
					<div class="tile-image-box">
						<figure class="tile-image tile3"></figure>
					</div>
					<div class="caption-wrapper">
						<h3 class="tile-headline">Explosive Detection Technology Review (EDTR)</h3>
						<div class="tile-caption">The JOPP programme is reducing the ongoing risk from terrorism at home and abroad. </div>
						<span class="more-link">Read the case study</span>
					</div>
				</a>
			</li>
		</ul>
		
		<a class="button more" href="">Find out about more JSaRC projects </a>

	</div>
</section>


<section class="section section-register">
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
		<div>
	</div>
</section>


