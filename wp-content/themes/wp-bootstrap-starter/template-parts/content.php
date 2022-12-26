<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <div class="post-thumbnail">
        <?php
echo '<img src="' . get_field("header_image") . '">';
?>
    </div>
    <header class="entry-header">

    </header><!-- .entry-header -->
    <div class="entry-content">

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php wp_bootstrap_starter_entry_footer();?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->