<div class="container">
        <section class="make-donat make-donat--help">
          <div class="flex-wrap between-xs">
            <div class="make-donat_left">
              <div class="heading-section"><?php echo $post->post_title?></div>
              <div class="make-donta-text">
                <p><?php echo $post->post_content?></p>
              </div>
            </div>
            <div class="make-donat_right">
              <div class="form-section">
                <form class="form js_validate" action="form-help.php" method="post">
                <input type="hidden" name="action" value="save_form_help_themn">
                  <div class="form-head">Ваши контактные данные</div>
                  <div class="input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">Ваше имя</span>
                    <input name="fio" type="text" placeholder="Введите ваше имя" required>
                  </div>
                  <div class="input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">Как с вами связаться</span>
                    <input name="contact" type="text" placeholder="Телефон или e-mail" required>
                  </div>
                  <!-- <div class="input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">Адрес проживания</span>
                    <input type="text" placeholder="Город, область, регион" required>
                  </div>
                  <div class="input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">Чем вы хотели бы помочь</span>
                    <textarea placeholder="Напишите почему это важно для вас и чем вы готовы помочь"></textarea>
                  </div> -->
                <!--  <div class="form-btn"> -->
                    <button class="btn btn--grey" name="submit" value="submit" type="submit">	Отправить заявку</button>
                <!--  </div> -->
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>