<div class="container">
        <div class="form-section">
          <div class="form-heading">Заявка на участие в программе «Поддержи таланты»</div>
          <div class="form-info">Заполните все поля</div>
          <form class="form js_validate" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
          <input type="hidden" name="action" value="save_form">
            <div class="form-group">
              <div class="form-group-head">Контактные данные</div>
              <div class="form-group-info">Укажите телефон и e-mail, чтобы мы могли с вами связаться</div>
              <div class="row">
                <div class="col-sm-4 col-xs-12">
                  <div class="input-field required-field" data-error="Обязательное поле"><span class="label">Телефон</span>
                    <input name="phone" type="tel" placeholder="+7 (999) 111-11-11" data-validate="phone" required>
                  </div>
                </div>
                <div class="col-sm-8 col-xs-12">
                  <div class="input-field required-field" data-error="Неверный формат электронной почты"><span class="label">E-mail</span>
                    <input name="email" type="email" placeholder="yourmail@domain.ru" data-validate="email" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group-head form-group-head--2">Данные ребенка</div>
              <div class="row">
                <div class="col-sm-8 col-xs-12">
                  <div class="input-field required-field" data-error="Обязательное поле"><span class="label">Имя ребенка</span>
                    <input name="name" type="text" placeholder="Фамилия Имя Отчество" required>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="input-field required-field" data-error="Обязательное поле"><span class="label">Дата рождения</span>
                    <input name="birthday" class="datepicker-here" maxlength="10" type="text" placeholder="ДД.ММ.ГГГГ" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="input-field required-field" data-error="Обязательное поле"><span class="label">Населенный пункт проживания</span>
                    <input name="city" type="text" placeholder="Город, область, регион" required>
                  </div>
                </div>
              </div>
              <div class="row checkbox-group"><span class="label">Профиль образования</span>
                <div class="col-sm-4">
                  <div class="checkbox">
                    <input type="checkbox" name="math" value="Математика-физика" id="check1">
                    <label for="check1">Математика-физика</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="checkbox">
                    <input type="checkbox" name="chemistry" value="Химия-биология" id="check2">
                    <label for="check2">Химия-биология</label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="checkbox">
                    <input type="checkbox" name="other_profile" value="Другой профиль" id="check3">
                    <label for="check3">Другой профиль</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group-head">Успеваемость в школе</div>
              <div class="form-group-info">Фонд оказывает помощь способным детям имеющих хорошую успеваемочть, но не имеющих финансовую возможность дополнительной подготовки к поступлению в ВУЗ</div>
              <div class="count-block count-block--single"><span class="label">Средний балл по всем предметам</span>
                <div class="count-item">
                  <input name="avg-grade" type="tel" value="4.0" max="5" data-step="0.1" data-tofixed="1"><span class="up icon-up"></span><span class="down icon-down"></span>
                </div>
              </div>
              <div class="count-group">
                <div class="count-block"><span class="label">По математике</span>
                  <div class="count-item">
                    <input name="math-grade" type="tel" value="4.0" max="5" data-step="0.1" data-tofixed="1"><span class="up icon-up"></span><span class="down icon-down"></span>
                  </div>
                </div>
                <div class="count-block"><span class="label">По физике</span>
                  <div class="count-item">
                    <input name="physics-grade" type="tel" value="4.0" max="5" data-step="0.1" data-tofixed="1"><span class="up icon-up"></span><span class="down icon-down"></span>
                  </div>
                </div>
                <div class="count-block"><span class="label">По биологии</span>
                  <div class="count-item">
                    <input name="biology-grade" type="tel" value="4.0" max="5" data-step="0.1" data-tofixed="1"><span class="up icon-up"></span><span class="down icon-down"></span>
                  </div>
                </div>
                <div class="count-block"><span class="label">По химии</span>
                  <div class="count-item">
                    <input name="chemistry-grade" type="tel" value="4.0" max="5" data-step="0.1" data-tofixed="1"><span class="up icon-up"></span><span class="down icon-down"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group form-group--last">
              <div class="form-group-head">Финансовое состояние семьи</div>
              <div class="form-group-info">Нам важно оценить ваше финансовое состояние, чтобы принять решение об участие в программе</div>
              <div class="radio-group"><span class="label">Совокупный доход родителей в рублях</span>
                <div class="radio-box">
                  <div class="radio-item">
                    <input type="radio" name="revenue" value="25 000" id="rad1">
                    <label for="rad1">&lt; 25 000</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" name="revenue" value="25 000 – 50 000" id="rad2">
                    <label for="rad2">25 000 – 50 000</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" name="revenue" value="50 000 – 75 000" id="rad3">
                    <label for="rad3">50 000 – 75 000</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" name="revenue" value="75 000 – 100 000" id="rad4">
                    <label for="rad4">75 000 – 100 000</label>
                  </div>
                  <div class="radio-item">
                    <input type="radio" name="revenue" value="100 000" id="rad5">
                    <label for="rad5">&gt; 100 000</label>
                  </div>
                </div>
              </div>
              <div class="count-block count-block--single"><span class="label">Количество членов семьи проживающих вместе</span>
                <div class="count-item">
                  <input name="relatives-number" type="tel" value="3" max="10" data-step="1" data-tofixed="0"><span class="up icon-up"></span><span class="down icon-down"></span>
                </div>
              </div>
            </div>
            <div class="checkbox js_valid_radio">
              <input class="required" name="agree" value="Ознакомлен с Соглашением на обработку персональных данных" type="checkbox" id="check10">
              <label for="check10">Ознакомлен с</label><a href="<?php echo get_field('lic_requir')?>"> Соглашением на обработку персональных данных</a>
            </div>
            <button class="btn btn--grey" name="submit" value="Submit" type="submit">	Отправить заявку</button>
          </form>
        </div>
      </div>