<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
            </ul>
            <div id = 'search' class="search-button"><img src="http://blagfond/blog-dobrofond/wp-content/uploads/sites/2/2020/02/search.png" alt=""></div>
            <div id='search-box' class="search-box">
              <div class="container">
                <div id='search_form' class="search-form">
                  <input id='data_search' type="search">
                  <button type="button" onclick="srch();" class="btn btn-outline-warning">Найти</button>
                  <button type="button" id='close' class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <script>
                  function srch(){
                    var ss = $('#data_search').val();
                    $.ajax({
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    type: 'POST',
                    data: {action: 'search', datas: ss},
                    success: function( data ) {
                      $('#search_list').empty();
                      $('.search-result').addClass('active');
                      $('#search_list').append(data);
                    }
                  });
                  }
                  jQuery(function($){ 
                      $('#close').click(function(){
                        $('.search-result').removeClass("active");
                        $('#search-box').removeClass("active");
                      });
                  });
                </script>
                <div class="search-result">
                  <div id='search_list' class="search-list">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
          jQuery(function($){ 
              $('#search').click(function(){
                $('#search-box').addClass('active');
              });
          });
          </script>
          <div id = 'clean_content' class="row">
            <?php 
            $promo_post = get_posts_by_category('Блок для рекламы')[0];
            if($promo_post){
            ?>
            <div class="col-lg-8 col-md-12 col-xs-12 blog-col"><a class="blog-item" href="<?php echo $promo_post->guid?>">
                <div class="blog-type"><?php echo get_field('name_promo_cat', $promo_post->ID);?></div>
                <div class="blog-item__img"><img src="<?php echo get_field('preview_and_avatar', $promo_post->ID);?>" alt=""></div>
                <div class="blog-item__info"><b><?php echo get_field('preview_title', $promo_post->ID);?></b>
                  <p><?php echo get_field('preview_text', $promo_post->ID);?></p><span class="detail-link">Подробнее</span>
            </div></a>
          </div>
          <?php
           }
            ?>
            <?php 
            foreach(get_posts_by_category(get_queried_object()->name, 'DESC', 'post', '', 9) as $sd){
            ?>
            <div class="col-lg-4 col-md-6 col-xs-12 blog-col"><a class="blog-item" href="<?php echo $sd->guid?>">
                <div class="blog-type"><?php echo wp_get_post_categories($sd->ID, array('fields' => 'all'))[0]->name; ?></div>
                <div class="blog-item__img"><img src="<?php echo get_field('preview_and_avatar', $sd->ID);?>" alt=""></div>
                <div class="blog-item__info"><b><?php echo get_field('preview_title', $sd->ID);?></b>
                  <p><?php echo get_field('preview_text', $sd->ID);?></p><span class="detail-link">Подробнее</span>
                </div></a>
              </div>
            <?php
            }
            ?>
            <script>
              var m1 = 9;
              jQuery(function($){ 
                $('#show_more').click(function(){
                  $.ajax({
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    type: 'POST',
                    data: {action: 'pagination', m1: m1, m3: '<?php echo get_queried_object()->name; ?>'},
                    success: function( data ) {
                      m1 = m1 + 9;
                      $('#show_more').before(data);
                    }
                  });
                });
              });
            </script>
            <div id = 'show_more' class = "vew-more-blog"><span>Показать ещё</span></div>
          </div>
          <div class="news-block">
            <div class="heading-section heading--with-link">Новости<a href="#">Показать все новости</a></div>
            <div class="row">
              <?php
              foreach(get_posts( array('posts_per_page' => 4)) as $last_post){ 
              ?>
              <div class="col-lg-3 col-md-6 col-xs-12 news-col"><a class="news-item" href="<?php echo $last_post->guid?>">
                  <div class="news-name"><?php echo get_field('preview_title_low', $last_post->ID);?></div>
                  <div class="news-img"><img src="<?php echo get_field('preview_and_avatar', $last_post->ID);?>" alt=""></div></a></div>
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