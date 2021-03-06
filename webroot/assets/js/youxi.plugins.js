/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 *
 * Youxi v1.1 - Template Plugins Script
 *
 * This file is part of Youxi, a HTML5 Business Theme build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * March 26, 2013
 *
 */

"use strict";

/**
* Bootstrap.js by @fat & @mdo
* plugins: bootstrap-transition.js, bootstrap-dropdown.js, bootstrap-tab.js, bootstrap-tooltip.js
* Copyright 2012 Twitter, Inc.
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(a){a(function(){a.support.transition=function(){var a=function(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"},c;for(c in b)if(a.style[c]!==undefined)return b[c]}();return a&&{end:a}}()})}(window.jQuery),!function(a){function d(){a(b).each(function(){e(a(this)).removeClass("open")})}function e(b){var c=b.attr("data-target"),d;c||(c=b.attr("href"),c=c&&/#/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,"")),d=c&&a(c);if(!d||!d.length)d=b.parent();return d}var b="[data-toggle=dropdown]",c=function(b){var c=a(b).on("click.dropdown.data-api",this.toggle);a("html").on("click.dropdown.data-api",function(){c.parent().removeClass("open")})};c.prototype={constructor:c,toggle:function(b){var c=a(this),f,g;if(c.is(".disabled, :disabled"))return;return f=e(c),g=f.hasClass("open"),d(),g||f.toggleClass("open"),c.focus(),!1},keydown:function(c){var d,f,g,h,i,j;if(!/(38|40|27)/.test(c.keyCode))return;d=a(this),c.preventDefault(),c.stopPropagation();if(d.is(".disabled, :disabled"))return;h=e(d),i=h.hasClass("open");if(!i||i&&c.keyCode==27)return c.which==27&&h.find(b).focus(),d.click();f=a("[role=menu] li:not(.divider):visible a",h);if(!f.length)return;j=f.index(f.filter(":focus")),c.keyCode==38&&j>0&&j--,c.keyCode==40&&j<f.length-1&&j++,~j||(j=0),f.eq(j).focus()}};var f=a.fn.dropdown;a.fn.dropdown=function(b){return this.each(function(){var d=a(this),e=d.data("dropdown");e||d.data("dropdown",e=new c(this)),typeof b=="string"&&e[b].call(d)})},a.fn.dropdown.Constructor=c,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=f,this},a(document).on("click.dropdown.data-api",d).on("click.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.dropdown-menu",function(a){a.stopPropagation()}).on("click.dropdown.data-api",b,c.prototype.toggle).on("keydown.dropdown.data-api",b+", [role=menu]",c.prototype.keydown)}(window.jQuery),!function(a){var b=function(b){this.element=a(b)};b.prototype={constructor:b,show:function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.attr("data-target"),e,f,g;d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,""));if(b.parent("li").hasClass("active"))return;e=c.find(".active:last a")[0],g=a.Event("show",{relatedTarget:e}),b.trigger(g);if(g.isDefaultPrevented())return;f=a(d),this.activate(b.parent("li"),c),this.activate(f,f.parent(),function(){b.trigger({type:"shown",relatedTarget:e})})},activate:function(b,c,d){function g(){e.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),b.addClass("active"),f?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu")&&b.closest("li.dropdown").addClass("active"),d&&d()}var e=c.find("> .active"),f=d&&a.support.transition&&e.hasClass("fade");f?e.one(a.support.transition.end,g):g(),e.removeClass("in")}};var c=a.fn.tab;a.fn.tab=function(c){return this.each(function(){var d=a(this),e=d.data("tab");e||d.data("tab",e=new b(this)),typeof c=="string"&&e[c]()})},a.fn.tab.Constructor=b,a.fn.tab.noConflict=function(){return a.fn.tab=c,this},a(document).on("click.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"]',function(b){b.preventDefault(),a(this).tab("show")})}(window.jQuery),!function(a){var b=function(a,b){this.init("tooltip",a,b)};b.prototype={constructor:b,init:function(b,c,d){var e,f,g,h,i;this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.enabled=!0,g=this.options.trigger.split(" ");for(i=g.length;i--;)h=g[i],h=="click"?this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this)):h!="manual"&&(e=h=="hover"?"mouseenter":"focus",f=h=="hover"?"mouseleave":"blur",this.$element.on(e+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(f+"."+this.type,this.options.selector,a.proxy(this.leave,this)));this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(b){return b=a.extend({},a.fn[this.type].defaults,this.$element.data(),b),b.delay&&typeof b.delay=="number"&&(b.delay={show:b.delay,hide:b.delay}),b},enter:function(b){var c=a.fn[this.type].defaults,d={},e;this._options&&a.each(this._options,function(a,b){c[a]!=b&&(d[a]=b)},this),e=a(b.currentTarget)[this.type](d).data(this.type);if(!e.options.delay||!e.options.delay.show)return e.show();clearTimeout(this.timeout),e.hoverState="in",this.timeout=setTimeout(function(){e.hoverState=="in"&&e.show()},e.options.delay.show)},leave:function(b){var c=a(b.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!c.options.delay||!c.options.delay.hide)return c.hide();c.hoverState="out",this.timeout=setTimeout(function(){c.hoverState=="out"&&c.hide()},c.options.delay.hide)},show:function(){var b,c,d,e,f,g,h=a.Event("show");if(this.hasContent()&&this.enabled){this.$element.trigger(h);if(h.isDefaultPrevented())return;b=this.tip(),this.setContent(),this.options.animation&&b.addClass("fade"),f=typeof this.options.placement=="function"?this.options.placement.call(this,b[0],this.$element[0]):this.options.placement,b.detach().css({top:0,left:0,display:"block"}),this.options.container?b.appendTo(this.options.container):b.insertAfter(this.$element),c=this.getPosition(),d=b[0].offsetWidth,e=b[0].offsetHeight;switch(f){case"bottom":g={top:c.top+c.height,left:c.left+c.width/2-d/2};break;case"top":g={top:c.top-e,left:c.left+c.width/2-d/2};break;case"left":g={top:c.top+c.height/2-e/2,left:c.left-d};break;case"right":g={top:c.top+c.height/2-e/2,left:c.left+c.width}}this.applyPlacement(g,f),this.$element.trigger("shown")}},applyPlacement:function(a,b){var c=this.tip(),d=c[0].offsetWidth,e=c[0].offsetHeight,f,g,h,i;c.offset(a).addClass(b).addClass("in"),f=c[0].offsetWidth,g=c[0].offsetHeight,b=="top"&&g!=e&&(a.top=a.top+e-g,i=!0),b=="bottom"||b=="top"?(h=0,a.left<0&&(h=a.left*-2,a.left=0,c.offset(a),f=c[0].offsetWidth,g=c[0].offsetHeight),this.replaceArrow(h-d+f,f,"left")):this.replaceArrow(g-e,g,"top"),i&&c.offset(a)},replaceArrow:function(a,b,c){this.arrow().css(c,a?50*(1-a/b)+"%":"")},setContent:function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},hide:function(){function e(){var b=setTimeout(function(){c.off(a.support.transition.end).detach()},500);c.one(a.support.transition.end,function(){clearTimeout(b),c.detach()})}var b=this,c=this.tip(),d=a.Event("hide");this.$element.trigger(d);if(d.isDefaultPrevented())return;return c.removeClass("in"),a.support.transition&&this.$tip.hasClass("fade")?e():c.detach(),this.$element.trigger("hidden"),this},fixTitle:function(){var a=this.$element;(a.attr("title")||typeof a.attr("data-original-title")!="string")&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},hasContent:function(){return this.getTitle()},getPosition:function(){var b=this.$element[0];return a.extend({},typeof b.getBoundingClientRect=="function"?b.getBoundingClientRect():{width:b.offsetWidth,height:b.offsetHeight},this.$element.offset())},getTitle:function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||(typeof c.title=="function"?c.title.call(b[0]):c.title),a},tip:function(){return this.$tip=this.$tip||a(this.options.template)},arrow:function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},validate:function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(b){var c=b?a(b.currentTarget)[this.type](this._options).data(this.type):this;c.tip().hasClass("in")?c.hide():c.show()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}};var c=a.fn.tooltip;a.fn.tooltip=function(c){return this.each(function(){var d=a(this),e=d.data("tooltip"),f=typeof c=="object"&&c;e||d.data("tooltip",e=new b(this,f)),typeof c=="string"&&e[c]()})},a.fn.tooltip.Constructor=b,a.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1},a.fn.tooltip.noConflict=function(){return a.fn.tooltip=c,this}}(window.jQuery);

/*
 * smartresize: special jQuery event that happens once after a window resize
 *
 * latest version and complete README available on Github:
 * https://github.com/louisremi/jquery-smartresize
 *
 * Copyright 2012 @louis_remi
 * Licensed under the MIT license.
 *
 * This saved you an hour of work? 
 * Send me music http://www.amazon.co.uk/wishlist/HNTU0468LQON
 */
;(function(a){var d=a.event,b,c;b=d.special.smartresize={setup:function(){a(this).on("resize",b.handler)},teardown:function(){a(this).off("resize",b.handler)},handler:function(a,f){var g=this,h=arguments,e=function(){a.type="smartresize";d.dispatch.apply(g,h)};c&&clearTimeout(c);f?e():c=setTimeout(e,b.threshold)},threshold:150}})(jQuery);

/*!
 * jQuery imagesLoaded plugin v2.1.1
 * http://github.com/desandro/imagesloaded
 *
 * MIT License. by Paul Irish et al.
 */
;(function(c,q){var m="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";c.fn.imagesLoaded=function(f){function n(){var b=c(j),a=c(h);d&&(h.length?d.reject(e,b,a):d.resolve(e));c.isFunction(f)&&f.call(g,e,b,a)}function p(b){k(b.target,"error"===b.type)}function k(b,a){b.src===m||-1!==c.inArray(b,l)||(l.push(b),a?h.push(b):j.push(b),c.data(b,"imagesLoaded",{isBroken:a,src:b.src}),r&&d.notifyWith(c(b),[a,e,c(j),c(h)]),e.length===l.length&&(setTimeout(n),e.unbind(".imagesLoaded",p)))}var g=this,d=c.isFunction(c.Deferred)?c.Deferred():0,r=c.isFunction(d.notify),e=g.find("img").add(g.filter("img")),l=[],j=[],h=[];c.isPlainObject(f)&&c.each(f,function(b,a){if("callback"===b)f=a;else if(d)d[b](a)});e.length?e.bind("load.imagesLoaded error.imagesLoaded",p).each(function(b,a){var d=a.src,e=c.data(a,"imagesLoaded");if(e&&e.src===d)k(a,e.isBroken);else if(a.complete&&a.naturalWidth!==q)k(a,0===a.naturalWidth||0===a.naturalHeight);else if(a.readyState||a.complete)a.src=m,a.src=d}):n();return d?d.promise(g):g}})(jQuery);

/*! http://tinynav.viljamis.com v1.1 by @viljamis */
;(function(a,i,g){a.fn.tinyNav=function(j){var b=a.extend({active:"selected",header:"",label:""},j);return this.each(function(){g++;var h=a(this),d="tinynav"+g,f=".l_"+d,e=a("<select/>").attr("id",d).addClass("tinynav "+d);if(h.is("ul,ol")){""!==b.header&&e.append(a("<option/>").text(b.header));var c="";h.addClass("l_"+d).find("a").each(function(){c+='<option value="'+a(this).attr("href")+'">';var b;for(b=0;b<a(this).parents("ul, ol").length-1;b++)c+="- ";c+=a(this).text()+"</option>"});e.append(c);b.header||e.find(":eq("+a(f+" li").index(a(f+" li."+b.active))+")").attr("selected",!0);e.change(function(){i.location.href=a(this).val()});a(f).after(e);b.label&&e.before(a("<label/>").attr("for",d).addClass("tinynav_label "+d+"_label").append(b.label))}})}})(jQuery,this,0);

/**
 * jquery.hoverdir.js v1.1.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Codrops
 * http://www.codrops.com
 */
;(function(b,f){b.HoverDir=function(a,c){this.$el=b(c);this._init(a)};b.HoverDir.defaults={speed:300,easing:"ease",hoverDelay:0,inverse:!1};b.HoverDir.prototype={_init:function(a){this.options=b.extend(!0,{},b.HoverDir.defaults,a);this.transitionProp="all "+this.options.speed+"ms "+this.options.easing;this.support=b.support.transition;this._loadEvents()},_loadEvents:function(){var a=this;this.$el.on("mouseenter.hoverdir, mouseleave.hoverdir",function(c){var d=b(this),g=d.find(".overlay"),d=a._getDir(d,{x:c.pageX,y:c.pageY}),e=a._getStyle(d);"mouseenter"===c.type?(g.hide().css(e.from),clearTimeout(a.tmhover),a.tmhover=setTimeout(function(){g.show(0,function(){var c=b(this);a.support&&c.css("transition",a.transitionProp);a._applyAnimation(c,e.to,a.options.speed)})},a.options.hoverDelay)):(a.support&&g.css("transition",a.transitionProp),clearTimeout(a.tmhover),a._applyAnimation(g,e.from,a.options.speed))})},_getDir:function(a,c){var d=a.width(),b=a.height(),e=(c.x-a.offset().left-d/2)*(d>b?b/d:1),d=(c.y-a.offset().top-b/2)*(b>d?d/b:1);return Math.round((Math.atan2(d,e)*(180/Math.PI)+180)/90+3)%4},_getStyle:function(a){var c,b,g={left:"0px",top:"-100%"},e={left:"0px",top:"100%"},f={left:"-100%",top:"0px"},h={left:"100%",top:"0px"},j={top:"0px"},k={left:"0px"};switch(a){case 0:c=!this.options.inverse?g:e;b=j;break;case 1:c=!this.options.inverse?h:f;b=k;break;case 2:c=!this.options.inverse?e:g;b=j;break;case 3:c=!this.options.inverse?f:h,b=k}return{from:c,to:b}},_applyAnimation:function(a,c,d){b.fn.applyStyle=this.support?b.fn.css:b.fn.animate;a.stop().applyStyle(c,b.extend(!0,[],{duration:d+"ms"}))}};b.fn.hoverdir=function(a){var c=b.data(this,"hoverdir");if("string"===typeof a){var d=Array.prototype.slice.call(arguments,1);this.each(function(){c?!b.isFunction(c[a])||"_"===a.charAt(0)?f.console&&f.console.error("no such method '"+a+"' for hoverdir instance"):c[a].apply(c,d):f.console&&f.console.error("cannot call methods on hoverdir prior to initialization; attempted to call method '"+a+"'")})}else this.each(function(){c?c._init():c=b.data(this,"hoverdir",new b.HoverDir(a,this))});return c}})(jQuery,window);

/* Custom Plugins (Accordion and Testimonial Switcher */
;(function( $, window, document, undefined ) {

	/* Stripped Version of jQuery-UI Accordion 1.9.2 */
	var hideProps = {};
	var showProps = {};

	hideProps.height = hideProps.paddingTop = hideProps.paddingBottom =
		hideProps.borderTopWidth = hideProps.borderBottomWidth = "hide";
	showProps.height = showProps.paddingTop = showProps.paddingBottom = 
		showProps.borderTopWidth = showProps.borderBottomWidth = "show";

	var Accordion = function( element, options ) {
		return this.init( element, options );
	}

	Accordion.prototype = {
		defaults: {
			duration: 300, 
			easing: 'swing', 
			autoHeight: true, 
			collapsible: true, 
			openFirst: true
		}, 

		init: function( element, options ) {
			this.options = $.extend( {}, this.defaults, options )
			this.element = $( element );

			this.prevShow = this.prevHide = $();

			this.headers = this.element.find( '> :even' )
				.addClass( "accordion-header" )
				.append( $( '<span class="accordion-header-icon"></span>' ) )
				.next()
				.addClass( "accordion-content" )
				.end();

			this.active = this.options.openFirst? this.headers.eq( 0 )
				.addClass( "accordion-header-active" )
				.next()
				.addClass( "accordion-content-active" )
				.show()
				.end() : $();

			function setHeights() {
				var maxHeight = 0;
				this.headers.next()
					.each(function() {
						maxHeight = Math.max( maxHeight, $( this ).css( "height", "" ).height() );
					})
					.height( maxHeight );
			};

			if( this.options.autoHeight ) {
				$( window ).on( 'resize.accordion orientationchange.accordion', $.proxy( setHeights, this ) );
				setHeights.apply( this );

				if( this.options.openFirst ) {
					this.headers.not( ':first' ).next().hide();
					this.active = this.headers.eq( 0 )
						.addClass( "accordion-header-active" )
						.next()
						.addClass( "accordion-content-active" )
						.show()
						.end();
				} else {
					this.headers.next().hide();
				}
			}

			this.headers.on( 'click', $.proxy(function( e ) {
				var active = this.active,
					clicked = $( e.currentTarget ),
					clickedIsActive = clicked[ 0 ] === active[ 0 ], 
					collapsing = clickedIsActive && this.options.collapsible, 
					toShow = collapsing ? $() : clicked.next(),
					toHide = active.next(),
					eventData = {
						oldHeader: active,
						oldPanel: toHide,
						newHeader: collapsing? $() : clicked,
						newPanel: toShow
					};

				e.preventDefault();

				if( clickedIsActive && !this.options.collapsible ) return;

				this.active = clickedIsActive ? $() : clicked;
				this._toggle( eventData );

				active
					.removeClass( "accordion-header-active" )
					.next()
					.removeClass( "accordion-content-active" )

				if( !clickedIsActive )
					clicked
						.addClass( "accordion-header-active" )
						.next()
						.addClass( "accordion-content-active" );
			}, this));

			return this;
		}, 

		_toggle: function( data ) {
			var toShow = data.newPanel,
				toHide = this.prevShow.length ? this.prevShow : data.oldPanel;
			this.prevShow.add( this.prevHide ).stop( true, true );
			this.prevShow = toShow;
			this.prevHide = toHide;

			var total, adjust = 0,
				down = toShow.length &&
					( !toHide.length || ( toShow.index() < toHide.index() ) );

			if ( !toHide.length ) {
				return toShow.animate( showProps, this.options.duration, this.options.easing );
			}
			if ( !toShow.length ) {
				return toHide.animate( hideProps, this.options.duration, this.options.easing );
			}

			total = toShow.show().outerHeight();
			toHide.animate( hideProps, {
				duration: this.options.duration,
				easing: this.options.easing,
				step: function( now, fx ) {
					fx.now = Math.round( now );
				}
			});
			toShow
				.hide()
				.animate( showProps, {
					duration: this.options.duration,
					easing: this.options.easing,
					step: function( now, fx ) {
						fx.now = Math.round( now );
						if ( fx.prop !== "height" ) {
							adjust += fx.now;
						} else {
							fx.now = Math.round( total - toHide.outerHeight() - adjust );
							adjust = 0;
						}
					}
				});
		}
	};

	$.fn.accordion = function( options ) {
		return this.each(function() {
			if ( !$.data( this, 'accordion' ) ) {
				$.data( this, 'accordion', new Accordion( this, options ) );
			}
		});
	};

	//Testimonial Switcher
	var TestimonialSwitcher = function( element, options ) {
		this.init( element, options );
	}

	TestimonialSwitcher.prototype = {
		init: function( element, options ) {
			this.photos = $( '.photo-holder img', element ).hide();
			this.articles = $( '.text article', element ).hide();

			this.indexCounter = 0;
			this.unlocked = true;
			this.show( 0 );

			$( '.next, .prev', element ).on( 'click.testimonial', $.proxy(function(e) {
				this.navigate( $( e.currentTarget ).is( '.next' ) );
			}, this));
		}, 

		hide: function( index, callback ) {
			var els = this.photos.eq( index ).add( this.articles.eq( index ) );
			els.stop(true, true).fadeOut( 'normal' ).promise().done(callback);
		}, 

		show: function( index ) {
			var els = this.photos.eq( index ).add( this.articles.eq( index ) );
			els.stop(true, true).fadeIn( 'normal' ).promise().done($.proxy(function() { this.unlocked = true; }, this));
		}, 

		navigate: function( forward ) {
			if( this.unlocked ) {
				this.unlocked = false;
				this.hide( this.indexCounter % this.articles.length, $.proxy(function() {
					this.indexCounter += (forward? 1 : -1);
					this.show( this.indexCounter % this.articles.length );
				}, this));
			}
		}
	};

	$.fn.testimonialSwitcher = function( options ) {
		return this.each(function() {
			if ( !$.data( this, 'testimonialswitcher' ) ) {
				$.data( this, 'testimonialswitcher', new TestimonialSwitcher( this, options ) );
			}
		});
	}
}) ( jQuery, window, document );