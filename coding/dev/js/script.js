// codekit-prepend "../../bower_components/REM-unit-polyfill/js/rem.js"
// codekit-prepend "../../bower_components/responsive-img.js/responsive-img.js"
// @codekit-prepend "lib/Modernizr.js"
// @codekit-prepend "lib/svg4everybody.ie8.js"
// @codekit-prepend "../../bower_components/rocket/src/js/kit.js"

ready(function () {
  window.onscroll = function () {
    var ws = k.win.ST(),
        top = k('.banner').getTop();
    if (ws > top) {
      k('.site-head').addClass('scrolled');
    } else {
      k('.site-head').removeClass('scrolled');
    }
  };

  k('.js-pagenav a').click(function(e) {
    var id = k(this).attr('href'),
        headerH = k('.site-head').outerHeight(),
        target = k(id).getTop() - headerH - 20;

    scrollTo(target, 400);

    (e.preventDefault) ? e.preventDefault() : e.returnValue;
  });
})