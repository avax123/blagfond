<div class="container">
        <section class="make-donat">
          <div class="flex-wrap between-xs">
            <div class="make-donat_left">
              <div class="heading-section">Сделай пожертвование</div>
              <div class="make-donta-text">
                <p><?php echo get_field('name_recep'); ?></p>
              </div>
              <div class="make-dont-info">
                <div class="make-donat-info__head">Реквизиты для перевода пожертвований</div>
                <ul>
                  <li>Наименование получателя платежа<b><?php echo get_field('name_recep'); ?> </b></li>
                  <li>ИНН получателя платежа<b><?php echo get_field('cvv_recep'); ?></b></li>
                  <li>КПП получателя платежа<b><?php echo get_field('kpp_recep'); ?></b></li>
                  <li>ОГРН получателя платежа<b><?php echo get_field('ogrn_recep'); ?></b></li>
                  <li>Номер расчетного счета получателя платежа<b><?php echo get_field('num_regpd_recep'); ?></b></li>
                  <li>Банк получателя платежа<b><?php echo get_field('bank_recep'); ?></b></li>
                  <li>БИК<b><?php echo get_field('bik_recep'); ?></b></li>
                  <li>Номер корр. счета банка<b><?php echo get_field('kopr_num_recep'); ?></b></li>
                  <li>Назначение платежа<b> <?php echo get_field('paytent_recep'); ?></b></li>
                </ul><a class="btn" href="<?php echo get_field('rekvizity'); ?>" target="_blank">Скачать реквизиты</a>
              </div>
            </div>
            <div class="make-donat_right">
              <div class="form-section">
                <form class="form form-donat js_validate" action="#">
                  <div class="form-head">Пожертвовать онлайн</div>
                  <div class="input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">Назначение платежа</span>
                    <input type="text" placeholder="Помощь в развитии фонда" required>
                  </div>
                  <div class="form-group--with-checkbox">
                    <div class="checkbox">
                      <input type="checkbox" id="check-anon">
                      <label for="check-anon">Анонимно</label>
                    </div>
                    <div class="name-field input-field input-field--donat required-field" data-error="Заполните поле"><span class="label">ФИО плательщика</span>
                      <input type="text" placeholder="Имя Фамилия Отчество" required>
                    </div>
                  </div>
                  <div class="input-group input-group--check"><span class="label">Сумма пожертвования</span>
                    <div class="checkbox-group-over">
                      <div class="checkbox-group">
                        <div class="check-item">
                          <input type="radio" id="check1" name="radio-group-1">
                          <label for="check1">3000 ₽</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check2" name="radio-group-1">
                          <label for="check2">1000 ₽</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check3" name="radio-group-1">
                          <label for="check3">200 ₽</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check4" name="radio-group-1">
                          <label for="check4">100 ₽</label>
                        </div>
                        <div class="check-item check-item--another">
                          <input class="another-pr" type="radio" id="check5" name="radio-group-1">
                          <label for="check5">Другая сумма</label>
                          <input class="hidden-field notmask" type="tel"  value="₽" disabled="disabled">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input-group input-group--check"><span class="label">Периодичность списания</span>
                    <div class="checkbox-group-over">
                      <div class="checkbox-group">
                        <div class="check-item">
                          <input type="radio" id="check11" name="radio-group-2">
                          <label for="check11">Раз в год</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check21" name="radio-group-2">
                          <label for="check21">Раз в 3 месяца</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check31" name="radio-group-2">
                          <label for="check31">Раз в месяц</label>
                        </div>
                        <div class="check-item">
                          <input type="radio" id="check41" name="radio-group-2">
                          <label for="check41">Единоразово</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input-group">
                    <div class="input-field input-field--donat required-field" data-error="Неверный формат электронной почты"><span class="label">E-mail для уведомлений</span>
                      <input type="email" placeholder="yourmail@domain.ru" data-validate="email" required>
                    </div>
                  </div>
                  <div class="form-text">
                    <p>Перевод пожертвования осуществляется по защищенному каналу.</p>
                    <p>Если Вы подключили периодичные пожертвования и хотите их отключить, нажмите здесь.</p>
                  </div>
                  <button class="btn btn--grey" type="submit">	Отправить заявку</button>
                </form>
              </div>
              <div class="make-dont-info">
                <div class="make-donat-info__head">Реквизиты для перевода пожертвований</div>
                <ul>
                  <li>Наименование получателя платежа<b><?php echo get_field('name_recep'); ?> </b></li>
                  <li>ИНН получателя платежа<b><?php echo get_field('cvv_recep'); ?></b></li>
                  <li>КПП получателя платежа<b><?php echo get_field('kpp_recep'); ?></b></li>
                  <li>ОГРН получателя платежа<b><?php echo get_field('ogrn_recep'); ?></b></li>
                  <li>Номер расчетного счета получателя платежа<b><?php echo get_field('num_regpd_recep'); ?></b></li>
                  <li>Банк получателя платежа<b><?php echo get_field('bank_recep'); ?></b></li>
                  <li>БИК<b><?php echo get_field('bik_recep'); ?></b></li>
                  <li>Номер корр. счета банка<b><?php echo get_field('kopr_num_recep'); ?></b></li>
                  <li>Назначение платежа<b><?php echo get_field('paytent_recep'); ?></b></li>
                </ul><a class="btn" href="<?php echo get_field('rekvizity'); ?>">Скачать реквизиты</a>
              </div>
              <div class="button-box">
                <div class="flex-wrap between-xs row-button"><b>Оферта договора пожертвования</b><a class="btn" href="<?php echo get_field('oferta_dogovora_pozhertvovanija'); ?>" target="_blank">Скачать PDF</a></div>
                <div class="flex-wrap between-xs row-button"><b>Квитанция на пожертвование от физического лица</b><a class="btn" href="<?php echo get_field('kvitancija_na_pozhertvovanie_ot_fizicheskogo_lica'); ?>" target="_blank">Скачать PDF</a></div>
              </div>
            </div>
          </div>
        </section>
      </div>