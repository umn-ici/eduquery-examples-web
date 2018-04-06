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

var InteractiveExample = function(activating_control_id) {
	//create reusable interaction box
	var $interaction_box = $('<div class="boxy"><a href="" class="close">Close this example</a><iframe src="" width="100% height="1px" frameborder="0" scrolling="no"/></iframe></div>');

	// initialize
	this.$activating_control = $(activating_control_id);
	this.init();
};

InteractiveExample.prototype.init = {
	this.$boxy = $interaction_box.clone();
  this.$iframe = $boxy.find('iframe');
  this.path = $activating_control.attr('href') + '?bool=1';
	this.iframeHeight = $activating_control.attr('data-height');

  //listener for close control
	this.$boxy.find('.close').eq(0).on('click.interactionBox', function(e){
		e.preventDefault();
		
		//animate it to 1px tall and remove
		this.$iframe.animate({"height" : "1px"}, 500, this.suspend);
	});

	this.activate();
};

InteractiveExample.prototype.suspend = {
	//neutralize the iframe
	this.$iframe.attr('src', '');
	
	//extract interaction box from the DOM
	this.$interactionBox.detach();
	
	//remove visually current class from control
	$refToControl.removeClass('current');
};

InteractiveExample.prototype.activate = {
	//set control to current
	this.$activating_control.addClass('current');
	//set the iframe path to interaction url
	this.$iframe.attr('src', path);
	//attach boxy
	this.$activating_control.closest('dd').append(this.$boxy);
};

(function(){
	//get all the controls
	var $controls = $('.controls a');
	var instances = [];

	$controls.each(function(index){
		//give each an id and then add that id to an array
		var uid = 'c'+index;
		$(this).attr('id', id);
		instances.push({
			id : uid,
			instance : null
		});
	});

	$('.main').eq(0).on('EDUQUERYEXAMPLES.click', '.controls a', function(e){
		e.preventDefault();
		var $target = $(event.target);
		var target_id = $target.attr('id');
		for(var i=0;i<instances.length;i++){
			if(instances[i].id === target_id){
				if(!instances[i].instance){
					instances[i].instance = new InteractiveExample(target_id);
				}
				else {
					if($target.hasClass('current')){
						instances[i].instance.suspend();
					}
					else {
						instances[i].instance.reheat();
					}
				}
			}
		}
	});

	function objWithIdIsInArray(arr, uid) {
		for(var i=0;i<arr.length;i++){
			if(arr[i].id === uid){
				return true;
			}
		}
		return false;
	}
})();
