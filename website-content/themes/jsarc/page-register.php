<?php
/*
 * Template Name: Register Page
 *
 * The template for displaying register page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>

<?php get_header(); ?>

<?php function add_to_head() { ?>
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
	background-color: #1155a4;
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
</style>
<?php } ?>
<main id="main">
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
                                        <input id="first_name" class="text-field" name="first_name"  type="text" />
                                        <label class="text-field-label" for="first_name">First Name</label>
                                    </div>
                                </div>
                                <div class="column large-5 large-last small-12">
                                    <div class="text-field-wrapper">
                                        <input id="last_name" class="text-field" name="last_name"  type="text" />
                                        <label class="text-field-label" for="last_name">Last Name</label>
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
                                        <label class="text-field-label" for="company">Organisation</label>
                                    </div>
                                </div>
                                <div class="column large-12">
                                    <div class="text-field-wrapper">
                                        <input id="email"  class="text-field" name="email"  type="text" />
                                        <label class="text-field-label" for="email">Email</label>
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

<?php get_template_part( 'template-parts/section', 'projects'); ?>

<?php get_template_part( 'template-parts/section', 'register'); ?>



</main>


<?php function add_to_footer() { ?>
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
<?php } ?>

<?php get_footer();