// Adds inverse gradient fill hover animation for portfolio masonries
console.log('start');
(function($, window) {
    'use strict';
    var win = $(window),
        body = $('body');

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
                h = ((_this.outerHeight() - rel.outerHeight() - 10) / _this.outerHeight()) * 100 + '%';
                _this.hoverIntent(function() {
                    console.log('in');
                    gsap.to(target, {
                        duration: 0.25,
                        easing: Linear,
                        clipPath: 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)'
                    });
                }, function() {
                    console.log('out');
                 
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
    
    $(function() {
        inverseGradientFillHover.init();
    });
    
})(jQuery, this);
