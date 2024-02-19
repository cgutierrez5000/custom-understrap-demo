<?php
/**
 * Text panel template
 * 
 * 
 */
$ps_title        = get_field('ps_title');
$ps_floating_img = get_field('ps_floating_img');

$args = array(
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'post_type'        => get_field('post_type'),
    'post_status'      => 'publish'
);
$posts = get_posts($args);

?>
<div class="projects-slider-panel position-relative">
    <div class="container position-relative">
        <div class="inner">
            <?php if($ps_title) : ?>
                <h2 class="title text-uppercase fw-semibold blue"><?php echo $ps_title; ?></h2>
            <?php endif; ?>

                <div class="project-slider">
                    <?php foreach($posts as $ps_slide) : 
                    $project_img = get_field('project_image', $ps_slide->ID); ?>

                    <div class="project-slider-wrapper position-relative">
                        <div class="project-slider-inner">
                            <div class="project-title h4 position-absolute bottom-0 start-0 w-100 img-over-text">
                                <?php echo get_the_title($ps_slide->ID); ?>
                            </div>
                            <img src="<?php echo $project_img['sizes']['project_slider_thumb']; ?>" 
                                 alt="<?php echo $project_img['alt']; ?>"
                                 class="img-fluid w-100">
                            <div class="project-slider-inner-hover position-absolute start-0 w-100 h-100">
                                <div class="project-title-hover h4">
                                    <?php echo get_the_title($ps_slide->ID); ?>
                                </div>
                                <div class="intro-content">
                                    <p><?php echo get_field('hover_over_co', $ps_slide->ID); ?></p>
                                    <a href="<?php echo get_permalink($ps_slide->ID); ?>"
                                       class="read-more-link fw-semibold fa-external-link">Read more</a>
                            </div>
                        </div>
                        </div>
                    </div> 

                    <?php endforeach; ?>
                </div>
                <div class="ps-floating-img position-absolute">
                <img src="<?php echo $ps_floating_img['url']; ?>" 
                     alt="<?php echo $ps_floating_img['alt']; ?>">
                </div>
        </div>
    </div>
</div>