<div class="first-section">
          <div class="container">
            <div class="first-section-title"><?php echo get_field('under_middle_header_filed_h1'); ?></div>
            <div class="first-section-info"><?php echo get_field('under_middle_header_filed_h2'); ?></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="items-section">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <div class="item-block">
                <div class="item-block-icon"><img src="<?php echo get_template_directory_uri();?>/images/item1.svg" alt=""><img class="icon-mob" src="<?php echo get_template_directory_uri();?>/images/item1-m.svg" alt=""></div>
                <div class="item-block-title">
                   <?php echo get_field('first_under_h1_block'); ?></div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="item-block">
                <div class="item-block-icon"><img src="<?php echo get_template_directory_uri();?>/images/item2.svg" alt=""><img class="icon-mob" src="<?php echo get_template_directory_uri();?>/images/item2-m.svg" alt=""></div>
                <div class="item-block-title"><?php echo get_field('second_under_h1_block'); ?></div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="item-block">
                <div class="item-block-icon"><img src="<?php echo get_template_directory_uri();?>/images/item3.svg" alt=""><img class="icon-mob" src="<?php echo get_template_directory_uri();?>/images/item3-m.svg" alt=""></div>
                <div class="item-block-title"><?php echo get_field('third_under_h1_block'); ?></div>
              </div>
            </div>
          </div>
        </div>

        <div class="plan-section">
          <div class="plan-slider">
            <div class="plan-item">
              <div class="plan-item__head"><?php echo get_field_object('first_under_middle_h1_block')['label']; ?></div>
              <div class="plan-item__info"><?php echo get_field_object('first_under_middle_h1_block')['value']; ?></div>
            </div>
            <div class="plan-item">
              <div class="plan-item__head">
                <?php echo get_field_object('second_under_middle_h1_block')['label']; ?>
              </div>
              <div class="plan-item__info"><?php echo get_field_object('second_under_middle_h1_block')['value']; ?></div>
            </div>
            <div class="plan-item">
              <div class="plan-item__head">
              <?php echo get_field_object('third_under_middle_h1_block')['label']; ?>
            </div>
              <div class="plan-item__info"><?php echo get_field_object('third_under_middle_h1_block')['value']; ?></div>
            </div>
          </div>
          <div class="align-center"><a class="btn" href="/programma/">Узнай как стать стипендиатом</a></div>
        </div>
        <div class="slider-section">
          <div class="heading-section heading-section--slider"> Ваш ребенок будет учиться в ведущем ВУЗе
            <div class="slider-navigation">
              <div class="slider-butt slider-prev icon-left"></div>
              <div class="slider-butt slider-next icon-right"></div>
            </div>
          </div>
          <div class="slider-steps">
          
          <?php get_slider_posts($post->id);
        foreach (get_slider_posts($post->id) as $post):
            ?>
            <a class="slider-item" href="<?php echo get_permalink($post->ID); ?>">
                <div class="slider-img">
                    <div class="slider-img-box"><img src="<?php echo get_field('stepend_avatar'); ?>" alt=""></div>
                    <div class="slider-title"><?php echo get_field('title_slider', $post->ID) ?></div>
                </div>
                <div class="slider-info"><b><?php echo get_field('name_of_stepend', $post->ID) ?></b>
                    <div class="slider-txt"><?php echo get_field('city_of_stepend', $post->ID) ?></div>
                    <div class="slider-info-box">
                    <?php echo get_field('slider_short_description', $post->ID) ?>
                </div>
                    <span class="detail icon-right">Подробнее</span></div>
            </a>
        <?php
        endforeach;
        ?>
        </div>
        </div>
        <div class="video-section">
          <div class="video-section-left">
            <div class="heading-section"><?php wp_reset_query(); echo get_field('hist_title'); ?></div>
            <div class="video-info"><?php echo get_field('short_hist_descr'); ?></div><a class="btn" href="/programma/">Узнай как стать стипендиатом</a>
          </div>
          <div class="video-section-right responsive-video">
            <video class="video-js" id="my-video" controls="" preload="auto" width="780" height="440" poster="<?php echo get_template_directory_uri();?>/images/Video.jpg" data-setup="{}">
              <source src="<?php echo get_field('hist_video'); ?>" type="video/mp4">
              <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
            </video><a class="btn" href="/programma/">Узнай как стать стипендиатом</a>
          </div>
        </div>
      </div>
      <div class="why-we-section">
        <div class="container">
          <div class="heading-section"><?php echo get_field('why_we_title'); ?></div>
          <div class="why-we-info flex-wrap between-xs">
            <div class="why-we-left"><?php echo get_field('why_we_descr'); ?></div>
            <div class="why-we-right"><?php echo get_field('why_we_short_descr_right'); ?></div>
          </div>
          <div class="peop-list">
          <?php 
            foreach(get_posts_by_category('Учредители', 'ASC') as $post_simple):
            ?>
            <div class="peop-item">
                  <div class="peop-image"><img src="<?php echo get_field('avatar_founders', $post_simple->ID) ?>" alt=""></div>
                  <div class="peop-info">
                    <div class="peop-name"><?php echo get_field('name_founders', $post_simple->ID) ?></div>
                    <div class="peop-job"><?php echo get_field('wps_founders', $post_simple->ID) ?></div>
                    <p><?php echo get_field('description_founders', $post_simple->ID) ?></p>
                  </div>
                </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>