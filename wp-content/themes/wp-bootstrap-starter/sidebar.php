<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-6" role="complementary">
    <div class="container" style="display: table;">
        <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book,Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
        </P>
        <div class="row">
            <div class="col">
                <div class="card px-3 bg-secondary">
                    <h4> Fact shets</h4>
                    <?php echo get_field("facts"); ?>
                </div>
            </div>
            <div class="col">
                <div class="card px-3 bg-info">
                    <h4>Payment Plan </h4>
                    <p>Recivable fee $<?php echo get_field("price"); ?></p>
                    <?php echo get_field("payment_plan"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php dynamic_sidebar('sidebar-1');?> -->
</aside><!-- #secondary -->