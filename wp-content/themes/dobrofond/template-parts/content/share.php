<div class="container">
        <section class="share-section">
          <div class="flex-wrap between-xs">
            <div class="share-section_left">
              <div class="heading-section"><?php echo $post->post_title?></div>
              <div class="share-section-text">
                <p><?php echo $post->post_content?></p>
              </div>
            </div>
            <div class="share-section_right">
              <div class="share-box">
                <div class="share-head">Поделиться </div>
                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir" data-image="http://new.putevka-v-zhizn.ru/images/photo_bckgrnd.jpg"></div>
              </div>
            </div>
          </div>
        </section>
      </div>