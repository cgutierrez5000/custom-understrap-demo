<?php
/**
 * Text panel template
 * 
 * 
 */
$tp_title             = get_field('tp_title');
$tp_subtitle          = get_field('tp_subtitle');
$tp_content           = get_field('tp_content');
$tp_text_align        = get_field('tp_text_align');
$tp_add_bg_img        = get_field('tp_add_bg_img');
$tp_bg_img            = get_field('tp_bg_img');
$tp_float_r_arrow     = get_field('tp_float_r_arrow');
$tp_float_b_l_graphic = get_field('tp_float_b_l_graphic');

?>
<div class="text-panel position-relative <?php echo $tp_add_bg_img? 'add-bg-img':''; ?>" 
     <?php if($tp_add_bg_img) : ?>
     style="background-image: url('<?php echo $tp_bg_img['url']; ?>');"
     <?php endif; ?>>
    <div class="container position-relative">
        <div class="inner <?php echo $tp_text_align; ?>">
            <?php if($tp_title) : ?>
                <h2 class="title text-uppercase fw-semibold blue"><?php echo $tp_title; ?></h2>
            <?php endif; ?>
            <?php if($tp_subtitle) : ?>
                <div class="subtitle">
                    <?php echo $tp_subtitle; ?>
                </div>
            <?php endif ?>
            <?php if($tp_content) : ?>
                <div class="content">
                    <?php echo $tp_content; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="float-right-arrow position-absolute" 
	     style="background-image: url('<?php echo $tp_float_r_arrow['url']; ?>')">
	    </div>
    </div>
    <div class="float-blue-left-graphic position-absolute" 
	     style="background-image: url('<?php echo $tp_float_b_l_graphic['url']; ?>')">
	</div>
</div>