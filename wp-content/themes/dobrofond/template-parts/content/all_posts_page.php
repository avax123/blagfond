<div class="container">
        <div class="program-section">
          <div class="heading-section">Стипендиаты<span class="count"><?php echo count(get_slider_posts(true))?></span></div>
          <div class="row">
              <?php
              if(get_posts_by_category('Стипендиаты')):
                foreach(get_posts_by_category('Стипендиаты') as $post_single):
              ?>
              <div class="col-lg-4 col-md-6 col-xs-12"><a class="stepend-item" href="<?php echo get_permalink($post_single->ID); ?>">
                <div class="stepend-item__img"><img src="<?php echo get_field('stepend_avatar',$post_single->ID); ?>" alt=""></div>
                <div class="stepend-item__info"><b><?php echo get_field('name_of_stepend', $post_single->ID); ?></b>
                  <p><?php echo get_field('short_description_for_allposts_page', $post_single->ID); ?>...</p><span class="detail icon-right">Подробнее</span>
                </div></a></div>
                <?php endforeach; endif;?>
          </div>
        </div>
      </div>