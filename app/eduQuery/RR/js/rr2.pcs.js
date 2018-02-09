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
			var mc1 = new MultipleChoice();
			mc1.init($context, null);
			mc1.setMessage('win', 'Good job! You got them all correct.');
		},//10
		null,//11
		null,//12
		null,//13
		null,//14
		null,//15
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
			PSS.addScript([
				null, //1
				null,//2
				null,//3
				null,//4
				null,//5
				null,//6
				null,//7
				null//8
				]);
			$context.slideScroller();
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
				//MultiMatch.feedback(true);
				MultiMatch.init($context, null);
			},//30
		null,//31
		null,//32
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