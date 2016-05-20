$(document).ready(function () {

  $('.slick-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: false,
    autoplaySpeed: 3000,
    variableWidth: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
      }
    }]
  });

  $('.slick-career').slick({
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false
  });

  $('.ad-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 3000,
    responsive: [{
      breakpoint: 1044,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true
      }
    }]
  });

  //setting modal ad source
  $('.play-ad').click(function (e) {
    e.preventDefault();

    $('.ad-iframe').attr({src: ''});
    $('.ad-iframe').hide();
    $('.ad-image').show();
    $(this).find('.ad-iframe').attr({src: $(this).attr('data-iframe-src')}).css('display', 'block');
    $(this).find('.ad-image').hide();
  });

  //clearing ad source when modal is undeployed
  $('.ad-modal').on('hidden.bs.modal', function (e) {
    $('.ad-block').attr({src: ''});
  });

  $('#img_wrap').on('mouseenter', function () {
    $(this).toggleClass('animated', 'static');
  });

  $('.preview').click(function (e) {
    e.preventDefault();
    var lowRes = e.target.src;
    var myOverlay = document.querySelector('.overlay');
    var highRes = document.createElement('img');
    var mySpinner = document.createElement('img');

    myOverlay.style.display = 'block';
    highRes.className = 'bgImg';
    highRes.src = lowRes.substr(0, lowRes.length - 7) + '.gif';
    myOverlay.appendChild(highRes);


    mySpinner.className = 'spinner';
    mySpinner.src = 'gfx/loader.gif';
    myOverlay.appendChild(mySpinner);

    highRes.addEventListener('load', function () {
      mySpinner.parentNode.removeChild(mySpinner);
    }, false);
  });

  $('.overlay').click(function (e) {
    var myOverlay = document.querySelector('.overlay');
    myOverlay.style.display = 'none';
    oneRes.src = lowRes.substr(0, lowRes.length - 4) + '.png';
  });

  if ($("#optout").size() > 0) {
    if (afcookie["opt_status"] == "cookie") {
      $("#opt-status").prepend("You are currently opted in." + '<br/><br/><a id="optOutBtn" href="/opt-out-success" class="btn btn-orange">Opt Out</a>')
    } else if (afcookie["opt_status"] == "optedout") {
      $("#opt-status").prepend("You are currently opted out." + '<br/><br/><a id="optInBtn" href="/opt-in-success" class="btn btn-blue">Opt In</a>')
    } else {
      $("#opt-status").prepend("You do not have an Affectv cookie." + '<br/><br/><a id="optOutBtn" href="/opt-out-success" class="btn btn-orange">Opt Out</a> or <a id="optInBtn" href="/opt-in-success" class="btn btn-blue">Opt In</a>')
    }
  }
});