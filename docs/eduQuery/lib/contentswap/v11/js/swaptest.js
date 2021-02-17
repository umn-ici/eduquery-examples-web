var SwapTest = (function($){
	
	bin = {
		'wrapper_name' : '',
		'$wrapper' : null,
		'$wrapperTemplate' : null,
		'$controls' : null,
		'$xml' : null,
		'en' : null,
		'es' : null
	};
	
	function swapTest() {
		bin.$controls = $('#swaptest_controls');
		
		$.ajax({
			url: bin.en.content, //really just need the xml file here to get an accurate count of the pages, so any of the xml files will do
			success: function(data, textStatus) {
				//alert(jQuery.isXMLDoc(data));
				//alert(typeOf(data));
				var xml;
				if(typeOf(data) === 'string') {
					xml = $.parseXML(data);
				}
				else if(typeOf(data) === 'object'){
					xml = data;
				}
				
				bin.$xml = $(xml);
				
				var id, control, dex;
				bin.$xml.find('page').each(function(index){
					id = $(this).attr('id');
					dex = index + 1;
					control = $('<a href="#">'+dex+'</a>').data('d', {'id' : id});
					bin.$controls.append(control);
				});
			}
		});
		
		bin.$controls.on('click', 'a', function(e){
			e.preventDefault();
			$this = $(this);
			$this.addClass('clicked');
			newPage($this.data('d').id);
			//console.log($(this).data('d').id);
		});
	}
	
	function newPage(id) {
		//bin.$wrapper.empty();
		//bin.$wrapper.replaceWith(bin.$wrapperTemplate.clone());
		ContentSwap.destroy();
		//bin.$wrapper.empty();
		//bin.$wrapper.replaceWith(bin.$wrapperTemplate.clone());
		ContentSwap.setDebugBool(true);
		ContentSwap.init(
			{'wrapperId' : bin.wrapper_name},
			{'pageId' : id}, // corresponds to the id attribute of the page node in the XML file which contains this pages content.
			bin.en,
			bin.es				 
		);
	}
	
	//Douglas Crockford typeof for array and null
	function typeOf(value) {
		var s = typeof value;
		if (s === 'object') {
			if (value) {
				if (value instanceof Array) {
					s = 'array';
				}
			} else {
				s = 'null';
			}
		}
		return s;
	}
	
	return {
		init: function(wrapper, langArray) {
			bin.wrapper_name = wrapper;
			bin.$wrapper = $(wrapper);
			bin.$wrapperTemplate = $(wrapper).clone();
			
			//there's just two for now, so being lazy here
			bin.en = langArray[0];
			bin.es = langArray[1];
			
			swapTest();
		}
	};
	
})(jQuery);