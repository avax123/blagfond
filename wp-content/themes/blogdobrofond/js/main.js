(function () {

	"use strict";

	var body = $('body'),
	isMobile = false,
	scrollTopPosition,
	browserYou;
	var genFunc = {

		initialized: false,

		initialize: function () {

			if (this.initialized) return;

			this.initialized = true;

			this.build();
		},

		build: function () {
      browserYou = this.getBrowser();
      if (browserYou.platform == 'mobile') {
        isMobile = true;
        document.documentElement.classList.add('mobile');
      } else {
        document.documentElement.classList.add('desktop');
      }
      if(navigator.userAgent.indexOf("Edge") > -1){
        document.documentElement.classList.add('edge');
      }
      this.otherPlagins();
    },
    getBrowser: function () {
      var ua = navigator.userAgent;
      var bName = function () {
        if (ua.search(/Edge/) > -1) return "edge";
        if (ua.search(/MSIE/) > -1) return "ie";
        if (ua.search(/Trident/) > -1) return "ie11";
        if (ua.search(/Firefox/) > -1) return "firefox";
        if (ua.search(/Opera/) > -1) return "opera";
        if (ua.search(/OPR/) > -1) return "operaWebkit";
        if (ua.search(/YaBrowser/) > -1) return "yabrowser";
        if (ua.search(/Chrome/) > -1) return "chrome";
        if (ua.search(/Safari/) > -1) return "safari";
        if (ua.search(/maxHhon/) > -1) return "maxHhon";
      }();

      var version;
      switch (bName) {
        case "edge":
        version = (ua.split("Edge")[1]).split("/")[1];
        break;
        case "ie":
        version = (ua.split("MSIE ")[1]).split(";")[0];
        break;
        case "ie11":
        bName = "ie";
        version = (ua.split("; rv:")[1]).split(")")[0];
        break;
        case "firefox":
        version = ua.split("Firefox/")[1];
        break;
        case "opera":
        version = ua.split("Version/")[1];
        break;
        case "operaWebkit":
        bName = "opera";
        version = ua.split("OPR/")[1];
        break;
        case "yabrowser":
        version = (ua.split("YaBrowser/")[1]).split(" ")[0];
        break;
        case "chrome":
        version = (ua.split("Chrome/")[1]).split(" ")[0];
        break;
        case "safari":
        version = ua.split("Safari/")[1].split("")[0];
        break;
        case "maxHhon":
        version = ua.split("maxHhon/")[1];
        break;
      }
      var platform = 'desktop';
      if (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase())) platform = 'mobile';
      var browsrObj;
      try {
        browsrObj = {
          platform: platform,
          browser: bName,
          versionFull: version,
          versionShort: version.split(".")[0]
        };
      } catch (err) {
        browsrObj = {
          platform: platform,
          browser: 'unknown',
          versionFull: 'unknown',
          versionShort: 'unknown'
        };
      }
      return browsrObj;
    },
    otherPlagins: function () {
        $('#check-anon').on('change', function(){
          if ($(this).prop('checked')) {
            $('.name-field input').attr('disabled', 'disabled');
          } else {
            $('.name-field input').removeAttr('disabled');
          }
        });
        $('input[name="radio-group-1"]').on('change', function(){
          if ($('.another-pr').prop('checked')) {
            $('.check-item--another').addClass('active');
            $('.hidden-field').removeAttr('disabled').focus();
          } else {
            $('.check-item--another').removeClass('active');
            $('.hidden-field').attr('disabled', 'disabled');
          }
        });
        $('.hidden-field').on('input', function(){
          this.value = this.value.replace(/\D/g, '').replace('₽','') + '₽';
        });
        $('.js_validate button[type="submit"]').on("click", function () {
          return validate($(this).parents(".js_validate"));
        });
        $('.radio-item input').on('change', function(){
          $('.radio-item').removeClass('active');
          $(this).parents('.radio-item').addClass('active');
        });
        $('.check-item input').on('change', function(){
          $('.check-item').removeClass('active');
          $(this).parents('.check-item').addClass('active');
        });
        $('[type="tel"]').not('.notmask').mask("+7 (999) 999-99-99");
        if (document.querySelector('.datepicker-here') != undefined) {
            var input = document.querySelector('.datepicker-here');
  
            var dateInputMask = function dateInputMask(elm) {
              elm.addEventListener('keypress', function(e) {
                if(e.keyCode < 47 || e.keyCode > 57) {
                  e.preventDefault();
                }
                var len = elm.value.length;
                if(len === 2) {
                  elm.value += '.';
                }
                if(len === 5) {
                  elm.value += '.';
                }
              });
            };
              
            dateInputMask(input);
        }

          $(document).on('click', '.down.icon-down', function () {
            var $input = $(this).parents('.count-item').find('input'),
                step = +$input.attr('data-step'),
                 count = +($input.val()) - step;
                count = count < 0 ? 0 : count;
              if (count == 0) $(this).addClass('disabled');
              $(this).parents('.count-item').find('.up.icon-up').removeClass('disabled');
            $input.val(count.toFixed(+$input.attr('data-tofixed')));
            $input.change();
            return false;
          });
          $(document).on('click', '.up.icon-up', function () {
              var $input = $(this).parents('.count-item').find('input'),
                  _max = parseInt($input.attr('max')),
                  step = +$input.attr('data-step'),
                  _val = +($input.val()) + step;
              $(this).parents('.count-item').find('.down.icon-down').removeClass('disabled');
              if(_val < _max) {
                  $input.val(_val.toFixed(+$input.attr('data-tofixed')));
                  $input.change();
              } else {
                  $input.val(_max);
                  $input.change();
                  $(this).addClass('disabled');
              }
              return false;
          });
        var $select = $('.js-select');
          $select.each(function (j, el){
            $(el).select2({
              minimumResultsForSearch: '-1',
              dropdownParent: $(el).parents('.js-select-parent')
            });
        });
          $(document).on('click', '.mob-button ', function(){
            $(this).toggleClass('active');
            $('.mobile-nav-drop').toggleClass('visible');
            $('.mobile-nav').toggleClass('visible');
          })
          $(document).on('click', '.mobile-nav-drop', function(){
            $('.mob-button').removeClass('active');
            $('.mobile-nav-drop').removeClass('visible');
            $('.mobile-nav').removeClass('visible');
          })
          $('.slider-steps').slick({
            dots: false,
            infinite: false,
            speed: 500,
            slidesToShow: 1,
            centerMode: false,
            variableWidth: true,
            arrows: false,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  dots: true,
                }
              }
            ]
          });
          $('.plan-slider').slick({
            dots: false,
            speed: 500,
            slidesToShow: 3,
            arrows: false,
            responsive: [
              {
                breakpoint: 1023,
                settings: {
                  dots: true,
                  slidesToShow: 1,
                  variableWidth: true
                }
              }
            ]
          });
          $('.program-slider-row').slick({
            dots: false,
            infinite: false,
            speed: 500,
            slidesToShow: 1,
            centerMode: false,
            variableWidth: true,
            arrows: false,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  dots: true,
                }
              }
            ]
          });
        $('.slider-prev').on('click', function(){
          $('.slider-steps').slick('slickPrev');
          return false;
        });
        $('.slider-next').on('click', function(){
          $('.slider-steps').slick('slickNext');
          return false;
        })
        if (window.matchMedia("(max-width: 599px)").matches) {
          $('.advice-slider').slick({
            speed: 500,
            arrows: false,
            dots: true,
            slidesToShow: 1,
            variableWidth: true
          });
        } else {
          $('.advice-slider').slick('unslick');
        }
    }
  };


  genFunc.initialize();


})();
window.addEventListener('resize', function () {
  if (window.matchMedia("(max-width: 599px)").matches) {
    if (!$('.advice-slider').hasClass('slick-initialized')) {
          $('.advice-slider').slick({
            speed: 500,
            arrows: false,
            dots: true,
            slidesToShow: 1,
            variableWidth: true
          });
    }
  } else {
    if ($('.advice-slider').hasClass('slick-initialized')) {
      $('.advice-slider').slick('unslick');
    }
  }
  
});
window.addEventListener('scroll', function () {
  scrollTopPosition = window.pageYOffset ? window.pageYOffset : (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
});

function heightBlock(ell) {
  var elem = document.querySelectorAll(ell);
  var maxH = 0;
  for (var i = 0; i < elem.length; ++i) {
    elem[i].style.height = "";
    elem[i].removeAttribute("style");
    if (maxH < elem[i].offsetHeight) {
      maxH = elem[i].offsetHeight;
    }
  }
  for (var i = 0; i < elem.length; ++i) {
    elem[i].style.height = maxH + "px";
  }
}
function validate(form) {
  var error_class = "error";
  var norma_class = "pass";
  var item = form.find("[required]");
  var e = 0;
  var reg = undefined;
  var pass = form.find('.password').val();
  var pass_1 = form.find('.password_1').val();
  var email = false;
  var password = false;
  var phone = false;

  function mark(object, expression) {
      if (expression) {
          object.parents('.required-field').addClass(error_class).removeClass(norma_class);
          if (email && (object.val().length > 0)) {
              object.parents('.required-field').attr('data-error', 'Некорректный email');
          }
          if (password && (object.val().length > 0)) {
              object.parents('.required-field').attr('data-error', 'Пароль должен быть не менее 6 символов');
          }
          if (phone && (object.val().length > 0)) {
              object.parents('.required-field').attr('data-error', 'Некорректный формат телефона');
          }
          e++;
      } else
          object.parents('.required-field').addClass(norma_class).removeClass(error_class);
  }

  form.find("[required]").each(function () {
      switch ($(this).attr("data-validate")) {
          case undefined:
              mark($(this), $.trim($(this).val()).length === 0);
              break;
          case "email":
              email = true;
              reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
              mark($(this), !reg.test($.trim($(this).val())));
              email = false;
              break;
          case "phone":
              phone = true;
              // reg = /[0-9 -()+]{10}$/;
              // mark($(this), !reg.test($.trim($(this).val())));
              mark($(this), $.trim($(this).val()).length < 12);
              phone = false;
              break;
          case "pass":
              password = true;
              reg = /^[a-zA-Z0-9_-]{6,}$/;
              mark($(this), !reg.test($.trim($(this).val())));
              password = false;
              break;
          case "pass1":
              mark($(this), (pass_1 !== pass || $.trim($(this).val()).length === 0));
              break;
          default:
              reg = new RegExp($(this).attr("data-validate"), "g");
              mark($(this), !reg.test($.trim($(this).val())));
              break;
      }
  });
  $('.js_valid_radio').each(function () {
      var inp = $(this).find('input.required');
      var rezalt = 0;
      for (var i = 0; i < inp.length; i++) {
          if ($(inp[i]).is(':checked') === true) {
              rezalt = 1;
              break;
          } else {
              rezalt = 0;
          }
      }
      if (rezalt === 0) {
          $(this).addClass(error_class).removeClass(norma_class);
          e = 1;
      } else {
          $(this).addClass(norma_class).removeClass(error_class);
      }
  });
  if (e === 0) {
      return true;
  }
  else {
      form.find("." + error_class + " input:first").focus();
      return false;
  }
}
function copyToClipboard(element) {
  $('.copy-button').addClass('copied').text('Скопировано');
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  var my_textarea = document.getElementById("text");
    if(my_textarea.value !== ""){
    

    my_textarea.onfocus = function () {
        my_textarea.setSelectionRange(0, my_textarea.value.length);
            my_textarea.onfocus = undefined;
    } 
    my_textarea.focus();      
    
  } 
}



