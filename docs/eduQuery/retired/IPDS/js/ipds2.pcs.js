// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null, //1
		null, //2
		function($context){
			//Matching.init($context, null);
			//reused contexts
			var $graphics = $('#info_reveal_graphics', $context);
			
			//preparing the stage
			$('dd', $context).hide();
			if(jQuery.support.opacity){
				$('img', $graphics).css('opacity', .25);
			}
			//else {
			//	$('img', $graphics).remove();
			//}
			
			//create some controls
			$('dt', $context).eq(0).wrapInner('<a href="#"></a>');
			$('dt', $context).each(function(index){
				$(this).data('graphic', {'id' : index+1, 'inProcess' : false, 'graphicDone' : false});
			});
			
			$('dl', $context).on('click.RevealInfo', 'a', function(evt){
				evt.preventDefault();
				var $this = $(this);
				var $parent = $this.closest('dt');
				
				if(!$parent.data('graphic').inProcess){
					$parent.data('graphic').inProcess = true;
					$parent.next('dd').toggle(800, function(){
						$parent.data('graphic').inProcess = false;
					});
					
					if(!$parent.data('graphic').graphicDone) {
						
						var id = $parent.data('graphic').id;
						$('img', $graphics).fadeOut(300, function(){
							$(this).remove();
							var path = 'images/circle'+id+'.gif';
							var $img = $('<img src="'+path+'" />').css('display', 'none');
							$graphics.append($img);
							$img.fadeIn(500);
							$parent.data('graphic').graphicDone = true;
							$parent.nextAll('dt').eq(0).wrapInner('<a href="#"></a>');
						});
					}
				}
			});
		}, //3
		null, //4
		null, //5
		null, //6
		null, //7
		null, //8
		null //9
	);

    return {
        setCloneBin: function(str) {
            cloneBin = str;
        },
        getCloneBin: function() {
            return cloneBin;
        },
		isScriptAtSlide: function(index) {
            if(typeof scriptsArr[index-1] === 'function') {
				return true;
			}
			else {
				// no script for this slide, so lets clear cloneBin as we won't need it to destroy or restart.
				cloneBin = "";
				return false;
			}
        },
		runScriptForSlide: function(index, $context) {
			scriptsArr[index-1]($context);
		}
    };

})();