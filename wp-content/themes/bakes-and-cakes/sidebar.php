<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bakes_And_Cakes
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" itemscope itemtype="https://schema.org/WPSideBar">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</aside><!-- #secondary -->
