<?php
	/*
	 * Template Name: Events Archive
	 *
	 * The template for displaying Events Archive Page
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package JSaRC
	 */
	?>
<?php get_header(); ?>
<?php if (is_page_template("archive.php")) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/archive.css" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/archive.js" type="text/javascript"></script>
<?php } ?>
<?php function add_to_head() { ?>
<style>
.section.hero .section-content {
	padding-top: 75px;
	padding-bottom: 50px;
}

.section.hero .headline {
	font-size: 36px;
	font-weight: bold;
	line-height: 42px;
}

.filter-bar {
	background: #3A5996;
	color: #fff;
	font-size: 17px;
	line-height: 100px;
	height: 100px;
}

.filter-bar .select-wrapper {
	display: inline-block;
	vertical-align: middle;
	height: 40px;
	line-height: 40px;
	position: relative;
	overflow: hidden;
	border: 1px solid #fff;
	margin-right: 3%;
}

.filter-bar .select-wrapper:after {
	content: '';
	display: -block;
	position: absolute;
	z-index: 1;
	top: 0;
	bottom: 0;
	right: 10px;
	margin: auto;
	width: 0;
	height: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid #fff;
	pointer-events: none;
}

.filter-bar select {
	display: inline-block;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	background: none;
	border: none;
	color: inherit;
	font: inherit;
	overflow: hidden;
	padding-left: 10px;
	padding-right: 30px;
	height: 40px;
	line-height: 40px;
	min-width: 100%;
}

.filter-bar select:focus {
	outline: 0 !important;
}

.filter-bar .reset {
	height: 1.3em;
	display: inline-block;
	vertical-align: middle;
	font: inherit;
	line-height: 1.3em;
}

@media only screen and (max-width: 735px) {
	.filter-bar {
		font-size: 16px;
		height: auto;
		line-height: inherit;
		padding-top: 25px;
		padding-bottom: 25px;
	}
	.filter-bar .select-wrapper {
		display: block;
		width: 100%;
		margin-bottom: 20px;
	}
	.filter-bar .select-wrapper {
		display: block;
	}
	.filter-bar .select-wrapper:after {
		left: auto;
		right: 20px;
	}
	.filter-bar .reset {
		display: block;
		height: 36px;
		line-height: 36px;
	}
}

.section.results {
	background-color: #E3E3E3;
}

.section.results .section-content {
	padding-top: 75px;
	padding-bottom: 75px;
}

.section.results .list-item {
	display: block;
	margin-bottom: 25px;
}

.section.results .post {
	display: block;
	min-height: 140px;
	position: relative;
	background: #fff;
	overflow: hidden;
}

.section.results .post .image-wrapper {
	position: absolute;
	width: 250px;
	height: 100%;
	overflow: hidden;
}

.section.results .post .image-wrapper:after {
	content: '';
	display: block;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background-color: transparent;
	transition: background-color 250ms ease;
}

.section.results .post:hover .image-wrapper:after {
	background-color: rgba(0, 0, 0, 0.15);
}

.section.results .post .thumbnail {
	width: 100%;
	height: 100%;
	background-size: cover;
	position: absolute;
	transition: transform 0.25s, opacity 0.25s;
	transform: scale(1);
}

.section.results .post:hover .thumbnail {
	transform: scale(1.05);
}

.section.results .post .text-wrapper {
	margin-left: 250px;
	padding-left: 25px;
	padding-right: 25px;
	position: relative;
	min-height: 100px;
	padding-bottom: 40px;
	transition: transform 250ms ease;
}

.section.results .post:hover .text-wrapper {
	transform: translate(-8px, 0);
}

.section.results .post .text-wrapper:before {
	content: '';
	position: absolute;
	z-index: -1;
	min-height: 1500px;
	width: 100%;
	left: 0;
	top: 0;
	background-color: #fff;
}

.section.results .post .text-wrapper .title {
	font-size: 18px;
	font-weight: bold;
	line-height: 28px;
	color: #1E4289;
	padding-top: 25px;
}

.section.results .post .text-wrapper .bottom-line {
	height: 20px;
	line-height: 20px;
	position: absolute;
	bottom: 10px;
	left: 25px;
	font-size: 16px;
}

@media only screen and (max-width: 735px) {
	.section.results .post {
		width: 250px;
		min-height: auto;
		margin: 0 auto 50px;
	}
	.section.results .post .image-wrapper {
		position: relative;
		height: 140px;
	}
	.section.results .post .text-wrapper {
		margin-left: 0;
		padding-left: 20px;
		padding-right: 20px;
		min-height: auto;
	}
	.section.results .post:hover .text-wrapper {
		transform: translate(0, -20px);
	}
	.section.events .post .text-wrapper .title {
		padding-top: 20px;
	}
	.section.events .post .text-wrapper .bottom-line {
		left: 20px;
	}
}
</style>
<?php } ?>


<nav class="breadcrumbs">
	<div class="section-content">
		<ul class="breadcrumbs-list">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/">Home</a></li>
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="/news-events/" >News and Events</a></li>
            <li class="breadcrumbs-item">Events Archive</li>
		</ul>
	</div>
</nav>
<header class="section hero">
	<div class="section-content">
		<h1 class="headline">Events Archive</h1>
	</div>
</header>

<div class="section filter-bar">
	<div class="section-content">
		<?php
		// variables
		$url_full_path = $_SERVER["REQUEST_URI"];
		$url_path_part = '/events/';
		// $url_year = explode('/', str_replace($url_path_part, '', $url_full_path))[0];
		$url_year = get_valueFromStringUrl($url_path_part , 'year');
		$url_tag = get_valueFromStringUrl($url_path_part , 'tag');

		// echo '<div style="background:lightblue;padding:10px;margin:40px; font-size: 12px;">full path = ' . $url_full_path . '<br> events path = '. $url_path_part . '<br> year = ' . $url_year . '<br> url tag = ' .$url_tag . '</div>';

		function get_valueFromStringUrl($url_path_part , $parameter_name) {
			$parts = parse_url($_SERVER["REQUEST_URI"]);
			if(isset($parts['query'])) {
				parse_str($parts['query'], $query);
				if(isset($query[$parameter_name])) {
					return $query[$parameter_name];
				}
				else { return null; }
			}
			else { return null; }
		}
		?>
		<div class="select-wrapper">
			<select id="select_year" data-current-url="<?php echo $url_year ?>">
				<option value="<?php /* echo date('Y') */ ?>">All years</option>
				<?php
					$years = array(
						'category_name' => 'events',
						'post_status' => 'publish',
						'type' => 'yearly',
						'format' => '_custom', /* specified in functions.php */
						'echo' => '0',
					);
					echo wp_get_archives( $years );
				?>

			</select>
		</div>
		<div class="select-wrapper">
			<select id="select_tag" data-current-url="<?php echo $url_tag ?>">
				<option value=""><?php echo esc_attr( __( 'All topics' ) ); ?></option>
				<?php
					$tags = get_tags( );
					foreach ( $tags as $tag ) {
						$html .= "<option value='$tag->slug'> $tag->name </option>";
					}
					echo $html;
				?>
			</select>
		</div>
		<button id="reset_selects" class="reset">Reset</button>

		<?php function add_to_footer() { ?>
		<script>

			let selectYear = document.getElementById('select_year');
			let currentUrlYear = selectYear.dataset.currentUrl;
			let selectTag = document.getElementById('select_tag');
			let currentUrlTag = selectTag.dataset.currentUrl;
			let resetSelects = document.getElementById('reset_selects');


			let url = '/events/';

			// change
			selectYear.onchange = function() {
				document.location.href = url + '?year=' + this.options[this.selectedIndex].value;
			}
			selectTag.onchange = function() {
				let yearSelectedValue = selectYear.options[selectYear.selectedIndex].value;
				if(yearSelectedValue === '') {
					// yearSelectedValue = <~~?php echo date('Y') ?~~>;
					document.location.href = url + '?tag=' +  this.options[this.selectedIndex].value;
				}
				else {
					document.location.href = url + '?year=' + yearSelectedValue + '&tag=' +  this.options[this.selectedIndex].value;
				}
			}
			resetSelects.onclick = function() {
				document.location.href = url;
			}


			// url manipulations
			for ( let i = 0; i < selectYear.options.length; i++ ) {
				if ( selectYear.options[i].value === currentUrlYear ) {
					selectYear.options[i].selected = true;
				}
			}

			for ( let i = 0; i < selectTag.options.length; i++ ) {
				if ( selectTag.options[i].value === currentUrlTag ) {
					selectTag.options[i].selected = true;
				}
			}



		</script>
		<?php } ?>


	</div>
</div>
<div class="section results">
	<div class="section-content">
		<?php
		$posts_show_query = new WP_Query(array(
			'category_name' => 'events',
			'post_status' => 'publish',
			'format' => 'html',
			'year' => $url_year,
			'tag' => $url_tag
		));
		?>
		<?php if( $posts_show_query->have_posts() ) {  ?>
		<?php while( $posts_show_query->have_posts() ) : $posts_show_query->the_post(); ?>
		<ul>
			<li class="list-item">
				<a class="post" href="<?php the_permalink(); ?>">
					<div class="image-wrapper">
						<figure class="thumbnail" style="background-image:url(<?php the_field('thumb_image', $post->ID); ?>?fit=crop&w=500?&h=280)"></figure>
					</div>
					<div class="text-wrapper">
						<h3 class="title"><?php the_title(); ?></h3>
						<div class="bottom-line"><?php the_date('d F Y'); ?></div>
					</div>
				</a>
			</li>
		</ul>
		<?php endwhile; ?>
		<?php } else { ?>
			<h3>No related articles found.</h3>
		<?php } ?>
		<?php wp_reset_query(); ?>
	</div>
</div>


<?php get_template_part( 'template-parts/section', 'register'); ?>
<?php get_footer();