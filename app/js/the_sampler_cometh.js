/* globals $: true */
'use strict';

(function(){
	//create reusable interaction box
	var $interactionBox = $('<div id="boxy"><a href="" id="close">Close this example</a></div>');
	var $iframe = $('<iframe src="" width="100% height="1px" frameborder="0" scrolling="no"/></iframe>').appendTo($interactionBox);
	
	//storage for reference to activated control to remove current class at destroy time
	var $refToControl;
	
	//listener for close control
	$interactionBox.find('#close').on('click.interactionBox', function(e){
		e.preventDefault();
		
		//animate it flat to be ready for the next animation
		$iframe.animate({"height" : "1px"}, 500, killBill);
	});
	
	var killBill = function(){
		//kill anything in the iframe
		$iframe.attr('src', '');
		
		//extract interaction box from the DOM
		$interactionBox.detach();
		
		//remove visually current class from control
		$refToControl.removeClass('current');
	};
	
	$('.mainmenu').on('click.exampleControls', '.main .controls a', function(e){
		e.preventDefault();
		
		//make sure this isn't a repeat click on the current control
		if (!$(this).hasClass('current')) {
			
			//if interaction box is already in the page, close it before proceeding
			if ($('#boxy').length == 1) {
				//$interactionBox.find('#close').trigger('click.interactionBox');
				$iframe.height('1px');
				killBill();
			}
		
			var $this = $refToControl = $(this);
			
			//get data from control
			var path = $this.attr('href') + '?bool=1',
				iframeHeight = $this.attr('data-height');
			
			//set the control to visually current
			$this.addClass('current');
			
			//set the iframe path to interaction url
			$iframe.attr('src', path);
			
			//add interaction box to the DOM at our parent dd
			$this.closest('dd').append($interactionBox);
			console.log($interactionBox.height());
			//animate the iframe open to data-height
			$iframe.animate({"height" : iframeHeight+"px"}, 1000);
		}
		else{
			$interactionBox.find('#close').trigger('click.interactionBox');
		}
		
	});
})();

(function(){
	//get all the controls
	var $controls = $('.controls a');

	//give each an id and then add that id to an array
	//attach a listener to each - the listener will 
})();

var interactiveExample = function($activatingControl) {
	//create reusable interaction box
	var $interactionBox = $('<div class="boxy"><a href="" class="close">Close this example</a><iframe src="" width="100% height="1px" frameborder="0" scrolling="no"/></iframe></div>');

	// initialize
	this.$activatingControl = $activatingControl;
	this.init($activatingControl);
};

interactiveExample.prototype.init = {
  // set the control that was clicked to visually current
  this.$activatingControl.addClass('current');
	
  this.$boxy = $interactionBox.clone();
  this.$iframe = $boxy.find('iframe');

  //listener for close control
	this.$boxy.find('.close').eq(0).on('click.interactionBox', function(e){
		e.preventDefault();
		
		//animate it to 1px tall and remove
		this.$iframe.animate({"height" : "1px"}, 500, this.suspend);
	});
};

interactiveExample.prototype.suspend = {
	//neutralize the iframe
	this.$iframe.attr('src', '');
	
	//extract interaction box from the DOM
	this.$interactionBox.detach();
	
	//remove visually current class from control
	$refToControl.removeClass('current');
};

interactiveExample.prototype.reheat = {
	//reset control to current
	//repopulate the iframe
	//reattach boxy
};
