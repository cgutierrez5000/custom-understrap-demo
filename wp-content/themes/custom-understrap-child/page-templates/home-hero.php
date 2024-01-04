<?php
/**
 * Hero template for home page 
 *
 * 
 */
$h_bg_image            = get_field('h_bg_image');
$h_blue_bg_img         = get_field('h_blue_bg_img');
$main_hero_title       = get_field('main_hero_title');
$hero_content          = get_field('hero_content');
$h_cta_btn_link        = get_field('h_cta_btn_link');
$h_cta_btn_text        = get_field('h_cta_btn_text');
$h_left_yellow_circle  = get_field('h_left_yellow_circle');
$h_blue_lines_circle   = get_field('h_blue_lines_circle');
$h_small_yellow_circle = get_field('h_small_yellow_circle');

?>

<div class="home-hero-banner position-relative bg-image"
     style="background-image: url('<?php echo $h_bg_image['url']; ?>');">
	<div class="small-yellow-circle position-absolute" 
	     style="background-image: url('<?php echo $h_small_yellow_circle['url']; ?>')">
	</div>
	<div class="blue-bg-img position-absolute d-flex justify-content-center align-items-center" 
	     style="background-image: url('<?php echo $h_blue_bg_img['url']; ?>')">
		 <div class="container g-0 position-absolute d-flex justify-content-center align-items-center">
			<div class="inner-home-hero-banner position-relative">
				<div class="content-elements position-relative">
					<h1 class="title text-left fw-bold"><?php echo $main_hero_title; ?>
					</h1>
					<div class="content-banner text-left open-sans">
						<?php echo $hero_content; ?>
						<a href="<?php echo $h_cta_btn_link['url']; ?>" h_
							class="btn btn-secondary"> <?php echo $h_cta_btn_text;  ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="left-yellow-circle position-absolute" 
	     style="background-image: url('<?php echo $h_left_yellow_circle['url']; ?>')">
	</div>
	<div class="blue-lines-circle position-absolute" 
	     style="background-image: url('<?php echo $h_blue_lines_circle['url']; ?>')">
	</div>
</div> 

