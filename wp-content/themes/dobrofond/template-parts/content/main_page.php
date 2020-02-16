<div class="first-section">
          <div class="container">
            <div class="first-section-title"><?php echo get_field('under_middle_header_filed_h1'); ?></div>
            <div class="first-section-info"><?php echo get_field('under_middle_header_filed_h2'); ?></div>
          </div>
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
          <div class="align-center"><a class="btn" href="program.html">Узнай как стать стипендиатом</a></div>
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
        
        <div class="video-section">
          <div class="video-section-left">
            <div class="heading-section">История Никиты</div>
            <div class="video-info">Как Никита стал стипендиатом фонда</div><a class="btn" href="program.html">Узнай как стать стипендиатом</a>
          </div>
          <div class="video-section-right responsive-video">
            <video class="video-js" id="my-video" controls="" preload="auto" width="780" height="440" poster="<?php echo get_template_directory_uri();?>/images/Video.jpg" data-setup="{}">
              <source src="<?php echo get_template_directory_uri();?>/images/video.mp4" type="video/mp4">
              <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
            </video><a class="btn" href="program.html">Узнай как стать стипендиатом</a>
          </div>
        </div>
      </div>
      <div class="why-we-section">
        <div class="container">
          <div class="heading-section">Почему благотворительный фонд помогает талантливым детям</div>
          <div class="why-we-info flex-wrap between-xs">
            <div class="why-we-left">Благотворительный фонд «Путевка в жизнь» — это сообщество неравнодушных людей, которым в свое время добиться успеха помогли совершенно бескорыстно. У каждого из нас своя история, но всем из нас была необходима поддержка, и мы ее вовремя получили. Вот почему сегодня мы хотим помочь молодым талантливым ребятам получить образование — необходимое условие для развития своего потенциала. Для того, чтобы наша помощь была регулярной и системной, мы и создали наш Благотворительный фонд.</div>
            <div class="why-we-right">Наш Фонд финансируется исключительно за счет взносов учредителей, а также пожертвований от физических и юридических лиц. Цель нашего Фонда —  благотворительная деятельность, направленная на поддержку и развитие талантливых детей.</div>
          </div>
          <div class="peop-list">
            <div class="peop-item">
              <div class="peop-image"><img src="<?php echo get_template_directory_uri();?>/images/Photo_kashubskiy.jpg" alt=""></div>
              <div class="peop-info">
                <div class="peop-name">Андрей Кашубский</div>
                <div class="peop-job">Частный инвестор</div>
                <p>«Сначала мне повезло — в советское время образование было бесплатным. Так что мой первый диплом достался мне совершенно бесплатно, даже стипендию платили. Потом, когда пришло время поучиться в платных ВУЗах на Западе, в самые важные моменты мне помогали — я дважды получал гранты и стипендии от фондов. А сейчас пришло время, когда помочь могу я сам, и охотно делаю это. Надеюсь, и наши студенты в будущем передадут эту эстафетную палочку помощи следующим поколениям!»</p>
              </div>
            </div>
            <div class="peop-item">
              <div class="peop-image"><img src="<?php echo get_template_directory_uri();?>/images/Photo_kulichenko.jpg" alt=""></div>
              <div class="peop-info">
                <div class="peop-name">Алексей Куличенко</div>
                <div class="peop-job">Зам. генерального директора по финансам и экономике АО «Северсталь Менеджмент»</div>
                <p>«Работающие социальные лифты – критичный фактор долгосрочного и успешного развития любого общества, а доступ к хорошему образованию — важный элемент этого процесса. Надеюсь, что наш проект будет хорошей возможностью и поддержкой для амбициозных, любознательных, желающих расти и развиваться ребят, поможет им в самореализации и старте их профессионального жизненного пути.»</p>
              </div>
            </div>
            <div class="peop-item">
              <div class="peop-image"><img src="<?php echo get_template_directory_uri();?>/images/Photo_filipovskiy.jpg" alt=""></div>
              <div class="peop-info">
                <div class="peop-name">Алексей Филипповский</div>
                <div class="peop-job">Заместитель генерального директора по экономике и финансам АК"АЛРОСА" (ПАО)</div>
                <p>«В России сегодня есть много благотворительных организаций, ориентированных на помощь слабым. Идея нашего фонда заключается в помощи сильным!  А именно, в оказании содействия талантливым, амбициозным и серьезно относящихся к своему будущему старшеклассникам, которые не имеют возможности без нашей помощи поступить в ВУЗ.  Надеюсь и верю, что наше участие поможет им состояться в этой жизни, раскрыть свой потенциал и принести пользу стране и обществу.»</p>
              </div>
            </div>
          </div>
        </div>
      </div>
