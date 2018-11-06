

<style>

.section-content {
    width: 980px;
    margin-right: auto;
    margin-left: auto;
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

PAGE REGISTER / SECTION REGISTER FORM

----------------------------------*/
.section.section-register-form {
	max-width: 2560px;
	width: 100%;
	height: 100%;
	background-size: cover;
	background-position: 50% 50%;
	background-image: url("/wp-content/themes/jsarc/img/v/register/a/hero-register.png");
}

.section.section-register-form .section-image {

}



.section.section-register-form .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}
.section.section-register-form .section-headline {
	font-size: 30px;
	font-weight: bold;
	line-height: 28px;
	margin-bottom: 27px
}
.section.section-register-form .intro {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 27px;
}

.section.section-register-form .content-inner {
	background-color: #fff;
	padding: 75px 50px;
	margin
}

.section.section-register-form .form-wrapper {
	padding-top: 25px;
	background-color: #fff;
}

.section.section-register-form .text-field-wrapper {
	position: relative;
	z-index: 1;
	height: 50px;
	width: 100%;
	border-bottom: 1px solid #7F7F7F;
	margin-bottom: 50px;
}

.section.section-register-form .text-field-wrapper .text-field-label {
	display: block;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	white-space: nowrap;
	color: #8f8f8f;
	font-size: 18px;
	line-height: 50px;
	padding: 0 20px;
	height: 50px;
	transform: translate(0) scale(1);
	transition: transform 0.3s;
	transform-origin: 0 50%;
}

.section.section-register-form .text-field-wrapper .text-field:focus ~ .text-field-label,
.section.section-register-form .text-field-wrapper.active .text-field-label {
	transform: translate(-17px, -24px) scale(0.8);
	z-index: 1;
}


.section.section-register-form .text-field-wrapper .text-field {
	padding: 11px 20px;
	line-height: 28px;
	width: 100%;
	box-sizing: border-box;
}
.section.section-register-form .button {
	line-height: 50px;
	height: 50px;
	width: 224px;
	text-align: center;
	background-color: #07A7E1;
	color: #fff;
}

.section.section-register-form .button .load-spinner {
	display: inline-block;
	width: 16px;
	height: 16px;
	margin-right: 13px;
	border: 2px solid rgba(255,255,255,0.2);
	border-top: 2px solid rgba(255,255,255,1);
	border-radius: 50%;
	vertical-align: middle;
	-webkit-animation: spin 0.6s linear infinite;
	animation: spin 0.6s linear infinite;
}

@keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}


/*---------------------------------

PAGE REGISTER / SECTION PROJECTS

----------------------------------*/
.section.section-projects-and-case-studies {
	min-height: 400px;
	background-color: #000;
}

.section.section-projects-and-case-studies .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
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
	color: #047989;
	background-color: #fff;
	border:0;
	float: right;
}

/*---------------------------------

PAGE CASE STUDY / SECTION PROGECTS / TILES

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






/*---------------------------------

PAGE REGISTER / SECTION STAY CONNECTED

----------------------------------*/

.section.section-stay-connected {
    background-color: #982d46;
}

.section.section-stay-connected .section-content {
    padding-top: 75px;
    padding-bottom: 75px;
}

.section.section-stay-connected .section-headline {
	color: #fff;
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
	margin-bottom: 32px;
}

.section.section-stay-connected .button.more {
    display: inline-block;
    border: 2px solid #fff;
    color: #fff;
}
.section.section-stay-connected .description {
    display: inline;
    vertical-align: middle;
	color: #fff;
	font-size: 19px;
	line-height: 24px;
	margin-left: 30px;
}

.section.section-stay-connected .social {
    margin-top: 48px;
}

.section.section-stay-connected .social-headline {
    display: inline;
	color: #fff;
	font-size: 19px;
	line-height: 24px;
	font-weight: normal;
}

.section.section-stay-connected .social-list {
    display: inline-block;
    vertical-align: middle;
    margin-left: 50px;
}

.section.section-stay-connected .social-list .social-item {
    display: inline-block;
    margin-right: 25px;
}

.section.section-stay-connected .social-list .social-item .social-link {
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

.section.section-stay-connected .social-list .social-item .social-link.twitter {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-twitter.png");
}

.section.section-stay-connected .social-list .social-item .social-link.youtube {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-youtube.png");
}

.section.section-stay-connected .social-list .social-item .social-link.facebook {
    background-image: url("/wp-content/themes/jsarc/img/v/case-study/b/icon-facebook.png");
}


</style>

<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
			<li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
			<li class="breadcrumbs-item">Register</li>
		</ul>
	</div>
</nav>

<section class="section section-register-form">
	<div class="section-content">
		<div class="row">
			<div class="column large-7 medium-10 small-12">
				<div class="content-inner">
					<h1 class="section-headline">Register with JSaRC</h1>
					<p class="intro">Register here to receive information about JSaRC news, funding opportunities and upcoming events.</p>
					<p class="intro">Your information will not be shared with any organisations or government departments outside of JSaRC.</p>
					<div class="form-wrapper">
					
						<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

						<input type=hidden name="oid" value="00D1t000000G0d6">
						<input type=hidden name="retURL" value="https://jsarc.demo.sixpointsix.net">


							<div class="row col2">
								<div class="column large-5 small-12">
									<div class="text-field-wrapper">
										<input  id="first_name" class="text-field" name="first_name"  type="text" />
										<label class="text-field-label" label for="first_name">First Name</label>
									</div>
								</div>
								<div class="column large-5 large-last small-12">
									<div class="text-field-wrapper">
										
										
										
										
										<input  id="last_name" class="text-field" name="last_name"  type="text" />
										<label class="text-field-label" label for="last_name">Last Name</label>
										
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="column large-12">
									<div class="text-field-wrapper">
										<input class="text-field"  type="text">
										<label class="text-field-label">Job title</label>
										
										
									</div>
								</div>
								<div class="column large-12">
									<div class="text-field-wrapper">
										<input id="company" class="text-field" name="company"  type="text" />
										<label class="text-field-label" label for="company">Organisation</label>
									</div>
								</div>
								<div class="column large-12">
									<div class="text-field-wrapper">
										<input  id="email"  class="text-field" name="email"  type="text" />
										<label class="text-field-label" label for="email">Email</label>


									</div>
								</div>
								<div class="column large-12">
									<!-- <button class="button"><span class="~load-spinner"></span>Submit</button> -->
									<input class="button" type="submit" name="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
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

<section class="section section-stay-connected">
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
		</div>
	</div>
</section>






















<script>




document.addEventListener('DOMContentLoaded',function() {




/*
var isNotEmpty = function (el) {
	if (el && el.value) {
		el.parentNode.classList.add('active');
	}
	else {
		el.parentNode.classList.remove('active');
	}
};
*/

	var a = document.querySelectorAll('.text-field-wrapper');
		
    Array.prototype.forEach.call(a, function(el, i){
    
    	var b = el.querySelector('.text-field');

		b.addEventListener('change', function() {
			// isNotEmpty(b);
			if (b && b.value) {
				el.classList.add('active');
			}
			else {
				el.classList.remove('active');
			}
		});
	});

	
});
</script>
