<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JSaRC
 */

?>
</main>
<footer class="section footer" role="contentinfo">
    <div class="section-content">
        <div class="row">
            <div class="column large-6 medium-8  small-6">
                <nav class="footer-menu" aria-label="JSaRC Footer Menu" role="navigation">
                    <div class="row">
                        <div class="column large-6 small-12">
                            <?php if( have_rows('footer_menu_first_column', 'option') ): ?>
                                
                                <ul>
                                <?php while( have_rows('footer_menu_first_column', 'option') ): the_row(); 
        
                                    $link = get_sub_field('link');
                                    $link_content = get_sub_field('link_content');

                                    ?>

                                    <li class="footer-menu-item">
                                        <?php if( $link ): ?>
                                            <a class="footer-menu-link" href="<?php echo $link; ?>">
                                        <?php endif; ?>
                                            <?php echo $link_content; ?>
                                        <?php if( $link ): ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>

                                <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>
                        </div>
                        <div class="column large-6 small-12">
                            <?php if( have_rows('footer_menu_second_column', 'option') ): ?>
                                
                                <ul>
                                <?php while( have_rows('footer_menu_second_column', 'option') ): the_row(); 
        
                                    $link = get_sub_field('link');
                                    $link_content = get_sub_field('link_content');

                                    ?>

                                    <li class="footer-menu-item">
                                        <?php if( $link ): ?>
                                            <a class="footer-menu-link" href="<?php echo $link; ?>">
                                        <?php endif; ?>
                                            <?php echo $link_content; ?>
                                        <?php if( $link ): ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>

                                <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="column large-6 medium-4 small-6">
                <figure class="organisation-logo" aria-label="Home Office"></figure>
            </div>
        </div>
        <div class="row">
            <div class="column large-6 large-last small-12">
                <div class="footer-legal"><?php the_field('footer_legal', 'option'); ?></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<?php if (function_exists('add_to_footer')) { add_to_footer(); } ?>
<script>
// accessibility
/*
document.body.addEventListener('keypress', function(e) {
    
    // if(e.key === "Escape") {
    
    //if (code == 9 && $('#detect:focus').length) {
    if (e.key == 9) {
        alert('I was tabbed!');
    }
}
*/



var focused, elems = document.querySelectorAll('a,button,input,textarea,select');
Array.prototype.forEach.call(elems, function(el, i){
 
	el.addEventListener('keyup', function(e) {
		if( e.which == 9 ) {
			e.currentTarget.classList.add('highlight');
			if(focused){
				focused.classList.remove('highlight');
			}
			focused = this;
			
		}
    });
});
/*
Array.prototype.forEach.call(a, function(el, i){
    el.addEventListener('keydown', function(e) {
    
	if( e.which == 9 ) {
		var curTar = e.currentTarget;
		 
		highlighted.classList.remove('highlight');
		curTar.classList.add('highlight');
		
		 
		// function sayBye() {
// 		  curTar.classList.remove('highlight');
// 		}
// 		setTimeout(sayBye, 300);
		 
	}
	return false;
});
*/
    
    


</script>
<!--script>
function openProductTab(evt, tabName) {
    var i, tabcontent, openProductTab;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tabProductLinks = document.getElementsByClassName("tabProductLinks");
    for (i = 0; i < tabProductLinks.length; i++) {
        tabProductLinks[i].className = tabProductLinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script-->
</body>
</html>
