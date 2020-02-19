<div class="container">
        <section class="add-banner-section">
          <div class="flex-wrap between-xs">
            <div class="add-banner-section_left">
              <div class="heading-section"><?php echo $post->post_title?></div>
              <div class="add-banner-section-text">
                <p><?php echo $post->post_content?></p>
              </div>
            </div>
            <div class="add-banner-section_right">
              <div class="add-banner-box">
                <div class="add-banner-head"> 
                  <div class="banner-logo"><img src="images/logo.svg" alt=""></div>
                  <div class="banner-text"><b>Бесплатная помощь одарённым детям</b>
                    <p>Достойное образование детям</p>
                  </div>
                </div>
                <div class="add-banner-bottom">
                  <div class="input-field">
                    <div class="copy-button" onclick="copyToClipboard('#text')">Скопировать</div><span class="label">Код для копирования</span>
                    <textarea id="text" readonly="true"> <?php echo get_field('banner_code')?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>