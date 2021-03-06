<?php
/**
 * @version    1.0
 * @package    Material Lite
 * @author     Ghuwad Team <contact@ghuwad.com>
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.ghuwad.com
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('section--center mdl-card mdl-shadow--2dp'); ?>>
    <div class="entry-content">
    	<?php the_content(); ?>
    	<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'material-lite') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
    </div>
	<div class="meta bordered">
        <?php material_lite_meta();?>
    </div>
</article>