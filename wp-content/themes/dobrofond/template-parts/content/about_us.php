<div class="container">
        <div class="about-section">
          <div class="about-top flex-wrap between-xs">
            <div class="about-left">
              <div class="heading-section">О нас</div>
              <p><?php echo get_field('about_us_left') ?></p>
            </div>
            <div class="about-right"><b>Наша миссия</b>
              <p> <?php echo get_field('our_mission_right') ?></p>
            </div>
          </div>
          <div class="about-people">
            <div class="heading-section">Учредители фонда</div>
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
          <div class="advice-people">
            <div class="heading-section">Совет фонда</div>
            <div class="under-heading"> <?php echo get_field('sovet_fonda_opisanie') ?></div>
            <div class="row advice-slider">
            <?php 
            foreach(get_posts_by_category('Совет фонда', 'ASC') as $post_simple_wds):
            ?>
              <div class="col-md-4 col-sm-6 col-xs-12 advice-item">
                <div class="advice-image"><img src="<?php echo get_field('avatar_wds', $post_simple_wds->ID) ?>" alt=""></div>
                <div class="advice-info">
                  <div class="advice-name"><?php echo get_field('name_wds', $post_simple_wds->ID) ?></div>
                  <div class="advice-job"><?php echo get_field('wds_wds', $post_simple_wds->ID) ?></div>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
          <div class="expert-people">
            <div class="heading-section">Экспертный совет фонда</div>
            <div class="under-heading"> <?php echo get_field('jekspertnyj_sovet_fonda_opisanie') ?></div>
            <div class="row">
            <?php 
            foreach(get_posts_by_category('Экспертный совет фонда', 'ASC') as $post_simple_wds):
            ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="expert-item">
                  <div class="expert-img"><img src="<?php echo get_field('avatar_ewds', $post_simple_wds->ID) ?>" alt=""></div>
                  <div class="expert-info"><b><?php echo get_field('name_ewds', $post_simple_wds->ID) ?></b>
                    <p><?php echo get_field('wds_ewds', $post_simple_wds->ID) ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>