// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	var dataStore = {};
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null, //1
		null, //2
		null, //3
		null, //4
		null, //5
		null, //6
		null, //7
		null,//8
		null,//9
		function($context){
			PSS.addScript([
				function(){
					var mc1 = new MultipleChoice();
					mc1.init($('#multiplechoice1'), null);
					mc1.setMessage('win', 'Good Job! Go on the next question.');
				}, //1
				function(){
					var mc2 = new MultipleChoice();
					mc2.init($('#multiplechoice2'), null);
					mc2.setMessage('win', 'Good Job!');
				} //2
			]);
			$context.slideScroller();
		},//10
		null,//11
		null,//12
		null,//13
		null,//14
		function($context){
			PSS.addScript([
				null, //1
				function($panel){
					var mc1 = new MultipleChoice();
					mc1.init($('#multiplechoice1', $panel), null);
					mc1.setMessage('win', 'Good Job! Go on the next question.');
					//add in audio clip iframe and set up destroy method
					$panel.find('.captioned-audio').eq(0).append('<iframe width="400" scrolling="no" height="60" frameborder="0" src="RR3-15-VC1.htm"></iframe>');
					$panel.find('.controls').eq(0).one('click.DestroyIfame', '.foward a, .reverse a', function(e){
						$panel.find('.captioned-audio iframe').attr('src', '').remove();
					});
				}, //2
				function($panel){
					var mc2 = new MultipleChoice();
					mc2.init($('#multiplechoice2', $panel), null);
					mc2.setMessage('win', 'Good Job! Go on the next question.');
					//add in audio clip iframe and set up destroy method
					$panel.find('.captioned-audio').eq(0).append('<iframe width="400" scrolling="no" height="60" frameborder="0" src="RR3-15-VC2.htm"></iframe>');
					$panel.find('.controls').eq(0).one('click.DestroyIfame', '.foward a, .reverse a', function(e){
						$panel.find('.captioned-audio iframe').attr('src', '').remove();
					});
				}, //3
				function($panel){
					var mc3 = new MultipleChoice();
					mc3.init($('#multiplechoice3', $panel), null);
					mc3.setMessage('win', 'Good Job!');
					//add in audio clip iframe and set up destroy method
					$panel.find('.captioned-audio').eq(0).append('<iframe width="400" scrolling="no" height="60" frameborder="0" src="RR3-15-VC3.htm"></iframe>');
					$panel.find('.controls').eq(0).one('click.DestroyIfame', '.foward a, .reverse a', function(e){
						$panel.find('.captioned-audio iframe').attr('src', '').remove();
					});
				} //4
			]);
			$context.slideScroller();
		},//15
		function($context){
			var m1 = new Matching($context, {'mode' : 'fill-in-the-blank','shuffle_statements' : true});
		},//16
		null,//17
		null,//18
		function($context){
			var m1 = new Matching($context, {'shuffle_statements' : true});
		},//19
		null,//20
		function($context){
			var mc1 = new MultipleChoice();
			mc1.init($context, null);
			mc1.setMessage('win', 'Good job! You got them all correct.');
		},//21
		function($context){
			var m1 = new Matching($context, {'shuffle_statements' : true});
		},//22
		null,//23
		null,//24
		null,//25
		null,//26
		null,//27
		null,//28
		null,//29
		function($context){
			var m1 = new Matching($context, {'shuffle_statements' : true});
			m1.setMessage('win', 'Well done! You have ordered these correctly!');
		},//30
		null,//31
		function($context){
			var mc1 = new MultipleChoice();
			mc1.init($context, null);
			mc1.setMessage('win', 'Good job! You got them all correct.');
		},//32
		null,//33
		null,//34
		null,//35
		null,//36
		function($context){
			var m1 = new Matching($context, {'mode' : 'fill-in-the-blank','shuffle_statements' : true});
		},//37
		null,//38
		null//39
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
		},
		saveData : function(key, val){
			dataStore[key] = val;
		},
		getData : function(key){
			return dataStore[key];
		},
		clearStore : function(){
			dataStore = {};
		}
    };

})();