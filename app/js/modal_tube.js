/*! Copyright Shawn Lawler (electronsoup@gmail.com) */

var ModalTube = (function($) {
	
	// some settings used throughout
	var settings = {
		'defaultWidth' : 1200,
		'defaultHeight' : 500
	};
	var bin = {
		'initializing_control' : null
	};
	
	var $modal_markup = $('<div id="myModalTube"><div class="floater"></div><div class="modal_content"></div></div>');
	var $modal_content = $modal_markup.find('.modal_content');
	
	// object populated with functions
	var methods = {
        'init' : function(controls_wrapper_class){
			
			$modal_markup.on('click', methods.close_modal);
			
			/*set up our most common contexts*/
			var $controls = $(controls_wrapper_class);
			
			$controls.on('click', 'a', function(e){
				e.preventDefault();
				bin.initializing_control = $(this);
				var offset =  $(window).scrollTop();
				
				var w = $(this).data('width') ? $(this).data('width') : settings.defaultWidth;
				var h = $(this).data('height') ? $(this).data('height') : settings.defaultHeight;
				
				$modal_markup.find('.floater').css('margin-bottom', '-'+(h/2)+'px');
				$modal_content.css({
					'width' : w+'px',
					'height' : h+'px'
				});
				
				$modal_content.html('<div class="close_me"><a href="#"><span>Close</span></a></div><iframe width="'+w+'" height="'+h+'" src="'+$(this).attr('rel')+'" frameborder="0" tabindex="-1" allowfullscreen></iframe>');
				$modal_content.find('.close_me').one('click', methods.close_modal);
				
				if(offset > 0) {
					$modal_markup.css('top', offset);
				}
				
				$('body').append($modal_markup);
				$modal_content.focus();
				
				$(window).on('scroll.ModalTube', function(){
					var offset =  $(window).scrollTop();
					$modal_markup.css('top', offset);
				});
				
				// Feature testing for IE8 here--to correct the div.floater height (IE8 sets it to zero, instead of half the container, possibly because both are set in percentages, even though that shouldn't be a problem)
				if(document.all && document.querySelector && !document.getElementsByClassName) {
					var halfwin = $(window).height()/2;
					$modal_markup.find('.floater').height(halfwin);
				}
				
			});
        },
		'close_modal' : function(e){
			e.preventDefault();
			$(window).off('scroll.ModalTube');
			$modal_content.find('iframe').attr('src', '');
			//$modal_content.find('iframe').remove();
			$modal_content.empty();
			$modal_markup.detach();
			bin.initializing_control.focus();
		}
	}
	
	return {
		init: function(controls_wrapper_class, options) {
			if (options) {
				$.extend(settings, options);
			}
			methods.init(controls_wrapper_class);
		}
    };

})(jQuery);