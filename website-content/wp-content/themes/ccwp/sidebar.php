<?php
/**
 * Theme Name: CCWP
 * Author: Max Dmitriev @6point6
 * Description: Initial experimentation with wordpress themes.
 * Version: 1.0
 */
?>

 
<div style="color:red;font-size:50px;">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


<?php endif; ?>
</div>

 <div class="column sidebar">
 
 
 <!--
 						<?php if( get_field('xxxx') ): ?>
						<?php the_field('xxxx'); ?>
						<?php endif; ?>
 -->
 
 
 
						<div class="sidebar-content" data-animation="opacity">
							<?php if( get_field('caption') ): ?>
							<div class="caption"><?php the_field('caption'); ?></div>
							<?php endif; ?>
						
							<div class="donut-graph-wrapper">
								<svg class="donut" xmlns="http://www.w3.org/2000/svg">
									<g><circle class="donut-layer donut-layer-1" /></g>
									<g><circle class="donut-layer donut-layer-2" /></g>
									<g><circle class="donut-layer donut-layer-3" /></g>
								</svg>
								<div class="badge-content">
									<?php if( get_field('badge-value') ): ?>
									<span class="badge-value"><?php the_field('badge-value'); ?>
									<?php endif; ?>
									<?php if( get_field('badge-unit') ): ?>
									<span class="badge-unit"><?php the_field('badge-unit'); ?></span>
									<?php endif; ?>
									</span>
									<?php if( get_field('badge-caption') ): ?>
									<span class="badge-caption"><?php the_field('badge-caption'); ?></span>
									<?php endif; ?>
								</div>
								<ul class="legend">
									<?php if( get_field('color-swatch-1') ): ?>
									<li class="color-swatch-1"><?php the_field('color-swatch-1'); ?></li>
									<?php endif; ?>
									<?php if( get_field('color-swatch-2') ): ?>
									<li class="color-swatch-2"><?php the_field('color-swatch-2'); ?></li>
									<?php endif; ?>
									<?php if( get_field('color-swatch-3') ): ?>
									<li class="color-swatch-3"><?php the_field('color-swatch-3'); ?></li>
									<?php endif; ?>
								</ul>
							</div>
							
							
						</div>
						
						
						<div class="sidebar-content" data-animation="opacity">
							<img src="<?php if( get_field('sidebar-image') ): the_field('sidebar-image'); endif; ?>" width="100%" height="auto" alt="" />
							<?php if( get_field('sidebar-headline') ): ?>
							<h4 class="sidebar-headline"><?php the_field('sidebar-headline'); ?></h4>
							<?php endif; ?>
							<?php if( get_field('sidebar-paragraph') ): ?>
							<p class="sidebar-paragraph"><?php the_field('sidebar-paragraph'); ?>
							<?php endif; ?></p>
							<a class="icon-shim" href="<?php if( get_field('sidebar-link') ): the_field('sidebar-link'); endif; ?>"><?php if( get_field('sidebar-link-copy') ): the_field('sidebar-link-copy'); endif; ?></a>
						</div>
						
						
					</div>
 
