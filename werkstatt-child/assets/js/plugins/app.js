// Adds inverse gradient fill hover animation for portfolio masonries
(function($) {
    'use strict';
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
    
    $(function() {
        inverseGradientFillHover.init();
    });
    
})(jQuery, this);
