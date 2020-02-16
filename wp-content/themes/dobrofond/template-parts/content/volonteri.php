<div class="container">
        <div class="volont-section">
          <div class="heading-section">Волонтёры</div>
          <div class="volont-row">
              <?php if(get_posts_by_category('Волонтеры')):
              foreach(get_posts_by_category('Волонтеры') as $postsingle):?>
            <div class="volont-item">
              <div class="volont-img"><img src="<?php echo get_field('volonter_avatar', $postsingle->ID); ?>" alt=""></div>
              <div class="volont-info"> <?php echo get_field('volonter_name',$postsingle->ID); ?></div>
            </div>
              <?php endforeach;endif;?>
          </div>
        </div>
      </div>