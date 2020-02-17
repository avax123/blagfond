<div class="first-section">
          <div class="container">
            <div class="first-section-title"><?php echo get_field('title_don'); ?></div>
            <div class="first-section-info"><?php echo get_field('description__don'); ?></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="donats-section">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <div class="donats-block"><b>Сделай пожертвование</b>
                <p><?php echo get_field('make_donat_description'); ?></p><a class="btn" href="<?php echo get_permalink(get_posts_by_category('makedonat_unused','ASC', 'page')[0]->ID)?>">Помочь</a>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="donats-block"><b>Помоги делом</b>
                <p><?php echo get_field('pomogi_delom_tekst'); ?></p><a class="btn" href="help-them.html">Участвовать</a>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="donats-block"><b>Расскажи друзьям</b>
                <p><?php echo get_field('rasskazhi_druzjam_tekst'); ?></p><a class="btn" href="share-people.html">Рассказать</a>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="donats-block"><b>Размести баннер</b>
                <p><?php echo get_field('razmesti_banner_tekst'); ?></p><a class="btn" href="add-banner.html">Разместить</a>
              </div>
            </div>
          </div>
        </div>
      </div>