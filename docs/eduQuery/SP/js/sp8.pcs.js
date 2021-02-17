// Per Context Scripts
// user interaction scripts for all pages in a lesson or slides in a slidescroller are written here.
// How convenient!
var PCS = (function() {
    // where we store pre script markup of slide.
	var cloneBin = "";
	
	var dataStore = {};
	
	//remember that array indexes begin with 0
	var scriptsArr = new Array(
		null,//1
		null,//3
		function($context){
				TabbedInfo.init($context)
		},//2
		null,//4
		null,//5
		null,//6
		null,//7
		null, //8
		function($context){
			var m1 = new Matching($context, {'long_statements': true});
			var scenario1 = new Scenario('#scenario1');
		},//9
		null //10
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