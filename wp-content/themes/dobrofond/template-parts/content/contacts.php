<div class="container">
        <div class="contact-section flex-wrap">
          <div class="left-contact">
            <div class="heading-section">Наши контакты</div>
            <ul class="contact-list">
              <li><span>Телефон</span><a href="tel:<?php echo str_replace('-', '', str_replace(')', '', str_replace('(','',str_replace(' ','',get_field('phone_contacts')))))?>"><?php echo get_field('phone_contacts') ?></a></li>
              <li><span>E-mail</span><a href="mailto:<?php echo get_field('email_contacts') ?>"><?php echo get_field('email_contacts') ?></a></li>
              <li><span>Адрес</span><?php echo get_field('adress_contacts') ?><</li>
            </ul>
          </div>
          <div class="right-contact">
            <div class="contact-head">Реквизиты</div>
            <ul class="contact-list">
              <li><span>ИНН</span><?php echo get_field('require_contacts') ?></li>
              <li><span>КПП</span><?php echo get_field('kpp_contacts') ?></li>
              <li><span>ОГРН</span><?php echo get_field('ogrn_contacts') ?></li>
              <li><span>Номер расчетного счета Фонда</span><?php echo get_field('num_of_found') ?></li>
              <li><span>Банк</span><?php echo get_field('bank_contacts') ?></li>
              <li><span>БИК</span><?php echo get_field('bik_contacts') ?></li>
              <li><span>Номер корр. счета банка</span><?php echo get_field('num_of_conc') ?></li>
            </ul><a class="btn" href="<?php echo get_field('fajl_rekvizitov') ?>"  target="_blank">Скачать реквизиты в PDF</a>
          </div>
        </div>
      </div>