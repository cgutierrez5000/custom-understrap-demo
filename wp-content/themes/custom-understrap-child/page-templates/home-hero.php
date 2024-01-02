<?php
/**
 * Hero template for home page 
 *
 * 
 */
$bg_image            = get_field('bg_image');
$blue_bg_img         = get_field('blue_bg_img');
$main_hero_title     = get_field('main_hero_title');
$hero_content        = get_field('hero_content');
$cta_btn_link        = get_field('cta_btn_link');
$cta_btn_text        = get_field('cta_btn_text');
$left_yellow_circle  = get_field('left_yellow_circle');
$blue_lines_circle   = get_field('blue_lines_circle');
$small_yellow_circle = get_field('small_yellow_circle');

?>

<div class="home-hero-banner position-relative w-100 h-100 bg-image"
     style="background-image: url('<?php echo $bg_image['url']; ?>')">
	<div class="blue-bg-img position-absolute d-flex justify-content-center align-items-center" 
	     style="background-image: url('<?php echo $blue_bg_img['url']; ?>')">
		 <div class="container position-absolute d-flex justify-content-center align-items-center">
			<div class="inner-home-hero-banner position-relative">
				<div class="content-elements position-relative">
					<h1 class="title text-left fw-bold"><?php echo $main_hero_title; ?>
					</h1>
					<div class="content-banner text-left open-sans">
						<?php echo $hero_content; ?>
						<a href="<?php echo $cta_btn_link['url']; ?>" 
						   class="btn btn-primary"> <?php echo $cta_btn_text;  ?> </a>
					</div>
				</div>
			</div>
	</div>
	</div>
</div> 

