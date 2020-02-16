<?php if($post->post_type == 'post'):?>
<div class="container">
<div class="student-section">
    <div class="heading-section">История стипендиата</div>
    <div class="peop-list">
        <div class="peop-item">
            <div class="peop-image"><img src="<?php echo get_field('stepend_avatar'); ?>" alt=""></div>
            <div class="peop-info">
                <div class="peop-name"><?php echo get_field('name_of_stepend'); ?></div>
                <div class="peop-job"><?php echo get_field('city_of_stepend'); ?></div>
                <p><b><?php echo get_field('h1_text_of_stepend'); ?></b></p>
                <p><?php echo get_field('main_description_of_stepend'); ?></p>

                <hr/>
                <p><b>Краткая биография и достижения:</b></p>
                <p>
                <?php echo get_field('short_ddescription_underline'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="slider-section">
        <div class="heading-section heading-section--slider"> Другие истории
            <div class="slider-navigation">
                <div class="slider-butt slider-prev icon-left"></div>
                <div class="slider-butt slider-next icon-right"></div>
            </div>
        </div>
        <div class="slider-steps">
        <?php get_slider_posts($post->id);
        foreach (get_slider_posts($post->id) as $post_single):
            if (get_the_ID() != $post_single->ID):
            ?>
            <a class="slider-item" href="<?php echo get_permalink($post_single->ID); ?>">
                <div class="slider-img">
                    <div class="slider-img-box"><img src="<?php echo get_field('stepend_avatar',$post_single->ID); ?>" alt=""></div>
                    <div class="slider-title"><?php echo get_field('title_slider', $post_single->ID) ?></div>
                </div>
                <div class="slider-info"><b><?php echo get_field('name_of_stepend', $post_single->ID) ?></b>
                    <div class="slider-txt"><?php echo get_field('city_of_stepend', $post_single->ID) ?></div>
                    <div class="slider-info-box">
                    <?php echo get_field('slider_short_description', $post_single->ID) ?>
                </div>
                    <span class="detail icon-right">Подробнее</span></div>
            </a>
        <?php
            endif;
        endforeach;
        ?>

        </div>
    </div>
</div>
    <?php endif;?>
