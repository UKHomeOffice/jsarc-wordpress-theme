<?php
/*
 * Template Name: Contact Page Template
 * The template for displaying About page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JSaRC
 */
?>


<?php get_header(); ?>


<style>
	

.hero .hero-image {
	position: absolute;
	z-index: -1;
	max-width: 2560px;
	width: 100%;
	height: 300px;
	background-size: cover;
	background-position: 80% 50%;
	background-image: url("<?php the_field( 'hero_image' ); ?>");	
}
.hero .section-content {
	display: table;
	height: 300px;
	
}
.hero .headline-wrapper {
	display: table-cell;
	vertical-align: middle;
}

.hero .hero-headline {
	display: inline-block;
	width: 80%;
	font-size: 36px;
	line-height: 75px;
	font-weight: bold;
	color: #fff;
}
.hero .hero-headline span {
	display: inline;
	padding: 15px 0;
	box-shadow: 20px 0 0 #000, -20px 0 0 #000;
	background-color: #000;
}
	
	
.contact .section-content {
	padding-top: 70px;
	padding-bottom: 70px;
}

.contact .form .heading-text {
	font-size: 20px;
	font-weight: bold;
	line-height: 31px;
	margin-bottom: 20px;
}

.contact .form .body-text {
	font-size: 18px;
	line-height: 28px;
	margin-bottom: 30px;
}

	
.contact .form .text-field-wrapper {
	display: block;
	position: relative;
	z-index: 1;
	height: 40px;
	width: 100%;
	border-bottom: 1px solid #888;
	margin-bottom: 25px;
}
.contact .form .text-field-wrapper.message {
	height: auto;
	min-height: 200px;
	border-bottom: none;
}
.contact .form .text-field-wrapper.message .text-field,
.contact .form .text-field-wrapper.message .text-field:focus {
	border: 1px solid #888;
	margin-bottom: 10px;
}

.contact .form .text-field-wrapper .text-field,
.contact .form .text-field-wrapper .text-field:focus {
	display: block;
	height: 40px;
	width: 100%;
	font-size: 19px;
	line-height: 28px;
	padding: 6px 20px;
	border: 0;
	outline: 0;
	background: 0 0;
	box-sizing: border-box;
}

.contact .form .text-field-wrapper.message .text-field {
	height: auto;
	min-height: 200px;
	max-width: 100%;
}

.contact .form .text-field-wrapper .text-field-label {
	display: block;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 20px;
	white-space: nowrap;
	color: #8f8f8f;
	font-size: 18px;
	line-height: 1;
	height: 1em;
	margin-top: 8px;
	transform: translate(0) scale(1);
	transition: transform 0.3s;
	transform-origin: 0 50%;
	background-color: #fff;
}

.contact .form .text-field-wrapper .text-field:focus ~ .text-field-label,
.contact .form .text-field-wrapper.active .text-field-label {
	transform: translate(0, -24px) scale(0.8);
	z-index: 1;
}

.contact .form .text-field-wrapper.message .text-field:focus ~ .text-field-label,
.contact .form .text-field-wrapper.message.active .text-field-label {
	transform: translate(0, -30px) scale(0.8);
}

.contact .form .dropdown-wrapper {
	border-bottom: 1px solid #888;
	margin-bottom: 25px;
	position: relative;
}

.contact .form .dropdown-wrapper:before {
	content: "";
	display: block;
	position: absolute;
	top: 13px;
	right: 20px;
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-bottom: 4px solid #888;
	pointer-events: none;
}

.contact .form .dropdown-wrapper:after {
	content: "";
	display: block;
	position: absolute;
	bottom: 13px;
	right: 20px;
	width: 0; 
	height: 0; 
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-top: 4px solid #888;
	pointer-events: none;
}

.contact .form .dropdown-wrapper .form-dropdown {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    
    color: inherit;
    
    display: block;
	height: 40px;
	width: 100%;
	font-size: 19px;
	line-height: 28px;
	padding: 6px 20px;
	border: 0;
	outline: 0;
	background: #fff;
	box-sizing: border-box;
	
	border-radius: 0;
	-webkit-border-radius: 0;
}

.contact .form .dropdown-wrapper .form-dropdown::-ms-expand {
    display: none
}

.contact .form .button-wrapper {
	padding-top: 25px;
	display: block;
	height: 50px;
}
.contact .form .button.submit {
	display: block;
	height: 50px;
	width: 175px;
	background-color: #01749F;
	color: #fff;
	font-size: 18px;
	text-align: center;
}


.contact .address:last-child {
	margin-top: 50px;
	padding-top: 50px;
	border-top: 1px solid #999;
}

@media only screen and (max-width: 735px) {
    .contact .address:first-child {
    	margin-top: 50px;
    }
}

.contact .address .heading {
	font-size: 24px;
	font-weight: bold;
	line-height: 36px;
	margin-bottom: 20px;
}
.contact .address .details {
	font-size: 18px;
	line-height: 31px;
}



</style>


<header class="section hero">
	<figure class="hero-image"></figure>
	<div class="section-content">
		<div class="headline-wrapper">
			<h1 class="hero-headline"><span><?php the_title(); ?></span></h1>
		</div>
	</div>
</header>
<div class="section contact">
	<div class="section-content">
		<div class="row">
			<div class="column large-7 small-12">
				<div class="form">
					<h2 class="heading-text"><?php the_field( 'form_text_heading' ); ?></h2>
					<p class="body-text"><?php the_field( 'form_text_body' ); ?></p>
				
					<form action="action_page.php">
						<ul class="inputs">
							<?php if ( have_rows( 'select_nature' ) ) : ?>
							<li class="dropdown-wrapper">
								<select class="form-dropdown">
								<?php while ( have_rows( 'select_nature' ) ) : the_row(); ?>
									<option value="<?php the_sub_field( 'option_text' ); ?>"><?php the_sub_field( 'option_text' ); ?></option>
								<?php endwhile; ?>
								</select>
							</li>
							<?php endif; ?>
						
							<?php if ( have_rows( 'message' ) ) : ?>
							<?php while ( have_rows( 'message' ) ) : the_row(); ?>
							<li class="text-field-wrapper message">
								<textarea class="text-field" id="message" name="message" maxlength="<?php the_sub_field( 'message_characters_limit' ); ?>"></textarea>
								<label for="message" class="text-field-label"><?php the_sub_field( 'message_label' ); ?></label>
								<p>Content is limited to <?php the_sub_field( 'message_characters_limit' ); ?> characters, remaining <b id="count"><?php the_sub_field( 'message_characters_limit' ); ?></b></p>
							</li>
							
							<?php endwhile; ?>
							<?php endif; ?>
						
							<li class="text-field-wrapper">
								<input class="text-field" id="name" name="name" type="text"  />
								<label for="name" class="text-field-label"><?php the_field( 'name_label' ); ?></label>
							</li>
						
							<li class="text-field-wrapper">
								<input class="text-field" id="email" name="email" type="text"  />
								<label for="email" class="text-field-label"><?php the_field( 'email_label' ); ?></label>
							</li>
						
							<li class="text-field-wrapper">
								<input class="text-field" id="phone" name="phone" type="text"  />
								<label for="phone" class="text-field-label"><?php the_field( 'phone' ); ?></label>
							</li>
						
							<li class="text-field-wrapper">
								<input class="text-field" id="organisation" name="organisation" type="text"  />
								<label for="organisation" class="text-field-label"><?php the_field( 'organisation_label' ); ?></label>
							</li>
						
							<?php if ( have_rows( 'select_sector' ) ) : ?>
							<li class="dropdown-wrapper">
								<select class="form-dropdown">
								<?php while ( have_rows( 'select_sector' ) ) : the_row(); ?>
									<option value="<?php the_sub_field( 'option_text' ); ?>"><?php the_sub_field( 'option_text' ); ?></option>
								<?php endwhile; ?>
								</select>
							</li>
							<?php endif; ?>
						
							<li class="button-wrapper">
								<input class="button submit" name="submit" type="submit" value="<?php the_field( 'submit_button_text' ); ?>">
							</li>
						</ul>
					</form>
				</div>
			</div>
			<div class="column large-4 large-last small-12">
				<?php if ( have_rows( 'address' ) ) : ?>
				<?php while ( have_rows( 'address' ) ) : the_row(); ?>
					<div class="address">
					<h3 class="heading"><?php the_sub_field( 'heading' ); ?></h3>
					<address class="details">
						<?php the_sub_field( 'details' ); ?>
					</address>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>




<?php get_template_part( 'template-parts/content', 'section-register'); ?>

<script>
document.addEventListener('DOMContentLoaded',function() {
	var a = document.querySelectorAll('.text-field-wrapper');
    Array.prototype.forEach.call(a, function(el, i){
    	var b = el.querySelector('.text-field');
    	b.addEventListener('change', function() {
			if (b && b.value) {
				el.classList.add('active');
			}
			else {
				el.classList.remove('active');
			}
		});
	});
	
	
	
	
	
	
	
	
var i = document.getElementById("message");
var c = document.getElementById("count");

var maxchar = parseFloat(c.textContent);

    
i.addEventListener("keydown",count);
i.addEventListener("blur",count);

function count(e){
    var len =  i.value.length;
    if (len >= maxchar){
       e.preventDefault();
    }
    else{
       c.innerHTML = maxchar - len;   
    }
}


	
	
	
	
	
	
});
</script>

<?php get_footer();








