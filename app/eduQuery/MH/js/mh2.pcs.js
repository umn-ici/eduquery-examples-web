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
		null,//2
		function($context){
			PSS.addScript([
				null, //1
				null,//2
				null,//3
				null,//4
				null //5
				]);
			$context.slideScroller();
		},//3
		null,//4
		null,//5
		function($context){
				TabbedInfo.init($context)
			},//6
		function($context){
				TabbedInfo.init($context)
			},//7
		function($context){
				TabbedInfo.init($context)
			},//8
		null,//9
		null,//10
		null,//11
		null,//12
		null,//13
		null,//14
		null,//15
		function($context){
			Matching.init($context, {'shuffle_statements' : 'true'});
		},//16
		null,//17
		null,//18
		null,//19
		null,//20
		function($context){
			Matching.init($context, {'shuffle_statements' : 'true'});
		},//21
		null,//22
		null,//23
		function($context){
				TabbedInfo.init($context)
			},//24
		null,//25
		null,//26
		null,//27
		null,//28
		null,//29
		null,//30
		null,//31
		null,//32
		null,//33
		null,//34
		null,//35
		null,//36
		null,//37
		null,//38
		null,//39
		null,//40
		null,//41
		null,//42
		null,//43
		null,//44
		null,//45
		function($context){
				//var $message = $('<div>Telling the difference between these illnesses can be hard. Consider the following issues. How might these issues affect diagnosis, support, and treatment?<ul><li>Symptoms can overlap between illnesses.</li><li>Age of onset, severity, frequency, and expression of symptoms will vary from person to person.</li><li>A person can sometimes be reluctant to share symptoms with others. He or she may be unaware of ashamed of them.</li><li>Many people suffer from more than one illness at the same time.</li></ul></div>')
				var $message ="<div>Telling the difference between these illnesses can be hard. Consider the following issues. How might these issues affect diagnosis, support, and treatment?<ul><li>Symptoms can overlap between illnesses.</li><li>Age of onset, severity, frequency, and expression of symptoms will vary from person to person.</li><li>A person can sometimes be reluctant to share symptoms with others. He or she may be unaware of ashamed of them.</li><li>Many people suffer from more than one illness at the same time.</li></ul></div>" 
				MultiMatch.final_feedback($message);
				MultiMatch.init($context, null);
			},//46
		null,//47
		null,//48
		null,//49
		null,//50
		null,//51
		function($context){
				TabbedInfo.init($context)
			}//52
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