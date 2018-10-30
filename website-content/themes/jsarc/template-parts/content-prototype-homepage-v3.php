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






.section.section-alt-hero .section-content {
    padding-top: 100px;
    padding-bottom: 100px;
}
.section.section-alt-hero .intro-wrapper {
    display: table;
    width: 100%;
    height: 80vh;
    min-height: 568px;
}

.section.section-alt-hero .intro-wrapper .intro {
     display: table-cell;
     vertical-align: middle;
}


.section.section-alt-hero .hero-image:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
	height: 100%;
	width: 100%;
	background: linear-gradient(to right, rgba(0,3,7,0.87) 0%, rgba(30,66,138,0) 100%);
}

/* 
.section.section-alt-hero .hero-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 0;
    background-image: url("img/v/homepage/b/homepage-hero_2x.png");
    position: absolute;
    background-repeat: no-repeat;
    z-index: -1;
}
 */



.section.section-alt-hero .hero-headline {
    color: #fff;
    font-size: 64px;
    font-weight: bold;
    line-height: 75px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 36px;
}




.section.section-alt-hero .hero-intro {
    color: #fff;
    font-size: 19px;
    line-height: 28px;
    text-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
    margin-bottom: 40px;
    max-width: 676px;
}

@media only screen and (max-width: 1068px) {
    .section.section-alt-hero .hero-headline {
        max-width: 500px;
        font-size: 50px;
        line-height: 1.1;
        margin-bottom: 25px;
    }
    .section.section-alt-hero .hero-intro {
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

.section.section-alt-hero .button.more  {
    background-color: #fff;
}






.section.section-alt-hero .hero-headline {
    opacity: 0;
    -webkit-animation: headline-reveal 1.4s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1.4s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    will-change: transform;
}

.section.section-alt-hero .hero-intro,
.section.section-alt-hero .more  {
    opacity: 0;
    -webkit-animation: headline-reveal 1.4s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
    animation: headline-reveal 1.4s 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) both;
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

S E C T I O N  I N N O V A T I O N  C A L L

---------------------------------------*/


.section.section-alt-innovation-call {
    background-color: #982d46;
}
.section.section-alt-innovation-call .section-content {
    padding-top: 50px;
    padding-bottom: 50px;
}
.section.section-alt-innovation-call .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}
/* 
.section.section-alt-innovation-call .eyebrow:after {
    content: '';
    display: inline-block;
    vertical-align: baseline;
    width: 42px;
    height: 42px;
    background-size: 42px 42px;
    background-image: url("img/v/homepage/b/call-icon.png");
    margin-left: 15px;
}
 */

.section.section-alt-innovation-call .section-headline {
    color: #fff;
    max-width: 500px;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-alt-innovation-call .section-body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	float: left;
	margin-bottom: 40px;

}

.section.section-alt-innovation-call .button.more {
    float: right;
    border: 2px solid #fff !important;
    color: #fff;
    margin-bottom: 76px;


}


/*--------------------------------------

S E C T I O N  W O R K I N G

---------------------------------------*/

.section.section-alt-working {
    background-color: #0694a7;
}

.section.section-alt-working .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-alt-working .section-headline {
	max-width: 655px;
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 40px;
}

.section.section-alt-working .section-body-text {
    max-width: 800px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 30px;
}
.section.section-alt-working .section-body-text + .section-body-text {
    margin-bottom: 50px;
}

@media only screen and (max-width: 1068px) {
    .section.section-alt-working .section-body-text {
        max-width: 800px;
    }
}

.section.section-alt-working .button.more {
    border: 2px solid #fff;
    color: #fff;
}

/*--------------------------------------

S E C T I O N  V I D E O

---------------------------------------*/
.section.section-alt-video {
    background-color: #000;
}
.section.section-alt-video .section-content {
    max-width: 2560px;
    width: auto !important;
}

@media only screen and (max-width: 1068px) {
    .section.section-alt-video .section-content {
       max-width: 2560px;
        width: auto !important;
    }
}

@media only screen and (max-width: 735px) {
    .section.section-alt-video .section-content {
        max-width: 100%;
         width: auto !important;
    }
}

/* 
.section.section-alt-video .section-image {
    width: 100%;
    height: 400px;
    background-size: cover;
    background-position: 50% 0;
    background-image: url("img/v/homepage/b/section-video-bg.png");
    position: relative;
}
 */

@media only screen and (min-width: 1442px) {
    .section.section-alt-video .section-image {
        height: 550px;
    }
}

.section.section-alt-video .section-image:after {
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
    .section.section-alt-video .section-image:after {
        height: 50px;
        width: 100%;
        background-image: linear-gradient(to bottom, transparent 0%, #000 100%);
    }
}


.section.section-alt-video .content-wrapper {
    padding-top: 100px;
    max-width: 500px;
    padding-right: 20px;
}

.section.section-alt-video .section-headline {
    color: #fff;
    font-size: 36px;
	line-height: 42px;
	max-width: 500px;
}
.section.section-alt-video .speaker {
    color: #fff;
    font-size: 20px;
    line-height: 42px;
    margin-bottom: 60px;
}
.section.section-alt-video .button.more {
    color: #fff;
    border: 2px solid #fff;
}

@media only screen and (max-width: 735px) {
    .section.section-alt-video .content-wrapper {
        margin-top: 360px;
        padding-bottom: 60px;
    }
}


/*--------------------------------------

S E C T I O N  B E N E F I T S

---------------------------------------*/



.section.section-alt-benefits {
    background-color: #e3e3e3;
}

.section.section-alt-benefits .section-content {
    padding-top: 81px;
    padding-bottom: 75px;
    max-width: 1000px;
    padding-left: 20px;
    padding-right: 20px;
}

.section.section-alt-benefits .section-headline {
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
    .section.section-alt-benefits .section-headline {
        text-align: center;
    }
}


.section.section-alt-benefits .tiles-list {
    display: block;
    overflow: hidden;
    width: 100%;
}
.section.section-alt-benefits .tile-item {
    float: left;
    display: block;
    width: 30%;
    margin-left: 5%;
    background-color: #fff;
    padding-bottom: 3%;
}


.section.section-alt-benefits .tile-item:first-child {
    margin-left: 0;
}

@media only screen and (max-width: 735px) {
    .section.section-alt-benefits .tile-item,
    .section.section-alt-benefits .tile-item:first-child {
        float: none;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
}


.section.section-alt-benefits .tile-image {
    width: 100%;
    height: auto;
    padding-bottom: 63%;
    background-size: cover;
}
/* 

.section.section-alt-benefits .tile-image.tile1 {
    background-image: url("img/v/homepage/b/tile1.png");
}
.section.section-alt-benefits .tile-image.tile2 {
    background-image: url("img/v/homepage/b/tile2.png");
}
.section.section-alt-benefits .tile-image.tile3 {
    background-image: url("img/v/homepage/b/tile3.png");
}
 */

.section.section-alt-benefits .caption-wrapper {
    padding: 25px;
}
.section.section-alt-benefits .tile-headline {
    color: #1e4289;
	font-size: 20px;
	font-weight: bold;
	line-height: 24px;
	margin-bottom: 20px;
}

.section.section-alt-benefits .tile-caption {
    font-size: 18px;
	line-height: 24px;
}

/*--------------------------------------

S E C T I O N  C A S E  S T U D Y

---------------------------------------*/

.section.section-alt-case-study {
    min-height: 400px;
}

.section.section-alt-case-study .section-image:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
	height: 100%;
	width: 100%;
	background: linear-gradient(to right, rgba(0,0,0,.9) 0%, rgba(0,0,0,0) 100%);
}
/* 

.section.section-alt-case-study .section-image {
    background-color: #000;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    background-size: 100% auto;
    background-position: 50% 50%;
    background-image: url("img/v/homepage/b/case-study-1.png");
}
 */

.section.section-alt-case-study .section-content {
    padding-top: 83px;
    padding-bottom: 81px;
}
.section.section-alt-case-study .eyebrow {
    font-size: 18px;
    font-weight: bold;
    line-height: 28px;
    color: #fff;
    margin-bottom: 10px;
}

.section.section-alt-case-study .section-headline {
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    line-height: 38px;
    margin-bottom: 20px;
}
.section.section-alt-case-study .section-body-text {
    color: #fff;
	max-width: 654px;
	color: #fff;
	font-size: 19px;
	line-height: 28px;
	margin-bottom: 50px;

}

.section.section-alt-case-study .button.more {
    background-color: #fff;
    color: #000;
}




/*--------------------------------------

S E C T I O N  P R O J E C T S

---------------------------------------*/



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

/* 
.section.section-alt-projects .tile-image.tile1 {
    background-image: url("img/v/homepage/b/project-thumb1.png");
}
.section.section-alt-projects .tile-image.tile2 {
    background-image: url("img/v/homepage/b/project-thumb2.png");
}
.section.section-alt-projects .tile-image.tile3 {
    background-image: url("img/v/homepage/b/project-thumb3.png");
}
 */

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
	width: 360px !important;
	border: 2px solid #000;
}



/*--------------------------------------

S E C T I O N  S T A Y  C O N N E C T E D

---------------------------------------*/


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

/* 

.section.section-alt-stay-connected .social-list .social-item .social-link.twitter {
    background-image: url("img/v/homepage/b/icon-twitter.png");
}

.section.section-alt-stay-connected .social-list .social-item .social-link.youtube {
    background-image: url("img/v/homepage/b/icon-youtube.png");
}

.section.section-alt-stay-connected .social-list .social-item .social-link.facebook {
    background-image: url("img/v/homepage/b/icon-facebook.png");
}

 */



/*--------------------------------------

S E C T I O N  F O O T E R

---------------------------------------*/


.section-footer .section-content {
    padding-top: 40px;
    padding-bottom: 40px;
    min-height: 100px;
}



</style>



<section class="section section-alt-hero">
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


	<section class="section section-alt-innovation-call">
		<div class="section-content">
			<h2 class="eyebrow">Innovation Call</h2>
			<h3 class="section-headline">The Overseas Protect and Prepare programme</h3>
			<p class="section-body-text">This call to industry seeks to explore what industry can do to help deliver OPP’s goals.</p>
			<a class="button more" href="">Find out more</a>
		</div>
	</section>


<section class="section section-alt-working">
	<div class="section-content">
		<h3 class="section-headline">What we do</h3>
		<p class="section-body-text">The Joint Security and Resilience Centre (JSaRC) is a government department that brings together government representatives, members of academia and the security sector to form a joint response to national security challenges.</p>
		<p class="section-body-text">
		Drawing on a wide pool of expertise, JSaRC works collaboratively with these diverse specialists to encourage innovation and to grow future opportunities in the security sector.</p>
		<a class="button more" href="">Find out more</a>
	</div>
</section>


<section class="section section-alt-video">
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


<section class="section section-alt-benefits">
	<div class="section-content">
		<h3 class="section-headline">Benefits of engaging with JSaRC</h3>

		<ul class="tiles-list">
			<li class="tile-item">
				<figure class="tile-image tile1"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Funding opportunities</h3>
					<div class="tile-caption">Ensuring the development of the right solutions for today’s security priorities</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile2"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Research Support</h3>
					<div class="tile-caption">Support for the research and development of products and services</div>
				<div>
			</li>
			<li class="tile-item">
				<figure class="tile-image tile3"></figure>
				<div class="caption-wrapper">
					<h3 class="tile-headline">Access to Expertise</h3>
					<div class="tile-caption">Access to industry, academic and government experience and expertise</div>
				<div>
			</li>
		</ul>

	</div>
</section>


<section class="section section-alt-case-study">
	<figure class="section-image"></figure>
	<div class="section-content">
		<h2 class="eyebrow">Case study</h2>
		<h3 class="section-headline">High Footfall Screening Trials</h3>
		<p class="section-body-text">Exploring solutions for securing large, high footfall spaces.

</p>
		<a style="border:none;" class="button more" href="">Read the case study</a>
	</div>
</section>


<section class="section section-alt-projects">
	<div class="section-content">
		<h3 class="section-headline">Latest updates</h3>

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
		
		<a style="min-width: 360px;" class="button more" href="">See all JSaRC news and updates</a>

	</div>
</section>


<section class="section section-alt-stay-connected">
	<div class="section-content">
		<h3 class="section-headline">Stay connected with JSaRC</h3>
		<a class="button more" href="">Register with JSaRC</a>
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


