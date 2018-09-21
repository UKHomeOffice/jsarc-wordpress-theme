<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSaRC
 */

?>

  <footer class="section section-footer">
	<div class="section-content">
		<div class="row">
			<div class="column large-4 small-6">
				<ul>
					<li><a href="">Contact JSaRC</a></li>
					<li><a href="">Terms and Conditions</a></li>
					<li><a href="">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="column large-4 small-6">
				<ul>
					<li><a href="">Cookie Policy</a></li>
					<li><a href="">Sitemap</a></li>
				</ul>
			</div>
			<div class="column large-4 small-12">
				<figure class="organisation-logo"></figure>
				<p>© <?php echo date("Y"); ?> Joint Security and Resilience Centre</p>
			</div>
		</div>
	</div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
