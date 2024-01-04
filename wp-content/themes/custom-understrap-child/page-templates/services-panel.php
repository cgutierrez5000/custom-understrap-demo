<?php
/**
 * Services panel template 
 *
 * 
 */
$serv_panel_title  = get_field('serv_panel_title');
$serv_l_img_banner = get_field('serv_l_img_banner');
$serv_l_img_text   = get_field('serv_l_img_text');
$services          = get_field('services');

?>
<div class="services-panel position-relative">
    <div class="container">
        <div class="inner">
            <h2 class="title text-center title-underlined">
                <?php echo $serv_panel_title; ?>
            </h2>
            <div class="services-grid">
                <div class="left-side">
                    <img class="card-img-top" 
                        src="<?php echo $serv_l_img_banner['url'];?>" 
                        alt="<?php echo $serv_l_img_banner['alt'];?>">
                </div>
                <div class="right-side d-flex flex-wrap">

                    <?php foreach($services as $service) : ?>
                        <div class="service-container w-50">
                            <div class="icon">
                                <img src="<?php echo $service['image']['url']; ?>" alt="<?php echo $service['image']['alt']; ?>">
                            </div>
                            <div class="title raleway blue fw-bold">
                                <?php echo $service['title']; ?>
                            </div>
                            <div class="text-content">
                                <?php echo $service['content']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>