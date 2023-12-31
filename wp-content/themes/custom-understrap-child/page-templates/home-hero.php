<?php
/**
 * Hero template for home page 
 *
 * 
 */
$bg_image            = get_field('bg_image');
$main_hero_title     = get_field('main_hero_title');
$hero_content        = get_field('hero_content');
$cta_btn_link        = get_field('cta_btn_link');
$cta_btn_text        = get_field('cta_btn_text');
$left_yellow_circle  = get_field('left_yellow_circle');
$blue_lines_circle   = get_field('blue_lines_circle');
$small_yellow_circle = get_field('small_yellow_circle');

?>

<div class="home-hero-banner relative">
	<div class="container">
		<div class="inner-home-hero-banner">
			<h2 class="title text-center"><?php echo $main_hero_title; ?></h2>
			<div class="content-banner text-center">
				<?php echo $hero_content; ?>
			</div>
		</div>
	</div>
</div>

