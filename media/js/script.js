/**
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license.
 * Copyright 2007, 2013 Brian Cherne
 */
(function(e){e.fn.hoverIntent=function(t,n,r){var i={interval:100,sensitivity:7,timeout:0};if(typeof t==="object"){i=e.extend(i,t)}else if(e.isFunction(n)){i=e.extend(i,{over:t,out:n,selector:r})}else{i=e.extend(i,{over:t,out:t,selector:n})}var s,o,u,a;var f=function(e){s=e.pageX;o=e.pageY};var l=function(t,n){n.hoverIntent_t=clearTimeout(n.hoverIntent_t);if(Math.abs(u-s)+Math.abs(a-o)<i.sensitivity){e(n).off("mousemove.hoverIntent",f);n.hoverIntent_s=1;return i.over.apply(n,[t])}else{u=s;a=o;n.hoverIntent_t=setTimeout(function(){l(t,n)},i.interval)}};var c=function(e,t){t.hoverIntent_t=clearTimeout(t.hoverIntent_t);t.hoverIntent_s=0;return i.out.apply(t,[e])};var h=function(t){var n=jQuery.extend({},t);var r=this;if(r.hoverIntent_t){r.hoverIntent_t=clearTimeout(r.hoverIntent_t)}if(t.type=="mouseenter"){u=n.pageX;a=n.pageY;e(r).on("mousemove.hoverIntent",f);if(r.hoverIntent_s!=1){r.hoverIntent_t=setTimeout(function(){l(n,r)},i.interval)}}else{e(r).off("mousemove.hoverIntent",f);if(r.hoverIntent_s==1){r.hoverIntent_t=setTimeout(function(){c(n,r)},i.timeout)}}};return this.on({"mouseenter.hoverIntent":h,"mouseleave.hoverIntent":h},i.selector)}})(jQuery);

/**
 * jQuery.countTo
 */
(function(e){function t(e,t){return e.toFixed(t.decimals)}e.fn.countTo=function(t){t=t||{};return e(this).each(function(){function l(){a+=i;u++;c(a);if(typeof n.onUpdate=="function"){n.onUpdate.call(s,a)}if(u>=r){o.removeData("countTo");clearInterval(f.interval);a=n.to;if(typeof n.onComplete=="function"){n.onComplete.call(s,a)}}}function c(e){var t=n.formatter.call(s,e,n);o.text(t)}var n=e.extend({},e.fn.countTo.defaults,{from:e(this).data("from"),to:e(this).data("to"),speed:e(this).data("speed"),refreshInterval:e(this).data("refresh-interval"),decimals:e(this).data("decimals")},t);var r=Math.ceil(n.speed/n.refreshInterval),i=(n.to-n.from)/r;var s=this,o=e(this),u=0,a=n.from,f=o.data("countTo")||{};o.data("countTo",f);if(f.interval){clearInterval(f.interval)}f.interval=setInterval(l,n.refreshInterval);c(a)})};e.fn.countTo.defaults={from:0,to:0,speed:1e3,refreshInterval:100,decimals:0,formatter:t,onUpdate:null,onComplete:null}})(jQuery);

/**
 * jQuery.smartresize
 */
(function(e){function t(e,t){return e.toFixed(t.decimals)}e.fn.countTo=function(t){t=t||{};return e(this).each(function(){function l(){a+=i;u++;c(a);if(typeof n.onUpdate=="function"){n.onUpdate.call(s,a)}if(u>=r){o.removeData("countTo");clearInterval(f.interval);a=n.to;if(typeof n.onComplete=="function"){n.onComplete.call(s,a)}}}function c(e){var t=n.formatter.call(s,e,n);o.text(t)}var n=e.extend({},e.fn.countTo.defaults,{from:e(this).data("from"),to:e(this).data("to"),speed:e(this).data("speed"),refreshInterval:e(this).data("refresh-interval"),decimals:e(this).data("decimals")},t);var r=Math.ceil(n.speed/n.refreshInterval),i=(n.to-n.from)/r;var s=this,o=e(this),u=0,a=n.from,f=o.data("countTo")||{};o.data("countTo",f);if(f.interval){clearInterval(f.interval)}f.interval=setInterval(l,n.refreshInterval);c(a)})};e.fn.countTo.defaults={from:0,to:0,speed:1e3,refreshInterval:100,decimals:0,formatter:t,onUpdate:null,onComplete:null}})(jQuery);

/**
 * jQuery.appear
 * https://github.com/bas2k/jquery.appear/
 * http://code.google.com/p/jquery-appear/
 * http://bas2k.ru/
 *
 * Copyright (c) 2009 Michael Hixson
 * Copyright (c) 2012-2014 Alexander Brovikov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */
(function(e){e.fn.appear=function(t,n){var r=e.extend({data:undefined,one:true,accX:0,accY:0},n);return this.each(function(){var n=e(this);n.appeared=false;if(!t){n.trigger("appear",r.data);return}var i=e(window);var s=function(){if(!n.is(":visible")){n.appeared=false;return}var e=i.scrollLeft();var t=i.scrollTop();var s=n.offset();var o=s.left;var u=s.top;var a=r.accX;var f=r.accY;var l=n.height();var c=i.height();var h=n.width();var p=i.width();if(u+l+f>=t&&u<=t+c+f&&o+h+a>=e&&o<=e+p+a){if(!n.appeared)n.trigger("appear",r.data)}else{n.appeared=false}};var o=function(){n.appeared=true;if(r.one){i.unbind("scroll",s);var o=e.inArray(s,e.fn.appear.checks);if(o>=0)e.fn.appear.checks.splice(o,1)}t.apply(this,arguments)};if(r.one)n.one("appear",r.data,o);else n.bind("appear",r.data,o);i.scroll(s);e.fn.appear.checks.push(s);s()})};e.extend(e.fn.appear,{checks:[],timeout:null,checkAll:function(){var t=e.fn.appear.checks.length;if(t>0)while(t--)e.fn.appear.checks[t]()},run:function(){if(e.fn.appear.timeout)clearTimeout(e.fn.appear.timeout);e.fn.appear.timeout=setTimeout(e.fn.appear.checkAll,20)}});e.each(["append","prepend","after","before","attr","removeAttr","addClass","removeClass","toggleClass","remove","css","show","hide"],function(t,n){var r=e.fn[n];if(r){e.fn[n]=function(){var t=r.apply(this,arguments);e.fn.appear.run();return t}}})})(jQuery);

/**
 * imagesLoaded PACKAGED v3.1.4
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */
(function(){function e(){}function t(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function n(e){return function(){return this[e].apply(this,arguments)}}var i=e.prototype,r=this,o=r.EventEmitter;i.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e){t={};for(n in i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n])}else t=i[e]||(i[e]=[]);return t},i.flattenListeners=function(e){var t,n=[];for(t=0;e.length>t;t+=1)n.push(e[t].listener);return n},i.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&(t={},t[e]=n),t||n},i.addListener=function(e,n){var i,r=this.getListenersAsObject(e),o="object"==typeof n;for(i in r)r.hasOwnProperty(i)&&-1===t(r[i],n)&&r[i].push(o?n:{listener:n,once:!1});return this},i.on=n("addListener"),i.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},i.once=n("addOnceListener"),i.defineEvent=function(e){return this.getListeners(e),this},i.defineEvents=function(e){for(var t=0;e.length>t;t+=1)this.defineEvent(e[t]);return this},i.removeListener=function(e,n){var i,r,o=this.getListenersAsObject(e);for(r in o)o.hasOwnProperty(r)&&(i=t(o[r],n),-1!==i&&o[r].splice(i,1));return this},i.off=n("removeListener"),i.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},i.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},i.manipulateListeners=function(e,t,n){var i,r,o=e?this.removeListener:this.addListener,s=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)o.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?o.call(this,i,r):s.call(this,i,r));return this},i.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"===n)delete i[e];else if("object"===n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},i.removeAllListeners=n("removeEvent"),i.emitEvent=function(e,t){var n,i,r,o,s=this.getListenersAsObject(e);for(r in s)if(s.hasOwnProperty(r))for(i=s[r].length;i--;)n=s[r][i],n.once===!0&&this.removeListener(e,n.listener),o=n.listener.apply(this,t||[]),o===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},i.trigger=n("emitEvent"),i.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},i.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},i._getOnceReturnValue=function(){return this.hasOwnProperty("_onceReturnValue")?this._onceReturnValue:!0},i._getEvents=function(){return this._events||(this._events={})},e.noConflict=function(){return r.EventEmitter=o,e},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return e}):"object"==typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(e){function t(t){var n=e.event;return n.target=n.target||n.srcElement||t,n}var n=document.documentElement,i=function(){};n.addEventListener?i=function(e,t,n){e.addEventListener(t,n,!1)}:n.attachEvent&&(i=function(e,n,i){e[n+i]=i.handleEvent?function(){var n=t(e);i.handleEvent.call(i,n)}:function(){var n=t(e);i.call(e,n)},e.attachEvent("on"+n,e[n+i])});var r=function(){};n.removeEventListener?r=function(e,t,n){e.removeEventListener(t,n,!1)}:n.detachEvent&&(r=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(i){e[t+n]=void 0}});var o={bind:i,unbind:r};"function"==typeof define&&define.amd?define("eventie/eventie",o):e.eventie=o}(this),function(e,t){"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(n,i){return t(e,n,i)}):"object"==typeof exports?module.exports=t(e,require("eventEmitter"),require("eventie")):e.imagesLoaded=t(e,e.EventEmitter,e.eventie)}(this,function(e,t,n){function i(e,t){for(var n in t)e[n]=t[n];return e}function r(e){return"[object Array]"===d.call(e)}function o(e){var t=[];if(r(e))t=e;else if("number"==typeof e.length)for(var n=0,i=e.length;i>n;n++)t.push(e[n]);else t.push(e);return t}function s(e,t,n){if(!(this instanceof s))return new s(e,t);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=o(e),this.options=i({},this.options),"function"==typeof t?n=t:i(this.options,t),n&&this.on("always",n),this.getImages(),a&&(this.jqDeferred=new a.Deferred);var r=this;setTimeout(function(){r.check()})}function c(e){this.img=e}function f(e){this.src=e,v[e]=this}var a=e.jQuery,u=e.console,h=u!==void 0,d=Object.prototype.toString;s.prototype=new t,s.prototype.options={},s.prototype.getImages=function(){this.images=[];for(var e=0,t=this.elements.length;t>e;e++){var n=this.elements[e];"IMG"===n.nodeName&&this.addImage(n);for(var i=n.querySelectorAll("img"),r=0,o=i.length;o>r;r++){var s=i[r];this.addImage(s)}}},s.prototype.addImage=function(e){var t=new c(e);this.images.push(t)},s.prototype.check=function(){function e(e,r){return t.options.debug&&h&&u.log("confirm",e,r),t.progress(e),n++,n===i&&t.complete(),!0}var t=this,n=0,i=this.images.length;if(this.hasAnyBroken=!1,!i)return this.complete(),void 0;for(var r=0;i>r;r++){var o=this.images[r];o.on("confirm",e),o.check()}},s.prototype.progress=function(e){this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded;var t=this;setTimeout(function(){t.emit("progress",t,e),t.jqDeferred&&t.jqDeferred.notify&&t.jqDeferred.notify(t,e)})},s.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";this.isComplete=!0;var t=this;setTimeout(function(){if(t.emit(e,t),t.emit("always",t),t.jqDeferred){var n=t.hasAnyBroken?"reject":"resolve";t.jqDeferred[n](t)}})},a&&(a.fn.imagesLoaded=function(e,t){var n=new s(this,e,t);return n.jqDeferred.promise(a(this))}),c.prototype=new t,c.prototype.check=function(){var e=v[this.img.src]||new f(this.img.src);if(e.isConfirmed)return this.confirm(e.isLoaded,"cached was confirmed"),void 0;if(this.img.complete&&void 0!==this.img.naturalWidth)return this.confirm(0!==this.img.naturalWidth,"naturalWidth"),void 0;var t=this;e.on("confirm",function(e,n){return t.confirm(e.isLoaded,n),!0}),e.check()},c.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("confirm",this,t)};var v={};return f.prototype=new t,f.prototype.check=function(){if(!this.isChecked){var e=new Image;n.bind(e,"load",this),n.bind(e,"error",this),e.src=this.src,this.isChecked=!0}},f.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},f.prototype.onload=function(e){this.confirm(!0,"onload"),this.unbindProxyEvents(e)},f.prototype.onerror=function(e){this.confirm(!1,"onerror"),this.unbindProxyEvents(e)},f.prototype.confirm=function(e,t){this.isConfirmed=!0,this.isLoaded=e,this.emit("confirm",this,t)},f.prototype.unbindProxyEvents=function(e){n.unbind(e.target,"load",this),n.unbind(e.target,"error",this)},s});

/***************************************************************
 * Corex HTML Template Script
 *
 * This is the script required for corex javascript features to work.
 *
 * File index:
 * - Gallery with Preview declaration and initialization
 * - Countdowns initializations
 * - CaroufredSel initialization for the gallery with preview
 * - Revolution Slider initialization
 * - Magnific Popup initialization
 * - Isotope initialization
 * - Latest posts accordion initialization
 * - Google map initialization
 * - Counters and progress bars Initialization
 * - Layout elements initialization
 * - Stellar initialization
 * - Ajax Loader initialization
 * - Tooltips initialization
 * - "On resize" changes
 * - Other components initialization
 ***************************************************************/

/**
 * Layout elements initialization
 */
(function ($) { "use strict";

    // header position
    var duration = 500;
    var offset_stuck = 300;
    var offset_show_down = 520;
    jQuery(window).scroll(function () {
        if (!($('body').hasClass('screen-head'))) {
            if ($(window).width() > 983) {
                if (jQuery(this).scrollTop() > offset_stuck) {
                    jQuery('header').addClass('navbar-fixed-top metro-small');
                    jQuery('.uber-menu').addClass('pre-fixed');
                    $('body').css("margin-top", "100px");
                    jQuery('#nav-shop').addClass('fixed-top');
                    jQuery('#search').addClass('fixed-top');
                    jQuery('#login').addClass('fixed-top');
                    jQuery('#register').addClass('fixed-top');

                } else {
                    jQuery('header').removeClass('navbar-fixed-top metro-small');
                    jQuery('.uber-menu').removeClass('pre-fixed');
                    $('body').css("margin-top", "0");
                    jQuery('#nav-shop').removeClass('fixed-top');
                    jQuery('#search').removeClass('fixed-top');
                    jQuery('#login').removeClass('fixed-top');
                    jQuery('#register').removeClass('fixed-top');
                    jQuery('.uber-menu').removeClass('fixed-top');

                }
            }
            if (jQuery(this).scrollTop() > offset_show_down) {
                jQuery('header').addClass('navbar-show-down');
                jQuery('.uber-menu').addClass('fixed-top');
                jQuery('#nav-shop').addClass('show-down');
                jQuery('#search').addClass('show-down');
                jQuery('#login').addClass('show-down');
                jQuery('#register').addClass('show-down');

            } else {
                jQuery('header').removeClass('navbar-show-down');
                jQuery('#nav-shop').removeClass('show-down');
                jQuery('#search').removeClass('show-down');
                jQuery('#login').removeClass('show-down');
                jQuery('#register').removeClass('show-down');
                jQuery('.uber-menu').removeClass('show-down');
            }
        }
        else {
            if ((jQuery(this).scrollTop() > $('.screen-banner').height()) && ($(window).width() > 1000)) {
                jQuery('header').addClass('navbar-fixed-top metro-small');
                jQuery('header').addClass('navbar-show-down');
                jQuery('#nav-shop').addClass('fixed-top');
                jQuery('#search').addClass('fixed-top');
                jQuery('#login').addClass('fixed-top');
                jQuery('#register').addClass('fixed-top');
                jQuery('.uber-menu').addClass('fixed-top');

            }
            else {
                jQuery('header').removeClass('navbar-fixed-top');
                jQuery('header').removeClass('navbar-show-down');
                jQuery('#nav-shop').removeClass('fixed-top');
                jQuery('#search').removeClass('fixed-top');
                jQuery('#login').removeClass('fixed-top');
                jQuery('#register').removeClass('fixed-top');
                jQuery('.uber-menu').removeClass('fixed-top');

            }
        }
    });

    // totop button
    $(window).scroll(function () {
        if ($(window).scrollTop() > 1000 ) {
            jQuery('#totop').removeClass('collapsed');
        }
        else {
            jQuery('#totop').addClass('collapsed');
        }
    });

    jQuery('#totop').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    });

    // second level menu items
    $(".menu-parent")
        .mouseenter(function () {
            if ($('> .dropdown', this).offset().left + $('> .dropdown', this).width() > $(window).width()) {
                $('> .dropdown', this).addClass('repositioned');

            }
            else {
                $('> .dropdown', this).addClass('normal');
            }
        })
        .mouseleave(function () {
            $('> .dropdown', this).removeClass('repositioned');
            $('> .dropdown', this).removeClass('normal');
        });

    // menu items hover handle
    function expanddrop() {
        $(this).children(".dropdown-menu").stop().fadeIn(250);
    }

    function contractdrop() {
        $(this).children(".dropdown-menu").stop().fadeOut(400);
    }

    var configdrop = {
        over: expanddrop,
        interval: 100,
        out: contractdrop
    };

    $(".dropdown").hoverIntent(configdrop);

    function expanduber() {
        $(this).children(".uber-menu").stop().fadeIn(250);
    }

    function contractuber() {
        $(this).children(".uber-menu").stop().fadeOut(400);
    }

    var configuber = {
        over: expanduber,
        interval: 100,
        out: contractuber
    };

    $(".uber-dropdown").hoverIntent(configuber);

})(jQuery);

/**
 * Gallery with preview declaration and initialization
 */
(function ($) { "use strict";

    $.fn.Holo_Gallery = function () {

        var $gallery_container = $(this);
        var $images_container = $('.images', $gallery_container);

        $gallery_container.prepend('<div class="main frame"><div class="preview-wrapper mgp-gal"></div></div>');

        var $main_frame = $('.main.frame');

        var $preview_wrapper = $('.preview-wrapper', $gallery_container);

        var navigation = '<a class="control left"><i class="fa fa-chevron-right"></i></a><a class="control right"><i class="fa fa-chevron-left"></i></a>';

        $('.thumb', $gallery_container).prepend(navigation);

        var preview_image = $('>:first-child', $images_container).data('preview');

        $preview_wrapper.append(
            '<div style="position: relative; "><a href="' + preview_image + ' " class="overlay" rel="prettyPhoto">'
                + '<i class="fa fa-search md"></i>'
                + '</a>'
                + '<img src="' + preview_image + '" class="img-responsive" alt=""></div>'
        );

        $preview_wrapper.imagesLoaded(function () {
            var preview_height = $preview_wrapper.height();

            $preview_wrapper.css({
                height: preview_height + 'px',
                width: '100%'
            });

            $preview_wrapper.children('div').remove();

            $images_container.children('.frame').each(function (index, value) {

                $(this).attr('data-gallery_id', index);

                var preview_image = $(this).data('preview');

                if (index == 0) {
                    $preview_wrapper.append(
                        '<div style="position: relative;" data-gallery_id="' + index + '" class="preview-image active"><a href="' + preview_image + ' " class="overlay">'
                            + '<i class="fa fa-search md"></i>'
                            + '</a>'
                            + '<img src="' + preview_image + '" class="img-responsive" alt=""></div>'
                    );
                } else {
                    $preview_wrapper.append(
                        '<div style="position: absolute; top: 0;" data-gallery_id="' + index + '" class="preview-image"><a href="' + preview_image + ' " class="overlay">'
                            + '<i class="fa fa-search md"></i>'
                            + '</a>'
                            + '<img src="' + preview_image + '" class="img-responsive" alt=""></div>'
                    );
                }

            });

            if ( jQuery().magnificPopup ) {
                $('.mgp-img').magnificPopup({
                    type: 'image',
                    removalDelay: 150,
                    mainClass: 'mgp-fade'
                });
            }

        });

        $('.frame', $images_container).hoverIntent({
            over: function() {
                var gallery_id = $(this).data('gallery_id');

                $('div.active', $preview_wrapper).stop().removeClass('active');

                $('div[data-gallery_id="' + gallery_id + '"]', $preview_wrapper).delay(3000).addClass('active');
            },
            out: function() {},
            interval: 100
        });

        $(window).smartresize(function() {

            var preview_height = $preview_wrapper.find('.preview-image').height();

            $preview_wrapper.css({
                height: preview_height + 'px',
                width: '100%'
            });

            var thumb_height = $('.gallery.preview').find('.navigation .frame').height();

            $('.gallery.preview .caroufredsel_wrapper').css('height', thumb_height + 10 + 'px');
        });

    };

    $('.gallery.preview').Holo_Gallery();

})(jQuery);

/**
 * Countdown initialization
 */
(function ($) { "use strict";

    $('.countdown').each(function () {

        var date = $(this).data('countdown');
        var markup = $(this).html();

        var $countdown = $('.countdown');

        $countdown.countdown(date, function (event) {
            $(this).html(event.strftime(markup));
        });

        $countdown.show();
    });

})(jQuery);

/**
 * CarouFredSel initialization
 */
(function ($) { "use strict";

    if (jQuery().imagesLoaded && jQuery().carouFredSel) {

        var $gallery = $('.gallery.preview .img-container .images');

        $(".images").imagesLoaded(function () {

            $gallery.carouFredSel({
                responsive: true,
                circular: false,
                infinite: false,
                items: {
                    visible: {
                        min: 4,
                        max: 7
                    }
                },
                scroll: {
                    items: 'page',
                    duration: 300
                },
                prev: {
                    button: ".right",
                    key: "left"
                },
                next: {
                    button: ".left",
                    key: "right"
                },
                align: 'center',
                auto: false
            });
        });
    }

})(jQuery);

/**
 * Revolution Slider intialization
 */
(function ($) { "use strict";

    try {
        jQuery('.shop-slider.banner, .banner').css('visibility', 'visible');

        jQuery('.shop-slider.banner').revolution({
            hideTimerBar: "on",
            fullWidth: "on",
            delay: 9000,
            startwidth: 1920,
            startheight: 500,
            hideThumbs: 10
        });

        jQuery('.banner').revolution({
            hideTimerBar: "on",
            fullWidth: "on",
            delay: 9000,
            startwidth: 1920,
            startheight: 650,
            hideThumbs: 10,
            dottedOverlay: "twoxtwo"
        });

    }
    catch (err) { }

})(jQuery);

/**
 * Magnific Popup initialization
 */
(function ($) { "use strict";

    if ( jQuery().magnificPopup ) {
        $('.mgp-img').magnificPopup({
            type: 'image',
            removalDelay: 150,
            mainClass: 'mgp-fade'
        });

        $('.mgp-gal').each(function () {
            $(this).magnificPopup({
                type: 'image',
                delegate: 'a.overlay',
                removalDelay: 150,

                gallery: { enabled: true },

                callbacks: {

                    buildControls: function () {
                        // re-appends controls inside the main container
                        this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
                    }
                }
            });
        });


        $('.video-popup-link').magnificPopup({
            type: 'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });

        $('.video-popup-link').click(function () {
            $('.banner').revpause();
        });

        var slidervidOpen = 0;

        $('.main-slider-video-wrapper').click(function () {
            var magnificPopup = $.magnificPopup.instance;
            magnificPopup.close();
            slidervidOpen = 1;

        });

        $.magnificPopup.instance.close = function () {

            if (slidervidOpen == 1) {
                $('.banner').revresume();
            }

            $.magnificPopup.proto.close.call(this);
            slidervidOpen = 0;

        };
    }

})(jQuery);

/**
 * Isotope initialization
 */
(function ($) { "use strict";

    jQuery(window).load(function () {
        var container = jQuery('.isotope-container');

        if (container.length > 0) {

            if (jQuery().imagesLoaded && jQuery().isotope) {

                if (document.querySelector('body').offsetHeight < window.innerHeight) {
                    document.documentElement.style.overflowY = 'scroll';
                }

                // init the plugin
                container.imagesLoaded(function () {

                    jQuery('.ajax-page-preloader').css({
                        display: 'none'
                    });

                    container.fadeIn(1000, function () {
                        try {
                            $('video.self-host').mediaelementplayer({
                                enableAutosize: true,
                                videoWidth: -1,
                                videoHeight: -1
                            });
                        }
                        catch (err) { }

                        try {
                            $('audio').mediaelementplayer({
                                enableAutosize: true,
                                features: ['playpause', 'progress', 'current']
                            });
                        }
                        catch (err) { }
                    }).isotope({
                        layoutMode: 'sloppyMasonry',
                        itemSelector: '.isotope-element'
                    });
                });

                // reLayout the isotope plugin if the windows is resized
                jQuery(window).smartresize(function () {
                    container.isotope('reLayout');
                });

                // handle the isotope filter
                jQuery('ol.portfolio-isotope-filters li').click(function () {
                    var selector = jQuery(this).attr('data-filter');
                    container.isotope({ filter: selector });
                    return false;
                });
            }
        }
        else {
            try {
                $('video.self-host').mediaelementplayer({
                    enableAutosize: true,
                    videoWidth: -1,
                    videoHeight: -1
                });
            }
            catch (err) { }

            try {
                $('audio').mediaelementplayer({
                    enableAutosize: true,
                    features: ['playpause', 'progress', 'current']
                });
            }
            catch (err) { }
        }
    });

    jQuery(window).load(function () {

        var container = jQuery('.masonry-container');

        if (jQuery().imagesLoaded && jQuery().isotope) {

            // init the plugin
            container.imagesLoaded(function () {

                jQuery('.ajax-page-preloader').css({
                    display: 'none'
                });

//                container.fadeIn(1000).isotope({
//                    layoutMode: 'sloppyMasonry',
//                    itemSelector: '.isotope-element'
//                });

                container.imagesLoaded(function () {
                    container.fadeIn(1000).isotope({
                        itemSelector: '.mason-el'
                    });
                });
            });

            // reLayout the isotope plugin if the windows is resized
            jQuery(window).smartresize(function () {
                container.isotope('reLayout');
            });

            // handle the isotope filter
            jQuery('ol.portfolio-isotope-filters li').click(function () {
                var selector = jQuery(this).attr('data-filter');
                container.isotope({ filter: selector });
                return false;
            });
        }

    });

    $(".portfolio-isotope-filters .filter").click(function () {
        $(".portfolio-isotope-filters .filter").removeClass('active');
        $(this).addClass('active');
    });

})(jQuery);

/**
 * Latest posts accordion initialization
 */
(function ($) { "use strict";

    handleLatestPostsAnimations();

    // handles latest post hover animations
    function handleLatestPostsAnimations() {

        var postsContainer = jQuery('.post-acc .elements');
        var post = jQuery('.elements .element');

        var postWidth = 0;
        var pixelsToMove = 0;
        var postHeight = 0;

        var secondPostLeftPosition = 290;
        var lastPostLeftPosition = 580;

        var isHovered = false;

        var firstPost = jQuery('.latest-post');
        var secondElement = jQuery('.elements .element:nth-child(2)');
        var lastElement = jQuery('.elements .element:last-child');

        post.css({
            position: 'absolute',
            top: 0,
            float: 'none'
        });

        secondElement.css({
            left: '25%'
        });

        lastElement.css({
            left: '50%'
        });

        postsContainer.find('.element:first-child').hover(function () {

            secondElement.css({
                left: '50%'
            });

            lastElement.css({
                left: '75%'
            });

        });

        secondElement.hover(function () {
            secondElement.css({
                left: '25%'
            });

            lastElement.css({
                left: '75%'
            });
        });

        lastElement.hover(function () {
            secondElement.css({
                left: '25%'
            });

            lastElement.css({
                left: '50%'
            })
        });
    }

})(jQuery);

/**
 * Google map initialization
 */
(function ($) { "use strict";

    $('.holo-google-map').each(function () {

        var _options = $(this).data();

        var _id = $(this).attr('id');
        var _zoom = _options.zoom;
        var _center = _options.center.split(',');

        var _centerLat = parseFloat(_center[0]);
        var _centerLng = parseFloat(_center[1]);

        console.log(_centerLat + ', ' + _centerLng);

        var map;
        function initialize() {
            var mapOptions = {
                zoom: _zoom,
                center: new google.maps.LatLng(_centerLat, _centerLng),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };
            map = new google.maps.Map(document.getElementById(_id),
                mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });

})(jQuery);

/**
 * Counters and progress bars Initialization
 */
(function ($) { "use strict";

    $('.progress').appear(function() {

        var $progressBar = $('.progress-bar', $(this));

        var fillSize = $progressBar.data('size');

        $progressBar.animate({
            width: fillSize
        }, 2000, "swing", function() {
            $(".inside", $progressBar).tooltip('toggle');
        });

    });

    $('.counter').appear(function() {

        $(".count", $(this)).countTo();

    });

})(jQuery);

/**
 * Stellar initialization
 */
(function ($) { "use strict";

    try {
        $.stellar({
            horizontalScrolling: false,
            responsive: true
        });
    }
    catch (err) { }

})(jQuery);

/**
 * Ajax Loader initialization
 */
(function ($) { "use strict";

    if ($().Holo_Ajax_Loader) {
        $('.load .button').Holo_Ajax_Loader();
    }

})(jQuery);

/**
 * Tooltips initialization
 */
(function ($) {
    "use strict";

    $('[data-toggle="tooltip"]').tooltip();

})(jQuery);

/**
 * "On resize" changes
 */
(function ($) { "use strict";

    jQuery(window).smartresize(function () {

        if ($(window).width() <= 983 && !($('body').hasClass('screen-head'))) {
            $('body').css("margin-top", "0");
            jQuery('header').removeClass('navbar-fixed-top metro-small');
            jQuery('#nav-shop').removeClass('fixed-top');
            jQuery('#search').removeClass('fixed-top');
            jQuery('.uber-menu').removeClass('fixed-top');
        }
        $(".resize-item.screen-banner").height($(window).height() - $("header").height() - $(".advertising").height());

        $(".constructing .logo").css("padding-top", ($(window).height() / 4));
        $(".constructing .main-txt").css("margin-top", ($(window).height() / 10));
        if ($(window).height() > $(".constructing .container").height()) {
            $(".constructing").height($(window).height());
        }
        else {
            $(".constructing").css("height", "auto");
        }
        $(".masonry-container").isotope('reLayout');
    });

})(jQuery);

/**
 * Other components intialization
 */
(function ($) { "use strict";

    // testimonials 1 carousel indicators handle
    $('.testimonials-1.carousel-indicators li').click(function () {
        $('.testimonials-1.carousel-indicators li').removeClass('active');
        $(this).addClass('active');
    });    

    // clear form
    $(".form .clear").click(function () {
        var $form = $(this).closest('form');

        $form.find('input:text, input:password, input:file, select, textarea').val('');
        $form.find('input:radio, input:checkbox')
            .removeAttr('checked').removeAttr('selected');
    });

    // utilities buttons
    $("#register_btn").click(function (event) {
        $("#login").collapse('hide');
    });

    $("#login_btn").click(function (event) {
        $("#register").collapse('hide');
    });

    $("#nav-shop").on('show.bs.collapse', function () {
        $("header").addClass('no-shade');
    });

    $("#nav-shop").on('hidden.bs.collapse', function () {
        if (!$("#search").hasClass('collapsing')) {
            $("header").removeClass('no-shade');
        }
    });

    $("#search").on('show.bs.collapse', function () {
        $("header").addClass('no-shade');
    });

    $("#search").on('hidden.bs.collapse', function () {
        if (!$("#nav-shop").hasClass('collapsing')) {
            $("header").removeClass('no-shade');
        }
    });

    $('html').click(function (event) {

        var target = $(event.target);

        if (target.closest('#nav-shop').length == 0 || target.closest('#search').length == 0 || target.closest('#login').length == 0 || target.closest('#register').length == 0) {
            $(".utilities-buttons a").addClass("collapsed");

            if ($("#nav-shop").hasClass("in") && target.closest('#nav-shop').length == 0) {
                $("#nav-shop").collapse('hide');
            }

            if ($("#search").hasClass("in") && target.closest('#search').length == 0) {
                $("#search").collapse('hide');
            }

            if ($("#login").hasClass("in") && target.closest('#login').length == 0) {
                $("#login").collapse('hide');
            }

            if ($("#register").hasClass("in") && target.closest('#register').length == 0) {
                $("#register").collapse('hide');
            }
        }
    });

    // tabs
    $('.tab').tabs();


    $(".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *")
        .removeClass("ui-corner-all ui-corner-top")
        .addClass("ui-corner-bottom");

    // move the nav to the bottom
    $(".tabs-bottom .ui-tabs-nav").appendTo(".tabs-bottom");

    // sidebar navigation toggle
    $('.navbar-toggle').click(function () {
        var target = $('header .utilities-buttons');

        if (target.hasClass('border-bottom')) {
            target.removeClass('border-bottom');
        } else {
            target.addClass('border-bottom');
        }
    });

	// accordion filter
	var $container = $('#accordion-4').mixitup({
		targetSelector: '.panel',
		filterSelector: '.filter',
		easing: 'smooth'
	});

	//    try {
//        $(".bannecontainer video").mediaelementplayer({
//            enableAutosize: true,
//            videoWidth: -1,
//            videoHeight: -1
//        });
//    } catch (errr) { }

//    $(".bannecontainer .video-cover").click(function () {
//        var the_vid = $(this).closest('video');
//        $the_vid.play();
//        $(this).closest("video-cover").remove();
//    });

    $(".resize-item.screen-banner").height($(window).height() - $(".advertising").height() - $("header").height());

    $("#options-panel .show").click(function () {
        if ($(this).closest('#options-panel').hasClass('hid')) {
            $(this).closest('#options-panel').removeClass('hid');
        }
        else {
            $(this).closest('#options-panel').addClass('hid');
        }
    });

    $(".main-menu .main button").click(function () {
        $("header button.navbar-toggle").addClass('collapsed');
    });

    $(".portfolio.item i.fa-share").hover(function () {
        $(this).closest(".socials").css('opacity', '0.8');
    });

    $("#section-nav a.item").click(function () {
        $('html,body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        },'slow');
    });

    $("#nav-shop .item .clear").click(function () {
        $(this).closest(".item").css("display", "none");
    });

    $("#tagline .tag-close").click(function () {
        $(this).closest("#tagline").remove();
    });

    $(".cart-list .line .fa-times-circle-o").click(function () {
        $(this).closest(".line").remove();
    });

    if ( jQuery().smoothDivScroll ) {
        $(".advertising .variants").smoothDivScroll({
            mousewheelScrolling: "backAndForth",
            manualContinuousScrolling: false,
            autoScrollingMode: ""
        });
    }

    $('header .main-menu.expandable li .submenu').addClass('collapse');
    $('header .main-menu.expandable li').addClass('closed');

    $('header .main-menu.expandable>li').each(function(){
       var children = $(this).children('.submenu');

       if (children.length > 0){
            $(this).children('a').append('<span class="main-text-color exp"></span>');
       } 
    });

    $('header .main-menu.expandable li > a .exp').click(function(){
        $(this).closest('a').siblings('.submenu').collapse('toggle');
        
        if ($(this).closest('li').hasClass('closed')){
            $(this).closest('li').removeClass('closed');
            $(this).closest('li').addClass('open');
        }
        else{
            $(this).closest('li').removeClass('open');
            $(this).closest('li').addClass('closed');
        }
    });

    $(document).ready(function(){
        $('.advertising').collapse();
    });

    $('.side-menu.pinned').affix({
        offset: {
            top: 730,
            bottom: function() {
                return (this.bottom = ($('footer').height()))
            }
        }
    });

    $(".holo-scroll-to").click(function (event) {

        event.preventDefault();

//        if ($($(this).attr('href')).offset().top < 600) {
//            $('html,body').animate({scrollTop: 0},'slow');
//        } else {
            $('html,body').animate({scrollTop: $($(this).attr('href')).offset().top-70},'slow');
//        }
    });

})(jQuery);

