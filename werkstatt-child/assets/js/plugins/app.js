// Adds inverse gradient fill hover animation for portfolio masonries
// Adds anchor scrolling offset for top navigation menu
(function($) {
    'use strict';
	var win = $(window),
		adminbar = $('#wpadminbar');
		
    var inverseGradientFillHover = {};
    inverseGradientFillHover = {
        selector: '.type-portfolio.thb-inverse-gradient-fill-hover',
        init: function() {
            var base = this,
            container = $(base.selector);
            container.each(function() {
                var _this = $(this),
                target = $('.thb-gradient-fill', _this),
                rel = $('.portfolio-link', _this),
                style2 = _this.hasClass('style2'),
                h = ((target.outerHeight() - rel.outerHeight()) / target.outerHeight()) * 100 + '%';
                target.css({'clip-path': 'polygon(0% ' + h + ', 100% ' + h + ', 100% 100%, 0% 100%)'});
                _this.hoverIntent(function() {
                    gsap.to(target, {
                        duration: 0.25,
                        easing: Linear,
                        clipPath: 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)'
                    });
                }, function() {
                    gsap.to(target, {
                        duration: 0.25,
                        easing: Linear,
                        clipPath: function() {
                            if (style2) {
                                return 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
                            } else {
                                return 'polygon(0% ' + h + ', 100% ' + h + ', 100% 100%, 0% 100%)';
                            }
                        }
                    });
                });
            });
        }
    };
    var hashLinks = {};
    hashLinks = {
      selector: '.hash-link[href*="#"]',
      init: function() {
        var base = this,
          container = $(base.selector);
        // unbind previous click events
        container.off('click');
        container.on('click', function(e) {
          var _this = $(this),
            url = _this.attr('href'),
            ah = adminbar.outerHeight() || 0,
            hash,
            pos;
          if (url) {
            hash = url.indexOf("#") !== -1 ? url.substring(url.indexOf("#") + 1) : '';
            pos = hash && $('#' + hash).length ? $('#' + hash).offset().top - ah - $('.header').outerHeight(): 0;
          }
          if (hash && pos) {
            pos = (hash === 'footer') ? "max" : pos;

            if (!$('#' + hash).hasClass('vc_tta-panel')) {
              gsap.to(win, {
                duration: 1,
                scrollTo: {
                  y: pos,
                  autoKill: false
                }
              });
            }
            e.preventDefault();
          }
        });
      }
    };
    $(function() {
        inverseGradientFillHover.init();
        hashLinks.init();
    });
    
})(jQuery, this);
