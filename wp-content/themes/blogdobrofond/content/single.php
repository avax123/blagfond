<div class="container">
        <div class="blog-section">
          <div class="tag-section">
            <ul>
            <?php 
              wp_nav_menu( array( 
                  'theme_location' => 'middle-menu', 
                  'container_class' => 'custom-menu-class' ) 
              ); 
            ?>
            </ul>
            <div class="search-button"><img src="images/search.png" alt=""></div>
            <div class="search-box">
              <div class="container">
                <form class="search-form" action="#">
                  <input type="search">
                </form>
                <div class="search-result">
                  <div class="search-list"><a class="search-item" href="#">
                      <p>Пять лайфхаков, которые помогут школьникам из отдалённых уголков России поступить в престижный вуз</p>
                      <div class="blog-one-info">
                        <div class="blog-one-date"> <img src="images/calendar.png" alt="">29.09.2019</div>
                        <div class="blog-one-tag">
                          <div class="blog-type">Герои	</div>
                        </div>
                      </div></a><a class="search-item" href="#">
                      <p>Пять лайфхаков, которые помогут школьникам из отдалённых уголков России поступить в престижный вуз</p>
                      <div class="blog-one-info">
                        <div class="blog-one-date"> <img src="images/calendar.png" alt="">29.09.2019</div>
                        <div class="blog-one-tag">
                          <div class="blog-type">Герои</div>
                        </div>
                      </div></a><a class="search-item" href="#">
                      <p>Пять лайфхаков, которые помогут школьникам из отдалённых уголков России поступить в престижный вуз</p>
                      <div class="blog-one-info">
                        <div class="blog-one-date"> <img src="images/calendar.png" alt="">29.09.2019</div>
                        <div class="blog-one-tag">
                          <div class="blog-type">Герои	</div>
                        </div>
                      </div></a><a class="search-item" href="#">
                      <p>Пять лайфхаков, которые помогут школьникам из отдалённых уголков России поступить в престижный вуз</p>
                      <div class="blog-one-info">
                        <div class="blog-one-date"> <img src="images/calendar.png" alt="">29.09.2019</div>
                        <div class="blog-one-tag">
                          <div class="blog-type">Герои</div>
                        </div>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-one">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-xs-12"><img src="<?php echo get_field('preview_and_avatar', $post->ID);?>" alt="">
                <div class="blog-one-name"><?php echo $post->post_title;?></div>
                <div class="blog-one-info">
                  <div class="blog-one-date"> <img src="images/calendar.png" alt=""><?php echo date_format(date_create($post->post_date),'d.m.Y') ?></div>
                  <div class="blog-one-tag">
                    <?php 
                    if(get_the_category()[0]->name == 'Блок для рекламы'){
                      $category_name = get_field('name_promo_cat', $post->ID);
                    } else {
                      $category_name = get_the_category()[0]->name;
                    }
                    ?>
                    <div class="blog-type"><?php echo $category_name; ?></div>
                  </div>
                </div>
                <div class="blog-one-text"><?php echo $post->post_content; ?></div>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="more-articles"><b>Статьи по теме</b>
                  <ul>
                      <?php foreach(get_posts_by_category('Статьи по теме', $order = 'DESC', $post_type = 'post', $cat_name = '', $count = 3) as $rel_post) { ?>
                        <li><a href="<?php echo $rel_post->guid; ?>"><?php echo get_field('preview_title', $rel_post->ID);?></a></li>
                        <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="read-more">
            <div class="read-more-head">Читайте также</div>
            <div class="row">
            <?php 
              foreach(get_posts_by_category('Читайте также', 'DESC', 'post', '', 3) as $and_post){
              ?>
              <div class="col-lg-4 col-md-4 col-xs-12 blog-col"><a class="blog-item" href="<?php echo $and_post->guid?>">
                  <div class="blog-type"><?php echo wp_get_post_categories($and_post->ID, array('fields' => 'all'))[0]->name; ?></div>
                  <div class="blog-item__img"><img src="<?php echo get_field('preview_and_avatar', $and_post->ID);?>" alt=""></div>
                  <div class="blog-item__info"><b><?php echo get_field('preview_title', $and_post->ID);?></b>
                    <p><?php echo get_field('preview_text', $and_post->ID);?></p><span class="detail-link">Подробнее</span>
                  </div></a>
              </div>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-banner" style="background: url(images/photo_bckgrnd.jpg) 0 0 no-repeat">
        <div class="container">
          <div class="flex-wrap between-xs align-center"><span>Будьте в курсе наших<br>последних новостей</span>
            <form action="#">
              <input type="text" placeholder="Email">
              <button class="btn" type="button">Подписаться</button>
            </form>
          </div>
        </div>
      </div>